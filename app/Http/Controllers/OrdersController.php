<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Employee;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrdersController extends Controller {
    public function index() {
        return view('orders/index', [
            'orders' => Order::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('orders/create', [
            'products' => Product::all()->sortBy('id'),
            'employees' => Employee::all()->sortBy('id'),
            'customers' => Customer::all()->sortBy('id'),
        ]);
    }

    public function store(Request $request) {
        $data = request()->validate([
            'IdProd' => ['required', Rule::exists('products', 'id')],
            'IdEmpl' => ['required', Rule::exists('employees', 'id')],
            'IdCust' => ['required', Rule::exists('customers', 'id')],
            'DateOrder' => 'required',
        ], [
            'IdProd.required' => 'Id продукту має бути заповнено!',
            'IdProd.exists' => 'Оберіть продукт!',
            'IdEmpl.required' => 'Id працівника має бути заповнено!',
            'IdEmpl.exists' => 'Оберіть продукт!',
            'IdCust.required' => 'Id клієнта має бути заповнено!',
            'IdCust.exists' => 'Оберіть продукт!',
            'DateOrder.required' => 'Дата замовлення має бути заповненою!',
        ]);

        Order::create($data);

        return redirect('/orders');
    }

    public function edit(Order $order) {
        return view('orders/edit', [
            'order' => $order,
        ]);
    }

    public function update(Order $order) {
        $order->update(
            \request()->validate([
                'IdProd' => 'required',
                'IdEmpl' => 'required',
                'IdCust' => 'required',
                'DateOrder' => 'required',
            ], [
                'IdProd.required' => 'Id продукту має бути заповнено!',
                'IdEmpl.required' => 'Id працівника має бути заповнено!',
                'IdCust.required' => 'Id клієнта має бути заповнено!',
                'DateOrder.required' => 'Дата замовлення має бути заповненою!',
            ])
        );

        return redirect('/orders');
    }

    public function destroy(Order $order) {
        $order->delete();
    }

    public function show(Order $order) {
        return view('orders/show', [
            'order' => $order
        ]);
    }
}
