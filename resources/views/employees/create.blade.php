@extends("layout")

@section("app-title", "Додати працівника")

@section("page-title", "Додати працівника")

@section("page-content")
    <form method="post" action="/employees" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="empl-name">ПІБ</label>
            <input type="text" class="form-control" name="empl-name" id="empl-name" placeholder="Введіть ПІБ">
        </div>

        <div class="form-group">
            <label for="">Посада</label>
            <input type="text" class="form-control" name="empl-position" id="empl-position" placeholder="Введіть посаду">
        </div>

        <div class="form-group">
            <label for="">Вік</label>
            <input type="text" class="form-control" name="empl-age" id="empl-age" placeholder="Введіть вік">
        </div>

        <div class="form-group">
            <label for="empl-number">Номер телефону</label>
            <input type="text" class="form-control" name="empl-number" id="empl-number" placeholder="Введіть номер телефону">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
