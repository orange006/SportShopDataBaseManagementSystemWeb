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
        $order = new Order();

        $order->IdProd = \request('order-idprod');

        $order->IdEmpl = \request('order-idempl');

        $order->IdCust = \request('order-idcust');

        $order->DateOrder = \request('order-date');

        $order->save();

        return redirect('/orders');
    }
}
