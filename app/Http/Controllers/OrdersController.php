<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller {
    public function index() {
        $orders = Order::all()->sortBy("id");

        return view('orders/index', [
            'orders' => $orders,
        ]);
    }

    public function create() {
        return view('orders/create');
    }

    public function store() {
        $data = \request()->validate([
            'order-idprod' => 'required',
            'order-idempl' => 'required',
            'order-idcust' => 'required',
            'order-date' => 'required',
        ], [
            'order-idprod.required' => 'Id продукту має бути заповнено!',
            'order-idempl.required' => 'Id працівника має бути заповнено!',
            'order-idcust.required' => 'Id клієнта має бути заповнено!',
            'order-date.required' => 'Дата замовлення має бути заповненою!',
        ]);

        Order::create([
            'IdProd' => $data['order-idprod'],
            'IdEmpl' => $data['order-idempl'],
            'IdCust' => $data['order-idcust'],
            'DateOrder' => $data['order-date'],
        ]);

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
