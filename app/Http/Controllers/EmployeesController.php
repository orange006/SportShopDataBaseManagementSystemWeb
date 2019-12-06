<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller {
    public function index() {
        return view('employees/index', [
            'employees' => Employee::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('employees/create');
    }

    public function store() {
        $data = \request()->validate([
            'empl-name' => 'required|max:100',
            'empl-position' => 'required|max:50',
            'empl-age' => 'required|max:2',
            'empl-number' => 'required|min:10|max:13'
        ], [
            'empl-name.required' => 'ПІБ працівника має бути заповнено!',
            'empl-name.max' => 'Довжина ПІБ працівника не може перевищувати 100 символів!',
            'empl-position.required' => 'Посада працівника має бути заповнено!',
            'empl-position.max' => 'Довжина посади працівника не може перевищувати 50 символів!',
            'empl-age.required' => 'Вік працівника має бути заповнено!',
            'empl-age.max' => 'Вік працівника не може перевищувати 2 символів!',
            'empl-number.required' => 'Номер телефону має бути заповнено!',
            'empl-number.max' => 'Довжина номеру телефону працівника не може перевищувати 13 символів!',
            'empl-number.min' => 'Довжина номеру телефону працівника має бути не менше 10 символів!',
        ]);

        Employee::create([
            'FullNameEmployee' => $data['empl-name'],
            'Position' => $data['empl-position'],
            'Age' => $data['empl-age'],
            'PhoneNumberEmployee' => $data['empl-number'],
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
            \request()->validate([
                'FullNameEmployee' => 'required|max:100',
                'Position' => 'required|max:50',
                'Age' => 'required|max:2',
                'PhoneNumberEmployee' => 'required|min:10|max:13'
            ], [
                'FullNameEmployee.required' => 'ПІБ працівника має бути заповнено!',
                'FullNameEmployee.max' => 'Довжина ПІБ працівника не може перевищувати 100 символів!',
                'Position.required' => 'Посада працівника має бути заповнено!',
                'Position.max' => 'Довжина посади працівника не може перевищувати 50 символів!',
                'Age.required' => 'Вік працівника має бути заповнено!',
                'Age.max' => 'Вік працівника не може перевищувати 2 символів!',
                'PhoneNumberEmployee.required' => 'Номер телефону має бути заповнено!',
                'PhoneNumberEmployee.max' => 'Довжина номеру телефону працівника не може перевищувати 13 символів!',
                'PhoneNumberEmployee.min' => 'Довжина номеру телефону працівника має бути не менше 10 символів!',
            ])
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
