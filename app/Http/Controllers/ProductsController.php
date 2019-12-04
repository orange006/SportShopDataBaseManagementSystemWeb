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
}
