<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller {
    public function index() {
        $employees = Employee::all()->sortBy("id");

        return view('employees/index', [
            'employees' => $employees,
        ]);
    }
}
