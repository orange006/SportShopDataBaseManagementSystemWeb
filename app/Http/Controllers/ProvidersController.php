<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Supply;
use Illuminate\Http\Request;

class ProvidersController extends Controller {
    public function index() {
        return view('providers/index', [
            'providers' => Provider::all()->sortBy("id"),
        ]);
    }

    public function create() {
        return view('providers/create');
    }

    public function store() {
        $data = \request()->validate([
            'prov-name' => 'required|max:75',
            'prov-representative' => 'required|max:100',
            'prov-number' => 'required|min:10|max:13',
        ], [
            'prov-name.required' => 'Назва постачальника має бути заповненою!',
            'prov-name.max' => 'Довжина назви постачальника не може перевищувати 75 символів!',
            'prov-representative.required' => 'ПІБ представника має бути заповнено!',
            'prov-representative.max' => 'Довжина ПІБ представника не може перевищувати 100 символів!',
            'prov-number.required' => 'Номер телефону має бути заповнено!',
            'prov-number.max' => 'Довжина номеру телефону представника не може перевищувати 13 символів!',
            'prov-number.min' => 'Довжина номеру телефону клієнта має бути не менше 10 символів!'
        ]);

        Provider::create([
            'NameProvider' => $data['prov-name'],
            'Representative' => $data['prov-representative'],
            'PhoneNumberProvider' => $data['prov-number'],
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
            \request()->validate([
                'NameProvider' => 'required|max:75',
                'Representative' => 'required|max:100',
                'PhoneNumberProvider' => 'required|min:10|max:13',
            ], [
                'NameProvider.required' => 'Назва постачальника має бути заповненою!',
                'NameProvider.max' => 'Довжина назви постачальника не може перевищувати 75 символів!',
                'Representative.required' => 'ПІБ представника має бути заповнено!',
                'Representative.max' => 'Довжина ПІБ представника не може перевищувати 100 символів!',
                'PhoneNumberProvider.required' => 'Номер телефону має бути заповнено!',
                'PhoneNumberProvider.max' => 'Довжина номеру телефону представника не може перевищувати 13 символів!',
                'PhoneNumberProvider.min' => 'Довжина номеру телефону клієнта має бути не менше 10 символів!'
            ])
        );

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
