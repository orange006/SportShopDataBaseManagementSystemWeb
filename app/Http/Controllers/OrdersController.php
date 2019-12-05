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
        Order::create([
            'IdProd' => \request('order-idprod'),
            'IdEmpl' => \request('order-idempl'),
            'IdCust' => \request('order-idcust'),
            'DateOrder' => \request('order-date'),
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
            \request(['IdProd', 'IdEmpl', 'IdCust', 'DateOrder'])
        );

        $order->save();

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
