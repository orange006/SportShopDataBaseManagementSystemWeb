<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller {
    public function index() {
        $customers = Customer::all()->sortBy("id");

        return view('customers/index', [
            'customers' => $customers,
        ]);
    }
}
