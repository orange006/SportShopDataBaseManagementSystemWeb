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

    public function create() {
        return view('providers/create');
    }

    public function store() {
        $provider = new Provider();

        $provider->NameProvider = \request('prov-name');

        $provider->Representative = \request('prov-representative');

        $provider->PhoneNumberProvider = \request('prov-number');

        $provider->save();

        return redirect('/providers');
    }

    public function edit($id) {
        $provider = Provider::find($id);

        return view('providers/edit', [
            'provider' => $provider,
        ]);
    }

    public function update($id) {
        $provider = Provider::find($id);

        $provider->NameProvider = \request('prov-name');

        $provider->Representative = \request('prov-representative');

        $provider->PhoneNumberProvider = \request('prov-number');

        $provider->save();

        return redirect('/providers');
    }
}
