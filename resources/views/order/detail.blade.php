<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        FoodMart - Free eCommerce Grocery Store HTML Website Template
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
                <path fill="currentColor"
                    d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
                <path fill="currentColor"
                    d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
            </symbol>
        </defs>
    </svg>
    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">{{ count($cartItems ?? []) }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @forelse ($cartItems ?? [] as $item)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $item->product->nama ?? 'Produk' }}</h6>
                                <small
                                    class="text-body-secondary">{{ $item->product->deskripsi ?? 'Deskripsi tidak tersedia' }}</small>
                                <small class="text-body-secondary d-block">
                                    Qty: {{ $item->quantity }} <span class="text-muted">|</span>
                                    Rp.{{ number_format($item->product->harga, 0, ',', '.') }}
                                </small>
                            </div>
                            <span
                                class="text-body-secondary">Rp.{{ number_format($item->subtotal, 0, ',', '.') }}</span>
                        </li>
                    @empty
                        <li class="list-group-item">Keranjang kosong</li>
                    @endforelse

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (Rp)</span>
                        <strong>Rp.{{ number_format($cartTotal ?? 0, 0, ',', '.') }}</strong>
                    </li>
                </ul>
                @if (isset($pendingOrder))
                    <a href="{{ route('orders.detail', $pendingOrder->id) }}"
                        class="w-100 btn btn-primary btn-lg">Lihat detail pesanan</a>
                @endif
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
        aria-labelledby="Search">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Search</span>
                </h4>
                <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
                    <input class="form-control rounded-start rounded-0 bg-light" type="email"
                        placeholder="What are you looking for?" aria-label="What are you looking for?">
                    <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row py-3 border-bottom align-items-center">
                {{-- Logo --}}
                <div class="col-6 col-md-3">
                    <div class="main-logo text-center text-md-start">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid"
                                style="max-height: 40px;">
                        </a>
                    </div>
                </div>
                {{-- Search Bar --}}
                <div class="col-md-5 d-none d-lg-block">
                    <form class="d-flex bg-light p-2 rounded-4 align-items-center gap-2" action="#"
                        method="GET">
                        <input name="q" type="text" class="form-control border-0 bg-transparent"
                            style="flex-grow: 1;" placeholder="Search for more" />
                        <button class="btn btn-outline-secondary border-0" type="submit">
                            <svg width="24" height="24">
                                <use xlink:href="#search"></use>
                            </svg>
                        </button>
                    </form>
                    {{-- Support & Icons --}}
                </div>
                <div class="col-6 col-md-4 text-end d-flex align-items-center justify-content-end gap-3">
                    <div class="d-none d-xl-block text-end me-3">
                        <small class="text-muted">For Support?</small>
                        <div class="fw-bold">+62085176978</div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="rounded-circle bg-light p-2" id="loginDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="17" height="17">
                                <use xlink:href="#user"></use>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
                            {{-- Opsi ini muncul jika pengguna BELUM login --}}
                            @guest
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            @else
                                {{-- Opsi ini muncul jika pengguna SUDAH login --}}
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <a href="#" class="rounded-circle bg-light p-2">
                        <svg width="17" height="17">
                            <use xlink:href="#heart"></use>
                        </svg>
                    </a>
                    <a href="#" class="rounded-circle bg-light p-2 d-lg-none" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasCart">
                        <svg width="17" height="17">
                            <use xlink:href="#cart"></use>
                        </svg>
                    </a>
                    <a href="#" class="rounded-circle bg-light p-2 d-lg-none" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSearch">
                        <svg width="17" height="17">
                            <use xlink:href="#search"></use>
                        </svg>
                    </a>
                    {{-- Bagian "Your Cart" ini HANYA akan dirender jika pengguna SUDAH login --}}
                    @auth
                        <div class="cart d-none d-lg-block">
                            <button class="btn btn-link text-start" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasCart">
                                <small class="text-muted">Your Cart</small><br>
                                <strong>Rp.{{ number_format($cartTotal, 0, ',', '.') }}</strong>
                            </button>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
        {{-- Navbar Menu --}}
    </header>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <a href="{{ route('orders.my') }}" class="btn btn-outline-secondary">
                    &laquo; Kembali ke Daftar Pesanan
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <!-- Informasi Pesanan -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Detail Pesanan #{{ $order->id }}</h5>
                        <span class="badge"
                            style="{{ $order->status == 'completed'
                                ? 'background-color: #198754; color: white;'
                                : 'background-color: #FFA500; color: black;' }}">
                            {{ $order->status == 'completed' ? 'Selesai' : 'Menunggu Pembayaran' }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Tanggal Pesanan:</strong></p>
                                <p>{{ $order->created_at->format('d-m-Y H:i') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Status Pesanan:</strong></p>
                                <p>{{ $order->status == 'completed' ? 'Selesai' : 'Menunggu Pembayaran' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Daftar Produk -->
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h6 class="mb-0">Produk dalam Pesanan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th width="100">Photo</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderProduct as $item)
                                        <tr>
                                            <td>
                                                @if ($item->product->gambar)
                                                    <img src="{{ asset('storage/' . $item->product->gambar) }}"
                                                        alt="{{ $item->product->nama }}" class="img-thumbnail"
                                                        width="80">
                                                @else
                                                    <div class="bg-light text-center p-2"
                                                        style="width: 80px ;height: 80px;">
                                                        <p class="mb-1">Tidak ada gambar</p>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <strong>{{ $item->product->nama }}</strong>
                                                <br>
                                                <small
                                                    class="text-muted">{{ $item->product->deskripsi ?? '' }}</small>
                                            </td>
                                            <td>Rp{{ number_format($item->product->harga, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($order->status == 'pending')
                                                    <form action="{{ route('order.update-quantity') }}"
                                                        method="POST" class="d-flex align-items-center">
                                                        @csrf
                                                        <input type="hidden" name="order_product_id"
                                                            value="{{ $item->id }}">
                                                        <input type="number" name="quantity"
                                                            value="{{ $item->quantity }}" min="1"
                                                            max="{{ $item->product->stok }}" class="form-control-sm"
                                                            style="width: 80px;">
                                                        <button type="submit" class="btn btn-sm ms-3"
                                                            style="background-color: orange; color: #fff;">Update</button>
                                                    </form>
                                                    <small class="text-muted d-block mt-1">Tersedia:
                                                        {{ $item->product->stok }}</small>
                                                @else
                                                    {{ $item->quantity }}
                                                @endif
                                            </td>
                                            <td>
                                                Rp{{ number_format($item->subtotal, 0, ',', '.') }}
                                                @if ($order->status == 'pending')
                                                    <form action="{{ route('order.remove-product', $item->id) }}"
                                                        method="POST" class="mt-2">
                                                        @csrf
                                                        <input type="hidden" name="order_product_id"
                                                            value="{{ $item->id }}">
                                                        <button type="submit" class="btn btn-sm"
                                                            style="background-color: #ff0000; color: #fff;"
                                                            onclick="
                                                    return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-end"><b>Total pesanan:</b></th>
                                        <th>Rp{{ number_format($order->total_harga, 0, ',', '.') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ringkasan pemesanan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group -flush">
                                <li class="list-group-item d-flex justify-conten-between align-items-center">
                                    Jumlah item
                                    <span>{{ $order->orderProduct->sum('quantity') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-conten-between align-items-center">
                                    Total harga
                                    <span>Rp{{ number_format($order->total_harga, 0, ',', '.') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-conten-between align-items-center">
                                    Status pesanan
                                    <span class="badge"
                                        style="{{ $order->status == 'completed'
                                            ? 'background-color: #198754; color: white;'
                                            : 'background-color: #FFA500; color: black;' }}">
                                        {{ $order->status == 'completed' ? 'Selesai' : 'Menunggu Pembayaran' }}
                                    </span </li>
                            </ul>
                            @if ($order->status == 'pending')
                                <div class="mt-3">
                                    <form action="{{ route('checkout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                                        <button type="submit" class="btn btn-primary w-100">Bayar sekarangg</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-menu">
                        <img src="images/logo.png" alt="logo">
                        <div class="social-links mt-5">
                            <ul class="d-flex list-unstyled gap-2">
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M22.991 3.95a1 1 0 0 0-1.51-.86a7.48 7.48 0 0 1-1.874.794a5.152 5.152 0 0 0-3.374-1.242a5.232 5.232 0 0 0-5.223 5.063a11.032 11.032 0 0 1-6.814-3.924a1.012 1.012 0 0 0-.857-.365a.999.999 0 0 0-.785.5a5.276 5.276 0 0 0-.242 4.769l-.002.001a1.041 1.041 0 0 0-.496.89a3.042 3.042 0 0 0 .027.439a5.185 5.185 0 0 0 1.568 3.312a.998.998 0 0 0-.066.77a5.204 5.204 0 0 0 2.362 2.922a7.465 7.465 0 0 1-3.59.448A1 1 0 0 0 1.45 19.3a12.942 12.942 0 0 0 7.01 2.061a12.788 12.788 0 0 0 12.465-9.363a12.822 12.822 0 0 0 .535-3.646l-.001-.2a5.77 5.77 0 0 0 1.532-4.202Zm-3.306 3.212a.995.995 0 0 0-.234.702c.01.165.009.331.009.488a10.824 10.824 0 0 1-.454 3.08a10.685 10.685 0 0 1-10.546 7.93a10.938 10.938 0 0 1-2.55-.301a9.48 9.48 0 0 0 2.942-1.564a1 1 0 0 0-.602-1.786a3.208 3.208 0 0 1-2.214-.935q.224-.042.445-.105a1 1 0 0 0-.08-1.943a3.198 3.198 0 0 1-2.25-1.726a5.3 5.3 0 0 0 .545.046a1.02 1.02 0 0 0 .984-.696a1 1 0 0 0-.4-1.137a3.196 3.196 0 0 1-1.425-2.673c0-.066.002-.133.006-.198a13.014 13.014 0 0 0 8.21 3.48a1.02 1.02 0 0 0 .817-.36a1 1 0 0 0 .206-.867a3.157 3.157 0 0 1-.087-.729a3.23 3.23 0 0 1 3.226-3.226a3.184 3.184 0 0 1 2.345 1.02a.993.993 0 0 0 .921.298a9.27 9.27 0 0 0 1.212-.322a6.681 6.681 0 0 1-1.026 1.524Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M23 9.71a8.5 8.5 0 0 0-.91-4.13a2.92 2.92 0 0 0-1.72-1A78.36 78.36 0 0 0 12 4.27a78.45 78.45 0 0 0-8.34.3a2.87 2.87 0 0 0-1.46.74c-.9.83-1 2.25-1.1 3.45a48.29 48.29 0 0 0 0 6.48a9.55 9.55 0 0 0 .3 2a3.14 3.14 0 0 0 .71 1.36a2.86 2.86 0 0 0 1.49.78a45.18 45.18 0 0 0 6.5.33c3.5.05 6.57 0 10.2-.28a2.88 2.88 0 0 0 1.53-.78a2.49 2.49 0 0 0 .61-1a10.58 10.58 0 0 0 .52-3.4c.04-.56.04-3.94.04-4.54ZM9.74 14.85V8.66l5.92 3.11c-1.66.92-3.85 1.96-5.92 3.08Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1.04 17.52q.1-.16.32-.02a21.308 21.308 0 0 0 10.88 2.9a21.524 21.524 0 0 0 7.74-1.46q.1-.04.29-.12t.27-.12a.356.356 0 0 1 .47.12q.17.24-.11.44q-.36.26-.92.6a14.99 14.99 0 0 1-3.84 1.58A16.175 16.175 0 0 1 12 22a16.017 16.017 0 0 1-5.9-1.09a16.246 16.246 0 0 1-4.98-3.07a.273.273 0 0 1-.12-.2a.215.215 0 0 1 .04-.12Zm6.02-5.7a4.036 4.036 0 0 1 .68-2.36A4.197 4.197 0 0 1 9.6 7.98a10.063 10.063 0 0 1 2.66-.66q.54-.06 1.76-.16v-.34a3.562 3.562 0 0 0-.28-1.72a1.5 1.5 0 0 0-1.32-.6h-.16a2.189 2.189 0 0 0-1.14.42a1.64 1.64 0 0 0-.62 1a.508.508 0 0 1-.4.46L7.8 6.1q-.34-.08-.34-.36a.587.587 0 0 1 .02-.14a3.834 3.834 0 0 1 1.67-2.64A6.268 6.268 0 0 1 12.26 2h.5a5.054 5.054 0 0 1 3.56 1.18a3.81 3.81 0 0 1 .37.43a3.875 3.875 0 0 1 .27.41a2.098 2.098 0 0 1 .18.52q.08.34.12.47a2.856 2.856 0 0 1 .06.56q.02.43.02.51v4.84a2.868 2.868 0 0 0 .15.95a2.475 2.475 0 0 0 .29.62q.14.19.46.61a.599.599 0 0 1 .12.32a.346.346 0 0 1-.16.28q-1.66 1.44-1.8 1.56a.557.557 0 0 1-.58.04q-.28-.24-.49-.46t-.3-.32a4.466 4.466 0 0 1-.29-.39q-.2-.29-.28-.39a4.91 4.91 0 0 1-2.2 1.52a6.038 6.038 0 0 1-1.68.2a3.505 3.505 0 0 1-2.53-.95a3.553 3.553 0 0 1-.99-2.69Zm3.44-.4a1.895 1.895 0 0 0 .39 1.25a1.294 1.294 0 0 0 1.05.47a1.022 1.022 0 0 0 .17-.02a1.022 1.022 0 0 1 .15-.02a2.033 2.033 0 0 0 1.3-1.08a3.13 3.13 0 0 0 .33-.83a3.8 3.8 0 0 0 .12-.73q.01-.28.01-.92v-.5a7.287 7.287 0 0 0-1.76.16a2.144 2.144 0 0 0-1.76 2.22Zm8.4 6.44a.626.626 0 0 1 .12-.16a3.14 3.14 0 0 1 .96-.46a6.52 6.52 0 0 1 1.48-.22a1.195 1.195 0 0 1 .38.02q.9.08 1.08.3a.655.655 0 0 1 .08.36v.14a4.56 4.56 0 0 1-.38 1.65a3.84 3.84 0 0 1-1.06 1.53a.302.302 0 0 1-.18.08a.177.177 0 0 1-.08-.02q-.12-.06-.06-.22a7.632 7.632 0 0 0 .74-2.42a.513.513 0 0 0-.08-.32q-.2-.24-1.12-.24q-.34 0-.8.04q-.5.06-.92.12a.232.232 0 0 1-.16-.04a.065.065 0 0 1-.02-.08a.153.153 0 0 1 .02-.06Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Ultras</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item">
                                <a href="#" class="nav-link">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Conditions </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Our Journals</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Careers</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Affiliate Programme</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Ultras Press</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Customer Service</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item">
                                <a href="#" class="nav-link">FAQ</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Returns & Refunds</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Cookie Guidelines</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Delivery Information</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Customer Service</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item">
                                <a href="#" class="nav-link">FAQ</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Returns & Refunds</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Cookie Guidelines</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="nav-link">Delivery Information</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Subscribe Us</h5>
                        <p>Subscribe to our newsletter to get updates about our grand offers.</p>
                        <form class="d-flex mt-3 gap-0" role="newsletter">
                            <input class="form-control rounded-start rounded-0 bg-light" type="email"
                                placeholder="Email Address" aria-label="Email Address">
                            <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>© 2023 Foodmart. All rights reserved.</p>
                </div>
                <div class="col-md-6 credit-link text-start text-md-end">
                    <p>Free HTML Template by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distributed by
                        <a href="https://themewagon">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
