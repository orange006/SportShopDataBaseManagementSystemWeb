@extends("layout")

@section("app-title", "Додати замовлення")

@section("page-title", "Додати замовлення")

@section("page-content")
    <form method="post" action="/orders" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="order-idprod">Id продукта</label>
            <input type="text" class="form-control" name="order-idprod" id="order-idprod" placeholder="Введіть id продукта">
        </div>

        <div class="form-group">
            <label for="order-idempl">Id працівника</label>
            <input type="text" class="form-control" name="order-idempl" id="order-idempl" placeholder="Введіть id працівника">
        </div>

        <div class="form-group">
            <label for="order-idcust">Id клієнта</label>
            <input type="text" class="form-control" name="order-idcust" id="order-idcust" placeholder="Введіть id клієнта">
        </div>

        <div class="form-group">
            <label for="order-date">Дата замовлення</label>
            <input type="text" class="form-control" name="order-date" id="order-date" placeholder="Введіть дату замовлення">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
