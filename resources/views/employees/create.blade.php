@extends("layout")

@section("app-title", "Додати працівника")

@section("page-title", "Додати працівника")

@section("page-content")
    <form method="post" action="/employees" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="empl-name">ПІБ</label>
            <input type="text" class="form-control {{ $errors->has('empl-name') ? 'is-invalid':'' }}" value="{{ old('empl-name') }}"
                   name="empl-name" id="empl-name" placeholder="Введіть ПІБ">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('empl-name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="empl-position">Посада</label>
            <input type="text" class="form-control {{ $errors->has('empl-position') ? 'is-invalid':'' }}" value="{{ old('empl-position') }}"
                   name="empl-position" id="empl-position" placeholder="Введіть посаду">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('empl-position') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="empl-age">Вік</label>
            <input type="text" class="form-control {{ $errors->has('empl-age') ? 'is-invalid':'' }}" value="{{ old('empl-age') }}"
                   name="empl-age" id="empl-age" placeholder="Введіть вік">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('empl-age') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="empl-number">Номер телефону</label>
            <input type="text" class="form-control {{ $errors->has('empl-number') ? 'is-invalid':'' }}" value="{{ old('empl-number') }}"
                   name="empl-number" id="empl-number" placeholder="Введіть номер телефону">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('empl-number') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
