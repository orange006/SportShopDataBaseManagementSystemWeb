@extends("layout")

@section("app-title", "Додати клієнта")

@section("page-title", "Додати клієнта")

@section("page-content")
    <form method="post" action="/customers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'cust-name',
                'labelText' => 'ПІБ',
                'placeHolderText' => 'Введіть ПІБ'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'cust-number',
                'labelText' => 'Номер телефону',
                'placeHolderText' => 'Введіть номер телефону'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>

        <div class="clearfix"></div>

    </form>
@endsection
