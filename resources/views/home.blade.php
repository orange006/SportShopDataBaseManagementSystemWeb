@extends("layout")

@section("app-title", "Менеджер баз даних")

@section("page-title", "Головна")

@section("page-content")
    <p class="lead"></p>
    <p class="lead">
        <a href="/employees" class="btn btn-lg btn-secondary">Працівники</a>
        <a href="/customers" class="btn btn-lg btn-secondary">Клієнти</a>
        <a href="/orders" class="btn btn-lg btn-secondary">Замовлення</a>
        <a href="/products" class="btn btn-lg btn-secondary">Продукція</a>
        <a href="/supplies" class="btn btn-lg btn-secondary">Поставки</a>
        <a href="/providers" class="btn btn-lg btn-secondary">Постачальники</a>
    </p>
@endsection
