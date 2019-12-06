<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Supply;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SuppliesController extends Controller {
    public function index() {
        return view('supplies/index', [
            'supplies' => Supply::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('supplies/create', [
            'providers' => Provider::all()->sortBy('id')
        ]);
    }

    public function store(Request $request) {
        $data = request()->validate([
            'IdProv' => ['required', Rule::exists('providers', 'id')],
            'DateSupply' => 'required',
        ], [
            'IdProv.required' => 'Назва постачальника має бути заповнений!',
            'IdProv.exists' => 'Оберіть постачальника!',
            'DateSupply.required' => 'Дата поставки має бути заповненою!',
        ]);

        Supply::create($data);

        return redirect('/supplies');
    }

    public function edit(Supply $supply) {
        return view('supplies/edit', [
            'supply' => $supply,
        ]);
    }

    public function update(Supply $supply) {
        $supply->update(
            \request()->validate([
                'IdProv' => 'required',
                'DateSupply' => 'required',
            ], [
                'IdProv.required' => 'Id постачальника має бути заповнений!',
                'DateSupply.required' => 'Дата поставки має бути заповненою!',
            ])
        );

        return redirect('/supplies');
    }

    public function destroy(Supply $supply) {
        $supply->delete();
    }

    public function show(Supply $supply) {
        return view('supplies/show', [
            'supply' => $supply
        ]);
    }
}
