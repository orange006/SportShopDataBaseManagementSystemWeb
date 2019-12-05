@extends("layout")

@section("app-title", "Перегляд продукта")

@section("page-title", "Перегляд продукта")

@section("page-content")
    <h2>Id продукту: {{ $product->id }}</h2>
    <h2>Id поставки: {{ $product->IdSuppl }}</h2>
    <h4>Назва: {{ $product->NameProduct }}</h4>
    <h4>Тип: {{ $product->TypeProduct }}</h4>
    <h4>Ціна придбання: {{ $product->CostPurchase }}</h4>
    <h4>Ціна продажу: {{ $product->CostSale }}</h4>
    <h4>Наявність: {{ $product->Availability }}</h4>
    <h4>Кількість: {{ $product->Quantity }}</h4>

    <a href="/products" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
