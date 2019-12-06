@extends("layout")

@section("app-title", "Додати постачальника")

@section("page-title", "Додати постачальника")

@section("page-content")
    <form method="post" action="/providers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'prov-name',
                'labelText' => 'Назва',
                'placeHolderText' => 'Введіть назву постачальника'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'prov-representative',
                'labelText' => 'Представник',
                'placeHolderText' => 'Введіть ПІБ представника'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'prov-number',
                'labelText' => 'Номер телефону',
                'placeHolderText' => 'Введіть номер телефону представника'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
