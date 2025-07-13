<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    View::composer('*', function ($view) {
        $cartItems = [];
        $cartTotal = 0;

        if (Auth::check()) {
            $pendingOrder = Order::where('user_id', Auth::id())
                ->where('status', 'pending')
                ->with('orderProduct.product')
                ->first();

            if ($pendingOrder && $pendingOrder->orderProduct) {
                $cartItems = $pendingOrder->orderProduct;
                $cartTotal = $cartItems->sum('subtotal');
            }
        }

        $view->with('cartItems', $cartItems)->with('cartTotal', $cartTotal);
    });
}
}
