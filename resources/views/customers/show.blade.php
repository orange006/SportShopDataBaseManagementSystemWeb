@extends("layout")

@section("app-title", "Перегляд клієнта")

@section("page-title", "Перегляд клієнта")

@section("page-content")
    <h2>Id клієнта: {{ $customer->id }}</h2>
    <h4>Повне ім'я: {{ $customer->FullNameCustomer }}</h4>
    <h4>Номер телефону: {{ $customer->PhoneNumberCustomer }}</h4>

    <a href="/customers" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
