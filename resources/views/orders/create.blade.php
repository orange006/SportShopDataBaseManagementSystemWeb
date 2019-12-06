@extends("layout")

@section("app-title", "Додати замовлення")

@section("page-title", "Додати замовлення")

@section("page-content")
    <form method="post" action="/orders" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="IdProd">Назва продукту</label>

            <select name="IdProd" id="IdProd" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть назву продукту</option>

                @foreach($products as $product)
                    <option value="{{ $product->id }}">
                        {{ $product->NameProduct }}
                    </option>
                @endforeach
            </select>

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdProd') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="IdEmpl">ПІБ працівника</label>

            <select name="IdEmpl" id="IdEmpl" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть ПІБ працівника</option>

                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">
                        {{ $employee->FullNameEmployee }}
                    </option>
                @endforeach
            </select>

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdEmpl') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="IdCust">ПІБ клієнта</label>

            <select name="IdCust" id="IdCust" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть ПІБ працівника</option>

                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">
                        {{ $customer->FullNameCustomer }}
                    </option>
                @endforeach
            </select>

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdCust') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="DateOrder">Дата замовлення</label>
            <input type="text" class="form-control {{ $errors->has('DateOrder') ? 'is-invalid':'' }}" value="{{ old('DateOrder') }}"
                   name="DateOrder" id="DateOrder" placeholder="Введіть дату замовлення">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('DateOrder') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
