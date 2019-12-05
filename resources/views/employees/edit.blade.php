@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/employees/{{ $employee->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="empl-name">ПІБ</label>
            <input type="text" class="form-control" name="empl-name" id="empl-name"
                   placeholder="Введіть ПІБ" value="{{ $employee->FullNameEmployee }}">
        </div>

        <div class="form-group">
            <label for="">Посада</label>
            <input type="text" class="form-control" name="empl-position" id="empl-position"
                   placeholder="Введіть посаду" value="{{ $employee->Position }}">
        </div>

        <div class="form-group">
            <label for="">Вік</label>
            <input type="text" class="form-control" name="empl-age" id="empl-age"
                   placeholder="Введіть вік" value="{{ $employee->Age }}">
        </div>

        <div class="form-group">
            <label for="empl-number">Номер телефону</label>
            <input type="text" class="form-control" name="empl-number" id="empl-number"
                   placeholder="Введіть номер телефону" value="{{ $employee->PhoneNumberEmployee }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
