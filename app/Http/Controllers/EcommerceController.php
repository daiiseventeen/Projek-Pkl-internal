<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category; // PASTIKAN BARIS INI ADA
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EcommerceController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        $cartTotal = 0;
        $cartItems = [];
        $pendingOrder = null; // ✅ FIX untuk error compact()

        if (Auth::check()) {
            $pendingOrder = Order::where('user_id', Auth::id())
                ->where('status', 'pending')
                ->with('orderProduct.product')
                ->first();

            if ($pendingOrder && $pendingOrder->orderProduct) {
                $cartTotal = $pendingOrder->orderProduct->sum('subtotal');
                $cartItems = $pendingOrder->orderProduct;
            }
        }

        return view('welcome', compact('products', 'categories', 'cartTotal', 'cartItems', 'pendingOrder'));
    }


    public function createOrder(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                // Pastikan user terautentikasi sebelum membuat order
                if (!Auth::check()) {
                    throw new \Exception("User not authenticated.");
                }

                $existingPendingOrder = Order::where('user_id', Auth::Id())
                    ->where('status', 'pending')
                    ->latest()
                    ->first();

                if (!$existingPendingOrder) {
                    $order = Order::create([
                        'user_id' => Auth::id(),
                        'total_harga' => 0,
                        'status' => 'pending',
                    ]);
                } else {
                    $order = $existingPendingOrder;
                }

                $totalHarga = $order->total_harga; // Ambil total harga yang sudah ada

                // Memastikan $request->items adalah array yang bisa diulang
                if (!is_array($request->items) && !$request->items instanceof \Traversable) {
                    throw new \Exception("Request items is not a valid array or object.");
                }

                foreach ($request->items as $item) {
                    $product = Product::findOrFail($item['product_id']);
                    $subtotal = $product->harga * $item['quantity'];

                    $existingItem = OrderProduct::where('order_id', $order->id)
                        ->where('product_id', $product->id)
                        ->first();

                    if ($existingItem) {
                        // Kurangi subtotal lama dari totalHarga sebelum update
                        $totalHarga -= $existingItem->subtotal;

                        $newQuantity = $existingItem->quantity + $item['quantity'];
                        $newSubtotal = $product->harga * $newQuantity;

                        $existingItem->quantity = $newQuantity;
                        $existingItem->subtotal = $newSubtotal;
                        $existingItem->save();

                        // Tambahkan subtotal baru ke totalHarga
                        $totalHarga += $newSubtotal;
                    } else {
                        OrderProduct::create([
                            'order_id' => $order->id,
                            'product_id' => $item['product_id'],
                            'quantity' => $item['quantity'],
                            'subtotal' => $subtotal,
                        ]);
                        // Jika item baru, tambahkan subtotalnya ke totalHarga
                        $totalHarga += $subtotal;
                    }
                }

                $order->total_harga = $totalHarga;
                $order->save();
            });

            // Mendapatkan nama produk untuk pesan sukses
            $productName = Product::findOrFail($request->items[0]['product_id'])->name; // Menggunakan 'name' sesuai Blade
            $quantity = $request->items[0]['quantity'];
            return redirect()->route('home')->with('success', "$quantity x $productName berhasil ditambahkan ke keranjang!");
        } catch (\Exception $th) {
            // dd($th->getMessage()); // Untuk melihat pesan error lengkap saat debugging
            return redirect()->route('home')->with('error', 'Error: ' . $th->getMessage());
        }
    }

    public function myOrders()
    {
        // Implementasi untuk melihat pesanan saya
    }

    public function orderDetail($id)
    {
        $order = Order::with([
            'orderProduct.product',
            'user'
        ])
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        // return response()->json($order);
        return view('order.detail', compact('order'));
    }

    public function updateQuantity(Request $request)
    {
        try {
            $request->validate([
                'order_product_id' => 'required|exists:order_products,id',
                'quantity' => 'required|integer|min:1',
            ]);

            DB::transaction(function () use ($request) {
                $orderProduct = OrderProduct::findOrFail($request->order_product_id);
                $product = Product::findOrFail($orderProduct->product_id);
                $order = Order::findOrFail($orderProduct->order_id);

                if ($order->user_id !== Auth::id()) {
                    throw new \Exception('Akses tidak sah untuk pesanan ini.');
                }

                if ($order->status !== 'pending') {
                    throw new \Exception('Tidak dapat mengubah pesanan yang telah selesai.');
                }

                if ($request->quantity > $product->stok) {
                    throw new \Exception("Maaf, hanya tersedia {$product->stok} barang untuk {$product->nama}.");
                }

                // Hitung ulang subtotal
                $newSubtotal = $product->harga * $request->quantity;

                $orderProduct->quantity = $request->quantity;
                $orderProduct->subtotal = $newSubtotal;
                $orderProduct->save();

                // Update total harga di Order
                $order->total_harga = $order->orderProduct->sum('subtotal');
                $order->save();
            });

            return back()->with('success', 'Jumlah produk berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui jumlah: ' . $e->getMessage());
        }
    }


    public function removeProduct(Request $request)
    {
        try {
            $request->validate([
                'order_product_id' => 'required|exists:order_products,id',
            ]);

            DB::transaction(function () use ($request) {
                $orderProduct = OrderProduct::findOrFail($request->order_product_id);
                $order = Order::findOrFail($orderProduct->order_id);

                if ($order->user_id !== Auth::id()) {
                    throw new \Exception("Akses tidak sah.");
                }

                if ($order->status !== 'pending') {
                    throw new \Exception("Pesanan tidak bisa diubah karena sudah selesai.");
                }

                // Hapus item dan update total harga
                $orderProduct->delete();

                $order->total_harga = $order->orderProduct->sum('subtotal');
                $order->save();
            });

            return back()->with('success', 'Produk berhasil dihapus dari keranjang.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    public function checkOut(Request $request)
    {
        try {
            return DB::transaction(function () use ($request) {
                $order = Order::with('orderProduct.product')->findOrFail($request->order_id);
                if ($order->user_id != Auth::id()) {
                    return redirect()->route('orders.my')->with('error', 'Akses Tidak Sah untuk pesanan ini.');
                }

                if ($order->status !== 'pending') {
                    return redirect()->route('orders.detail', $order->id)->with('error', 'Pesanan ini sudah selesai');
                }

                if ($order->orderProduct->isEmpty()) {
                    return redirect()->route('orders.my')->with('error', 'Tidak dapat melakukan checkout pada pesanan yang kosong.');
                }

                $insufficientStock = [];
                foreach ($order->orderProduct as $item) {
                    $product = $item->product;
                    if ($item->stok < $product->quantity) {
                        $insufficientStock[] = "($product->nama) (requested: ($item->quantity), available: ($product->stok))";
                    }
                }
                if (! empty($insufficientStock)) {
                    $productList = implode(', ', $insufficientStock);
                    return redirect()->route('orders.detail', $order->id)
                        ->with('error', "Stok tidak mencukupi untuk produk berikut: {$productList}");
                }
                foreach ($order->orderProduct as $item) {
                    $product = $item->product;
                    $product->stok -= $item->quantity;
                    $product->save();
                }
                $order->status = 'completed';
                $order->save();
                return redirect()->route('orders.detail', $order->id)->with('success', 'Pembayaran Berhasil, terima kasih telah checkout!');
            });
        } catch (\Exception $e) {
            return redirect()->route('orders.detail')->with('error', 'Terjadi Kesalahan saat checkout : ' . $e->getMessage());
        }
    }
}
