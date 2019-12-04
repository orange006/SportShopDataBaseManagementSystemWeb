@extends("layout")

@section("app-title", "Додати клієнта")

@section("page-title", "Додати клієнта")

@section("page-content")
    <form method="post" action="/customers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="cust-name">ПІБ</label>
            <input type="text" class="form-control" name="cust-name" id="cust-name" placeholder="Введіть ПІБ">
        </div>

        <div class="form-group">
            <label for="cust-number">Номер телефону</label>
            <input type="text" class="form-control" name="cust-number" id="cust-number" placeholder="Введіть номер телефону">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
