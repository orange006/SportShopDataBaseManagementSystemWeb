@extends("layout")

@section("app-title", "Додати поставку")

@section("page-title", "Додати поставку")

@section("page-content")
    <form method="post" action="/supplies" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="suppl-idprov">Id постачальника</label>
            <input type="text" class="form-control" name="suppl-idprov" id="suppl-idprov" placeholder="Введіть id постачальника">
        </div>

        <div class="form-group">
            <label for="suppl-date">Дата</label>
            <input type="text" class="form-control" name="suppl-date" id="suppl-date" placeholder="Введіть дату поставки">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
