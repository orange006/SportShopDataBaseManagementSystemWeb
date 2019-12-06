@extends("layout")

@section("app-title", "Додати продукт")

@section("page-title", "Додати продукт")

@section("page-content")
    <form method="post" action="/products" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="IdSuppl">Номер поставки</label>

            <select name="IdSuppl" id="supply" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть номер поставки</option>

                @foreach($supplies as $supply)
                    <option value="{{ $supply->id }}">
                        {{ $supply->id }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdSuppl'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'NameProduct',
                'labelText' => 'Назва',
                'placeHolderText' => 'Введіть назву продукту'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'TypeProduct',
                'labelText' => 'Тип',
                'placeHolderText' => 'Введіть тип продукту'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'CostPurchase',
                'labelText' => 'Вартість придбання',
                'placeHolderText' => 'Введіть вартість придбання'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'CostSale',
                'labelText' => 'Вартість продажу',
                'placeHolderText' => 'Введіть вартість продажу'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'Availability',
                'labelText' => 'Наявність',
                'placeHolderText' => 'Вкажіть наявність'
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'Quantity',
                'labelText' => 'Кількість',
                'placeHolderText' => 'Введіть кількість'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
