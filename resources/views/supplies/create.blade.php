@extends("layout")

@section("app-title", "Додати поставку")

@section("page-title", "Додати поставку")

@section("page-content")
    <form method="post" action="/supplies" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="suppl-idprov">Id постачальника</label>
            <input type="text" class="form-control {{ $errors->has('suppl-idprov') ? 'is-invalid':'' }}" value="{{ old('suppl-idprov') }}"
                   name="suppl-idprov" id="suppl-idprov" placeholder="Введіть id постачальника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('suppl-idprov') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="suppl-date">Дата</label>
            <input type="text" class="form-control {{ $errors->has('suppl-date') ? 'is-invalid':'' }}" value="{{ old('suppl-date') }}"
                   name="suppl-date" id="suppl-date" placeholder="Введіть дату поставки">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('suppl-date') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
