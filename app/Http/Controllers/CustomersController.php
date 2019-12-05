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
        Customer::create([
            'FullNameCustomer' => \request('cust-name'),
            'PhoneNumberCustomer' => \request('cust-number'),
        ]);

        return redirect('/customers');
    }

    public function edit(Customer $customer) {
        return view('customers/edit', [
            'customer' => $customer,
        ]);
    }

    public function update(Customer $customer) {
        $customer->update(
            \request(['FullNameCustomer', 'PhoneNumberCustomer'])
        );

        $customer->save();

        return redirect('/customers');
    }

    public function destroy(Customer $customer) {
        $customer->delete();
    }

    public function show(Customer $customer) {
        return view('customers/show', [
            'customer' => $customer
        ]);
    }
}
