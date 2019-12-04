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
}
