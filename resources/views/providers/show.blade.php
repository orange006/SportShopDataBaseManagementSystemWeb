@extends("layout")

@section("app-title", "Перегляд постачальника")

@section("page-title", "Перегляд постачальника")

@section("page-content")
    <h2>Id постачальника: {{ $provider->id }}</h2>
    <h4>Назва: {{ $provider->NameProvider }}</h4>
    <h4>Представник: {{ $provider->Representative }}</h4>
    <h4>Номер телефону представника: {{ $provider->PhoneNumberProvider }}</h4>

    <a href="/providers" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
