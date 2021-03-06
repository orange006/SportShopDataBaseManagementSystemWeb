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

            @include('includes/validationErr', ['errFieldName' => 'IdProv'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'DateSupply',
                'labelText' => 'Дата',
                'placeHolderText' => 'Введіть дату поставки'
            ])
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
