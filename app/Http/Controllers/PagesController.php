<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function home() {
        return view('home');
    }

    public function about() {
        return view("about");
    }

    public function employees() {
        $employees = [
            ['FullNameEmployee' => "Efimov O. I.", "Position" => "Ceo", "Age" => "19", "PhoneNumberEmployee" => "0987654321"],
            ['FullNameEmployee' => "Efimov O. I.", "Position" => "Ceo", "Age" => "19", "PhoneNumberEmployee" => "0987654321"],
        ];

        return view("employees", [
            'employees' => $employees
        ]);
    }

    public function customers() {
        return view("customers");
    }

    public function orders() {
        return view("orders");
    }

    public function products() {
        return view("products");
    }

    public function providers() {
        return view("providers");
    }

    public function supplies() {
        return view("supplies");
    }
}
