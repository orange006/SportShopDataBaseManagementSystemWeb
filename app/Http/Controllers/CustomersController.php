<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller {
    public function index() {
        return view('customers/index', [
            'customers' => Customer::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('customers/create');
    }

    public function store() {
        $data = \request()->validate([
            'cust-name' => 'required|max:100',
            'cust-number' => 'required|min:10|max:13',
        ], [
            'cust-name.required' => 'ПІБ клієнта має бути заповнено!',
            'cust-name.max' => 'Довжина ПІБ клієнта не може перевищувати 100 символів!',
            'cust-number.required' => 'Номер телефону має бути заповнено!',
            'cust-number.max' => 'Довжина номеру телефону клієнта не може перевищувати 13 символів!',
            'cust-number.min' => 'Довжина номеру телефону клієнта має бути не менше 10 символів!',
        ]);

        Customer::create([
            'FullNameCustomer' => $data['cust-name'],
            'PhoneNumberCustomer' => $data['cust-number'],
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
            \request()->validate([
                'FullNameCustomer' => 'required|max:100',
                'PhoneNumberCustomer' => 'required|min:10|max:13',
            ], [
                'FullNameCustomer.required' => 'ПІБ клієнта має бути заповнено!',
                'FullNameCustomer.max' => 'Довжина ПІБ клієнта не може перевищувати 100 символів!',
                'PhoneNumberCustomer.required' => 'Номер телефону має бути заповнено!',
                'PhoneNumberCustomer.max' => 'Довжина номеру телефону клієнта не може перевищувати 13 символів!',
                'PhoneNumberCustomer.min' => 'Довжина номеру телефону клієнта має бути не менше 10 символів!',
            ])
        );

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
