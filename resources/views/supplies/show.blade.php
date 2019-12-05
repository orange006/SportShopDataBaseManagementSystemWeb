@extends("layout")

@section("app-title", "Перегляд поставки")

@section("page-title", "Перегляд поставки")

@section("page-content")
    <h2>Id поставки: {{ $supply->id }}</h2>
    <h4>Id постачальника: {{ $supply->id }}</h4>
    <h4>Дата: {{ $supply->NameProvider }}</h4>

    <a href="/supplies" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
