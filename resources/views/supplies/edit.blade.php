@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/supplies/{{ $supply->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="suppl-idprov">Id постачальника</label>
            <input type="text" class="form-control" name="suppl-idprov" id="suppl-idprov"
                   placeholder="Введіть id постачальника" value="{{ $supply->IdProv }}">
        </div>

        <div class="form-group">
            <label for="suppl-date">Дата</label>
            <input type="text" class="form-control" name="suppl-date" id="suppl-date"
                   placeholder="Введіть дату поставки" value="{{ $supply->DateSupply }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
