@extends("layout")

@section("app-title", "Перегляд працівника")

@section("page-title", "Перегляд працівника")

@section("page-content")
    <h2>Id працівника: {{ $employee->id }}</h2>
    <h4>Повне ім'я: {{ $employee->FullNameEmployee }}</h4>
    <h4>Посада: {{ $employee->Position }}</h4>
    <h4>Вік: {{ $employee->Age }}</h4>
    <h4>Номер телефону: {{ $employee->PhoneNumberEmployee }}</h4>

    <a href="/employees" style="margin-top: 30px;" class="btn btn-outline-info">
        Повернутися до списку
    </a>
@endsection
