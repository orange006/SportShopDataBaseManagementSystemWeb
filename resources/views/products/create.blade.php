@extends("layout")

@section("app-title", "Додати продукт")

@section("page-title", "Додати продукт")

@section("page-content")
    <form method="post" action="/products" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="prod-idsuppl">Id поставки</label>
            <input type="text" class="form-control {{ $errors->has('prod-idsuppl') ? 'is-invalid':'' }}" value="{{ old('prod-idsuppl') }}"
                   name="prod-idsuppl" id="prod-idsuppl" placeholder="Введіть id поставки">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-idsuppl') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-name">Назва</label>
            <input type="text" class="form-control {{ $errors->has('prod-name') ? 'is-invalid':'' }}" value="{{ old('prod-name') }}"
                   name="prod-name" id="prod-name" placeholder="Введіть назву продукту">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-type">Тип</label>
            <input type="text" class="form-control {{ $errors->has('prod-type') ? 'is-invalid':'' }}" value="{{ old('prod-type') }}"
                   name="prod-type" id="prod-type" placeholder="Введіть тип продукту">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-type') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-purchase">Вартість придбання</label>
            <input type="text" class="form-control {{ $errors->has('prod-purchase') ? 'is-invalid':'' }}" value="{{ old('prod-purchase') }}"
                   name="prod-purchase" id="prod-purchase" placeholder="Введіть вартість придбання">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-purchase') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-sale">Вартість продажу</label>
            <input type="text" class="form-control {{ $errors->has('prod-sale') ? 'is-invalid':'' }}" value="{{ old('prod-sale') }}"
                   name="prod-sale" id="prod-sale" placeholder="Введіть вартість продажу">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-sale') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-availability">Наявність</label>
            <input type="text" class="form-control {{ $errors->has('prod-availability') ? 'is-invalid':'' }}" value="{{ old('prod-availability') }}"
                   name="prod-availability" id="prod-availability" placeholder="Вкажіть наявність">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-availability') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="prod-quantity">Кількість</label>
            <input type="text" class="form-control {{ $errors->has('prod-quantity') ? 'is-invalid':'' }}" value="{{ old('prod-quantity') }}"
                   name="prod-quantity" id="prod-quantity" placeholder="Введіть кількість">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('prod-quantity') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
