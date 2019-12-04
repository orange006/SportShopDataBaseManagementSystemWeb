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
        $supply = new Supply();

        $supply->IdProv = \request('suppl-idprov');

        $supply->DateSupply = \request('suppl-date');

        $supply->save();

        return redirect('/supplies');
    }
}
