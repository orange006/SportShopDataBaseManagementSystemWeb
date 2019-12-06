<?php

namespace App\Http\Controllers;

use App\Product;
use App\Supply;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductsController extends Controller {
    public function index() {
        return view('products/index', [
            'products' => Product::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('products/create', [
            'supplies' => Supply::all()->sortBy('id')
        ]);
    }

    public function store(Request $request) {
        $data = request()->validate([
            'IdSuppl' => ['required', Rule::exists('supplies', 'id')],
            'NameProduct' => 'required|max:35',
            'TypeProduct' => 'required|max:25',
            'CostPurchase' => 'required',
            'CostSale' => 'required',
            'Availability' => 'required',
            'Quantity' => 'required',
        ], [
            'IdSuppl.required' => 'Id поставки має бути заповнений!',
            'IdSuppl.exists' => 'Оберіть поставку!',
            'NameProduct.required' => 'Назва продукту має бути заповненою!',
            'NameProduct.max' => 'Назва продукту не може перевищувати 100 символів!',
            'TypeProduct.required' => 'Тип продукту має бути заповнено!',
            'TypeProduct.max' => 'Тип продукту не може перевищувати 100 символів!',
            'CostPurchase.required' => 'Вартість придбання має бути заповненою!',
            'CostSale.required' => 'Вартість продажу має бути заповненою!',
            'Availability.required' => 'Наявність має бути вказано!',
            'Quantity.required' => 'Кількість має бути вказано!',
        ]);

        Product::create($data);

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
            'product' => $product,
        ]);
    }
}
