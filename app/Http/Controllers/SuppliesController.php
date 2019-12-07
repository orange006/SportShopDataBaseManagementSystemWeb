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
        $data = $this->validateData($request);

        Supply::create($data);

        return redirect('/supplies');
    }

    public function edit(Supply $supply) {
        return view('supplies/edit', [
            'supply' => $supply,
            'providers' => Provider::all()->sortBy('id')
        ]);
    }

    public function update(Supply $supply) {
        $data = $this->validateData(\request());

        $supply->DateSupply = $data['DateSupply'];

        $provider = Provider::find($data['IdProv']);

        $supply->provider()->associate($provider);

        $supply->save();

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

    private function validateData($data) {
        return $this->validate($data, [
            'IdProv' => ['required', Rule::exists('providers', 'id')],
            'DateSupply' => 'required',
        ], [
            'IdProv.required' => 'Назва постачальника має бути заповнений!',
            'IdProv.exists' => 'Оберіть постачальника!',
            'DateSupply.required' => 'Дата поставки має бути заповненою!',
        ]);
    }
}
