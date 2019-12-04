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

    public function create() {
        return view('customers/create');
    }

    public function store() {
        $customer = new Customer();

        $customer->FullNameCustomer = \request('cust-name');

        $customer->PhoneNumberCustomer = \request('cust-number');

        $customer->save();

        return redirect('/customers');
    }
}
