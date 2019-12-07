@extends("layout")

@section("app-title", "Перегляд поставки")

@section("page-title", "Перегляд поставки")

@section("page-content")
    <h2>Id поставки: {{ $supply->id }}</h2>
    <h4>Назва постачальника: {{ $supply->provider->NameProvider }}</h4>
    <h4>Дата: {{ $supply->DateSupply }}</h4>

    <a href="/supplies" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
