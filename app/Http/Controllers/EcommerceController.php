<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home-page', [
            'products' => Product::where('status', 1)
                ->orderby('id', 'desc')->get()
        ]);
    }

    public function cart()
    {
        return view('frontEnd.cart.cart-page');
    }

    public function checkout()
    {
        return view('frontEnd.checkout.checkout-page');
    }

    public function shop()
    {
        return view('frontEnd.shop.shop-page');
    }

    public function detailsProduct($id)
    {
        return view('frontEnd.details-product.details-product-page', [
            'product' => Product::find($id)
        ]);
    }
}
