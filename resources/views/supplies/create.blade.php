@extends("layout")

@section("app-title", "Додати поставку")

@section("page-title", "Додати поставку")

@section("page-content")
    <form method="post" action="/supplies" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="IdProv">Постачальник</label>

            <select name="IdProv" id="IdProv" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть назву постачальника</option>

                @foreach($providers as $provider)
                    <option value="{{ $provider->id }}">
                        {{ $provider->NameProvider }}
                    </option>
                @endforeach
            </select>

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdProv') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="DateSupply">Дата</label>
            <input type="text" class="form-control {{ $errors->has('DateSupply') ? 'is-invalid':'' }}" value="{{ old('DateSupply') }}"
                   name="DateSupply" id="DateSupply" placeholder="Введіть дату поставки">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('DateSupply') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
