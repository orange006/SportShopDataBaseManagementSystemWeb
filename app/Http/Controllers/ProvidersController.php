<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller {
    public function index() {
        $providers = Provider::all()->sortBy("id");

        return view('providers/index', [
            'providers' => $providers,
        ]);
    }
}
