@extends("layout")

@section("app-title", "Додати замовлення")

@section("page-title", "Додати замовлення")

@section("page-content")
    <form method="post" action="/orders" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="order-idprod">Id продукта</label>
            <input type="text" class="form-control {{ $errors->has('order-idprod') ? 'is-invalid':'' }}" value="{{ old('order-idprod') }}"
                   name="order-idprod" id="order-idprod" placeholder="Введіть id продукта">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('order-idprod') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="order-idempl">Id працівника</label>
            <input type="text" class="form-control {{ $errors->has('order-idempl') ? 'is-invalid':'' }}" value="{{ old('order-idempl') }}"
                   name="order-idempl" id="order-idempl" placeholder="Введіть id працівника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('order-idempl') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="order-idcust">Id клієнта</label>
            <input type="text" class="form-control {{ $errors->has('order-idcust') ? 'is-invalid':'' }}" value="{{ old('order-idcust') }}"
                   name="order-idcust" id="order-idcust" placeholder="Введіть id клієнта">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('order-idcust') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="order-date">Дата замовлення</label>
            <input type="text" class="form-control {{ $errors->has('order-date') ? 'is-invalid':'' }}" value="{{ old('order-date') }}"
                   name="order-date" id="order-date" placeholder="Введіть дату замовлення">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('order-date') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
