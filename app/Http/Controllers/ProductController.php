<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('adminPanel.product.add-product-page');
    }

    public function manageProduct()
    {
        return view('adminPanel.product.manage-product-page', [
            'products' => Product::all()
        ]);
    }

    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect(route('manage.product'))->with('message', 'saved successfully');
    }

    public function status($id)
    {
        Product::status($id);
        return back();
    }

    public function editProduct($id)
    {
        return view('adminPanel.product.edit-product', [
            'product' => Product::find($id)
        ]);
    }

    public function updateProduct(Request $request)
    {
        Product::updateProduct($request);
        return redirect(route('manage.product'))->with('message', 'update successfully');
    }

    public function deleteProduct(Request $request)
    {
        Product::deleteProduct($request);
        return back()->with('message', 'delete successfully');
    }

}
