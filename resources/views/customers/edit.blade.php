@extends("layout")

@section("app-title", "Редагувати клієнта")

@section("page-title", "Редагувати клієнта")

@section("page-content")
    <form method="post" action="/customers/{{ $customer->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="cust-name">ПІБ</label>
            <input type="text" class="form-control" name="cust-name" id="cust-name"
                   placeholder="Введіть ПІБ" value="{{ $customer->FullNameCustomer }}">
        </div>

        <div class="form-group">
            <label for="cust-number">Номер телефону</label>
            <input type="text" class="form-control" name="cust-number" id="cust-number"
                   placeholder="Введіть номер телефону" value="{{ $customer->PhoneNumberCustomer }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>
    </form>
@endsection
