@extends("layout")

@section("app-title", "Перегляд замовлення")

@section("page-title", "Перегляд замовлення")

@section("page-content")
    <h2>Id замовлення: {{ $order->id }}</h2>
    <h4>Id продукта: {{ $order->IdProd }}</h4>
    <h4>Id працівника: {{ $order->IdEmpl }}</h4>
    <h4>Id клієнта: {{ $order->IdCust }}</h4>
    <h4>Дата замовлення: {{ $order->DateOrder }}</h4>

    <a href="/orders" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
