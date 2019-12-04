<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {
    public function index() {
        $products = Product::all()->sortBy("id");

        return view('products/index', [
            'products' => $products,
        ]);
    }

    public function create() {
        return view('products/create');
    }

    public function store() {
        $product = new Product();

        $product->IdSuppl = \request('prod-idsuppl');

        $product->NameProduct = \request('prod-name');

        $product->TypeProduct = \request('prod-type');

        $product->CostPurchase = \request('prod-purchase');

        $product->CostSale = \request('prod-sale');

        $product->Availability = \request('prod-availability');

        $product->Quantity = \request('prod-quantity');

        $product->save();

        return redirect('/products');
    }
}
