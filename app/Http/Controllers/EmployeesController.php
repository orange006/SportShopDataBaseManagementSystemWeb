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

    public function create() {
        return view('employees/create');
    }

    public function store() {
        $employee = new Employee();

        $employee->FullNameEmployee = \request('empl-name');

        $employee->Position = \request('empl-position');

        $employee->Age = \request('empl-age');

        $employee->PhoneNumberEmployee = \request('empl-number');

        $employee->save();

        return redirect('/employees');
    }

    public function edit($id) {
        $employee = Employee::find($id);

        return view('employees/edit', [
            'employee' => $employee,
        ]);
    }

    public function update($id) {
        $employee = Employee::find($id);

        $employee->FullNameEmployee = \request('empl-name');

        $employee->Position = \request('empl-position');

        $employee->Age = \request('empl-age');

        $employee->PhoneNumberEmployee = \request('empl-number');

        $employee->save();

        return redirect('/employees');
    }
}
