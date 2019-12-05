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
        Product::create([
            'IdSuppl' => \request('prod-idsuppl'),
            'NameProduct' => \request('prod-name'),
            'TypeProduct' => \request('prod-type'),
            'CostPurchase' => \request('prod-purchase'),
            'CostSale' => \request('prod-sale'),
            'Availability' => \request('prod-availability'),
            'Quantity' => \request('prod-quantity'),
        ]);

        return redirect('/products');
    }

    public function edit(Product $product) {
        return view('products/edit', [
            'product' => $product,
        ]);
    }

    public function update(Product $product) {
        $product->update(
            \request(['IdSuppl', 'NameProduct', 'TypeProduct', 'CostPurchase', 'CostSale', 'Availability', 'Quantity'])
        );

        $product->save();

        return redirect('/products');
    }

    public function destroy(Product $product) {
        $product->delete();
    }

    public function show(Product $product) {
        return view('products/show', [
            'product' => $product
        ]);
    }
}
