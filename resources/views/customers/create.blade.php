@extends("layout")

@section("app-title", "Додати клієнта")

@section("page-title", "Додати клієнта")

@section("page-content")
    <form method="post" action="/customers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="cust-name">ПІБ</label>
            <input type="text" class="form-control {{ $errors->has('cust-name') ? 'is-invalid':'' }}" value="{{ old('cust-name') }}"
                   name="cust-name" id="cust-name" placeholder="Введіть ПІБ">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('cust-name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="cust-number">Номер телефону</label>
            <input type="text" class="form-control {{ $errors->has('cust-number') ? 'is-invalid':'' }}" value="{{ old('cust-number') }}"
                   name="cust-number" id="cust-number" placeholder="Введіть номер телефону">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('cust-number') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>

        <div class="clearfix"></div>

    </form>
@endsection
