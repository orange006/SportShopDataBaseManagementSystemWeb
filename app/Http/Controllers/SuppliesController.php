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
}
