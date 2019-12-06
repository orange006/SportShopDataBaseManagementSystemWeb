@extends("layout")

@section("app-title", "Додати працівника")

@section("page-title", "Додати працівника")

@section("page-content")
    <form method="post" action="/employees" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'empl-name',
                'labelText' => 'ПІБ',
                'placeHolderText' => 'Введіть ПІБ'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'empl-position',
                'labelText' => 'Посада',
                'placeHolderText' => 'Введіть посаду'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'empl-age',
                'labelText' => 'Вік',
                'placeHolderText' => 'Введіть вік'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'empl-number',
                'labelText' => 'Номер телефону',
                'placeHolderText' => 'Введіть номер телефону'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
