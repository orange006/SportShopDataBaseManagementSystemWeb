<?php

namespace App\Http\Controllers;

use App\Supply;
use Illuminate\Http\Request;

class SuppliesController extends Controller {
    public function index() {
        $supplies = Supply::all()->sortBy("id");

        return view('supplies/index', [
            'supplies' => $supplies,
        ]);
    }

    public function create() {
        return view('supplies/create');
    }

    public function store() {
        $data = \request()->validate([
            'suppl-idprov' => 'required',
            'suppl-date' => 'required',
        ], [
            'suppl-idprov.required' => 'Id постачальника має бути заповнений!',
            'suppl-date.required' => 'Дата поставки має бути заповненою!',
        ]);

        Supply::create([
            'IdProv' => $data['suppl-idprov'],
            'DateSupply' => $data['suppl-date'],
        ]);

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
