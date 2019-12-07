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
        $data = $this->validateData($request);

        Order::create($data);

        return redirect('/orders');
    }

    public function edit(Order $order) {
        return view('orders/edit', [
            'order' => $order,
            'products' => Product::all()->sortBy('id'),
            'employees' => Employee::all()->sortBy('id'),
            'customers' => Customer::all()->sortBy('id'),
        ]);
    }

    public function update(Order $order) {
        $data = $this->validateData(\request());


        $order->DateOrder = $data['DateOrder'];

        $product = Product::find($data['IdProd']);
        $order->product()->associate($product);

        $employee = Employee::find($data['IdEmpl']);
        $order->employee()->associate($employee);

        $customer = Customer::find($data['IdCust']);
        $order->customer()->associate($customer);

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

    private function validateData($data) {
        return $this->validate($data, [
            'IdProd' => ['required', Rule::exists('products', 'id')],
            'IdEmpl' => ['required', Rule::exists('employees', 'id')],
            'IdCust' => ['required', Rule::exists('customers', 'id')],
            'DateOrder' => 'required',
        ], [
            'IdProd.required' => 'Id продукту має бути заповнено!',
            'IdProd.exists' => 'Оберіть іd продукту!',
            'IdEmpl.required' => 'Id працівника має бути заповнено!',
            'IdEmpl.exists' => 'Оберіть іd працівника!',
            'IdCust.required' => 'Id клієнта має бути заповнено!',
            'IdCust.exists' => 'Оберіть іd клієнта!',
            'DateOrder.required' => 'Дата замовлення має бути заповненою!',
        ]);
    }
}
