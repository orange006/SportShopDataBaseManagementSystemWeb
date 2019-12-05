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
        Employee::create([
            'FullNameEmployee' => \request('empl-name'),
            'Position' => \request('empl-position'),
            'Age' => \request('empl-age'),
            'PhoneNumberEmployee' => \request('empl-number'),
        ]);

        return redirect('/employees');
    }

    public function edit(Employee $employee) {
        return view('employees/edit', [
            'employee' => $employee,
        ]);
    }

    public function update(Employee $employee) {
        $employee->update(
            \request(['FullNameEmployee', 'Position', 'Age', 'PhoneNumberEmployee'])
        );

        $employee->save();

        return redirect('/employees');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
    }

    public function show(Employee $employee) {
        return view('employees/show', [
            'employee' => $employee
        ]);
    }
}
