@extends("layout")

@section("app-title", "Додати продукт")

@section("page-title", "Додати продукт")

@section("page-content")
    <form method="post" action="/products" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="prod-idsuppl">Id поставки</label>
            <input type="text" class="form-control" name="prod-idsuppl" id="prod-idsuppl" placeholder="Введіть id поставки">
        </div>

        <div class="form-group">
            <label for="prod-name">Назва</label>
            <input type="text" class="form-control" name="prod-name" id="prod-name" placeholder="Введіть назву продукту">
        </div>

        <div class="form-group">
            <label for="prod-type">Тип</label>
            <input type="text" class="form-control" name="prod-type" id="prod-type" placeholder="Введіть тип продукту">
        </div>

        <div class="form-group">
            <label for="prod-purchase">Вартість придбання</label>
            <input type="text" class="form-control" name="prod-purchase" id="prod-purchase" placeholder="Введіть вартість придбання">
        </div>

        <div class="form-group">
            <label for="prod-sale">Вартість продажу</label>
            <input type="text" class="form-control" name="prod-sale" id="prod-sale" placeholder="Введіть вартість продажу">
        </div>

        <div class="form-group">
            <label for="prod-availability">Наявність</label>
            <input type="text" class="form-control" name="prod-availability" id="prod-availability" placeholder="Вкажіть наявність">
        </div>

        <div class="form-group">
            <label for="prod-quantity">Кількість</label>
            <input type="text" class="form-control" name="prod-quantity" id="prod-quantity" placeholder="Введіть кількість">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
