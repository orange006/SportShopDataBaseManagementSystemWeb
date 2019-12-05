@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/providers/{{ $provider->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="prov-name">Назва</label>
            <input type="text" class="form-control" name="prov-name" id="prov-name"
                   placeholder="Введіть назву постачальника" value="{{ $provider->NameProvider }}">
        </div>

        <div class="form-group">
            <label for="prov-representative">Представник</label>
            <input type="text" class="form-control" name="prov-representative" id="prov-representative"
                   placeholder="Введіть ПІБ представника" value="{{ $provider->Representative }}">
        </div>

        <div class="form-group">
            <label for="prov-number">Номер телефону</label>
            <input type="text" class="form-control" name="prov-number" id="prov-number"
                   placeholder="Введіть номер телефону представника" value="{{ $provider->PhoneNumberProvider }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
