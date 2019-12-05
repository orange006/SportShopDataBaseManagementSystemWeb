@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/orders/{{ $order->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="order-idprod">Id продукта</label>
            <input type="text" class="form-control" name="order-idprod" id="order-idprod"
                   placeholder="Введіть id продукта" value="{{ $order->IdProd }}">
        </div>

        <div class="form-group">
            <label for="order-idempl">Id працівника</label>
            <input type="text" class="form-control" name="order-idempl" id="order-idempl"
                   placeholder="Введіть id працівника" value="{{ $order->IdEmpl }}">
        </div>

        <div class="form-group">
            <label for="order-idcust">Id клієнта</label>
            <input type="text" class="form-control" name="order-idcust" id="order-idcust"
                   placeholder="Введіть id клієнта" value="{{ $order->IdCust }}">
        </div>

        <div class="form-group">
            <label for="order-date">Дата замовлення</label>
            <input type="text" class="form-control" name="order-date" id="order-date"
                   placeholder="Введіть дату замовлення" value="{{ $order->DateOrder }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
