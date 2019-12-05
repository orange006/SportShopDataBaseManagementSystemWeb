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
        $data = \request()->validate([
            'prod-idsuppl' => 'required',
            'prod-name' => 'required|max:35',
            'prod-type' => 'required|max:25',
            'prod-purchase' => 'required',
            'prod-sale' => 'required',
            'prod-availability' => 'required',
            'prod-quantity' => 'required',
        ], [
            'prod-idsuppl.required' => 'Id поставки має бути заповнений!',
            'prod-name.required' => 'Назва продукту має бути заповненою!',
            'prod-name.max' => 'Назва продукту не може перевищувати 100 символів!',
            'prod-type.required' => 'Тип продукту має бути заповнено!',
            'prod-type.max' => 'Тип продукту не може перевищувати 100 символів!',
            'prod-purchase.required' => 'Вартість придбання має бути заповненою!',
            'prod-sale.required' => 'Вартість продажу має бути заповненою!',
            'prod-availability.required' => 'Наявність має бути вказано!',
            'prod-quantity.required' => 'Кількість має бути вказано!',
        ]);

        Product::create([
            'IdSuppl' => $data['prod-idsuppl'],
            'NameProduct' => $data['prod-name'],
            'TypeProduct' => $data['prod-type'],
            'CostPurchase' => $data['prod-purchase'],
            'CostSale' => $data['prod-sale'],
            'Availability' => $data['prod-availability'],
            'Quantity' => $data['prod-quantity'],
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
            \request()->validate([
                'IdSuppl' => 'required',
                'NameProduct' => 'required|max:35',
                'TypeProduct' => 'required|max:25',
                'CostPurchase' => 'required',
                'CostSale' => 'required',
                'Availability' => 'required',
                'Quantity' => 'required',
            ], [
                'IdSuppl.required' => 'Id поставки має бути заповнений!',
                'NameProduct.required' => 'Назва продукту має бути заповненою!',
                'NameProduct.max' => 'Назва продукту не може перевищувати 100 символів!',
                'TypeProduct.required' => 'Тип продукту має бути заповнено!',
                'TypeProduct.max' => 'Тип продукту не може перевищувати 100 символів!',
                'CostPurchase.required' => 'Вартість придбання має бути заповненою!',
                'CostSale.required' => 'Вартість продажу має бути заповненою!',
                'Availability.required' => 'Наявність має бути вказано!',
                'Quantity.required' => 'Кількість має бути вказано!',
            ])
        );

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
