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

    public function edit($id) {
        $customer = Customer::find($id);

        return view('customers/edit', [
            'customer' => $customer,
        ]);
    }

    public function update($id) {
        $customer = Customer::find($id);

        $customer->FullNameCustomer = \request('cust-name');

        $customer->PhoneNumberCustomer = \request('cust-number');

        $customer->save();

        return redirect('/customers');
    }
}
