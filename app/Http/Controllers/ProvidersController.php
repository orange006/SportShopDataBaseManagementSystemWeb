<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Supply;
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
        Provider::create([
            'NameProvider' => \request('prov-name'),
            'Representative' => \request('prov-representative'),
            'PhoneNumberProvider' => \request('prov-number'),
        ]);

        return redirect('/providers');
    }

    public function edit(Provider $provider) {
        return view('providers/edit', [
            'provider' => $provider,
        ]);
    }

    public function update(Provider $provider) {
        $provider->update(
            \request(['NameProvider', 'Representative', 'PhoneNumberProvider'])
        );

        $provider->save();

        return redirect('/providers');
    }

    public function destroy(Provider $provider) {
        $provider->delete();
    }

    public function show(Provider $provider) {
        return view('providers/show', [
            'provider' => $provider
        ]);
    }
}
