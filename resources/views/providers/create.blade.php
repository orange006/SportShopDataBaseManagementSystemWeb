@extends("layout")

@section("app-title", "Додати постачальника")

@section("page-title", "Додати постачальника")

@section("page-content")
    <form method="post" action="/providers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="prov-name">Назва</label>
            <input type="text" class="form-control" name="prov-name" id="prov-name" placeholder="Введіть назву постачальника">
        </div>

        <div class="form-group">
            <label for="prov-representative">Представник</label>
            <input type="text" class="form-control" name="prov-representative" id="prov-representative" placeholder="Введіть ПІБ представника">
        </div>

        <div class="form-group">
            <label for="prov-number">Номер телефону</label>
            <input type="text" class="form-control" name="prov-number" id="prov-number" placeholder="Введіть номер телефону представника">
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
