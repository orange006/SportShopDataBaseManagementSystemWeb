@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/products/{{ $product->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="prod-idsuppl">Id поставки</label>
            <input type="text" class="form-control" name="prod-idsuppl" id="prod-idsuppl"
                   placeholder="Введіть id поставки" value="{{ $product->IdSuppl }}">
        </div>

        <div class="form-group">
            <label for="prod-name">Назва</label>
            <input type="text" class="form-control" name="prod-name" id="prod-name"
                   placeholder="Введіть назву продукту" value="{{ $product->NameProduct }}">
        </div>

        <div class="form-group">
            <label for="prod-type">Тип</label>
            <input type="text" class="form-control" name="prod-type" id="prod-type"
                   placeholder="Введіть тип продукту" value="{{ $product->TypeProduct }}">
        </div>

        <div class="form-group">
            <label for="prod-purchase">Вартість придбання</label>
            <input type="text" class="form-control" name="prod-purchase" id="prod-purchase"
                   placeholder="Введіть вартість придбання" value="{{ $product->CostPurchase }}">
        </div>

        <div class="form-group">
            <label for="prod-sale">Вартість продажу</label>
            <input type="text" class="form-control" name="prod-sale" id="prod-sale"
                   placeholder="Введіть вартість продажу" value="{{ $product->CostSale }}">
        </div>

        <div class="form-group">
            <label for="prod-availability">Наявність</label>
            <input type="text" class="form-control" name="prod-availability" id="prod-availability"
                   placeholder="Вкажіть наявність" value="{{ $product->Availability }}">
        </div>

        <div class="form-group">
            <label for="prod-quantity">Кількість</label>
            <input type="text" class="form-control" name="prod-quantity" id="prod-quantity"
                   placeholder="Введіть кількість" value="{{ $product->Quantity }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
