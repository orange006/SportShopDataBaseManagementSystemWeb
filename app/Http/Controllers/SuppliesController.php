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
        Supply::create([
            'IdProv' => \request('suppl-idprov'),
            'DateSupply' => \request('suppl-date'),
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
            \request(['IdProv', 'DateSupply'])
        );

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
}
