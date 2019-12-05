@extends("layout")

@section("app-title", "Додати постачальника")

@section("page-title", "Додати постачальника")

@section("page-content")
    <form method="post" action="/providers" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="prov-name">Назва</label>
            <input type="text" class="form-control {{ $errors->has('prov-name') ? 'is-invalid':'' }}" value="{{ old('prov-name') }}"
                   name="prov-name" id="prov-name" placeholder="Введіть назву постачальника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prov-name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prov-representative">Представник</label>
            <input type="text" class="form-control {{ $errors->has('prov-representative') ? 'is-invalid':'' }}" value="{{ old('prov-representative') }}"
                   name="prov-representative" id="prov-representative" placeholder="Введіть ПІБ представника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prov-representative') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prov-number">Номер телефону</label>
            <input type="text" class="form-control {{ $errors->has('prov-number') ? 'is-invalid':'' }}" value="{{ old('prov-number') }}"
                   name="prov-number" id="prov-number" placeholder="Введіть номер телефону представника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prov-number') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
