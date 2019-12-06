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

            @include('includes/validationErr', ['errFieldName' => 'IdProd'])
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

            @include('includes/validationErr', ['errFieldName' => 'IdEmpl'])
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

            @include('includes/validationErr', ['errFieldName' => 'IdCust'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'DateOrder',
                'labelText' => 'Дата замовлення',
                'placeHolderText' => 'Введіть дату замовлення'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
