@extends("layout")

@section("app-title", "Додати продукт")

@section("page-title", "Додати продукт")

@section("page-content")
    <form method="post" action="/products" class="text-left">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="IdSuppl">Номер поставки</label>

            <select name="IdSuppl" id="supply" class="browser-default custom-select">
                <option value="0" disabled selected>Оберіть номер поставки</option>

                @foreach($supplies as $supply)
                    <option value="{{ $supply->id }}">
                        {{ $supply->id }}
                    </option>
                @endforeach
            </select>

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdSuppl') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="NameProduct">Назва</label>
            <input type="text" class="form-control {{ $errors->has('NameProduct') ? 'is-invalid':'' }}" value="{{ old('NameProduct') }}"
                   name="NameProduct" id="NameProduct" placeholder="Введіть назву продукту">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('NameProduct') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="TypeProduct">Тип</label>
            <input type="text" class="form-control {{ $errors->has('TypeProduct') ? 'is-invalid':'' }}" value="{{ old('TypeProduct') }}"
                   name="TypeProduct" id="TypeProduct" placeholder="Введіть тип продукту">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('TypeProduct') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="CostPurchase">Вартість придбання</label>
            <input type="text" class="form-control {{ $errors->has('CostPurchase') ? 'is-invalid':'' }}" value="{{ old('CostPurchase') }}"
                   name="CostPurchase" id="CostPurchase" placeholder="Введіть вартість придбання">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('CostPurchase') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="CostSale">Вартість продажу</label>
            <input type="text" class="form-control {{ $errors->has('CostSale') ? 'is-invalid':'' }}" value="{{ old('CostSale') }}"
                   name="CostSale" id="CostSale" placeholder="Введіть вартість продажу">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('CostSale') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="Availability">Наявність</label>
            <input type="text" class="form-control {{ $errors->has('Availability') ? 'is-invalid':'' }}" value="{{ old('Availability') }}"
                   name="Availability" id="Availability" placeholder="Вкажіть наявність">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Availability') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="Quantity">Кількість</label>
            <input type="text" class="form-control {{ $errors->has('Quantity') ? 'is-invalid':'' }}" value="{{ old('Quantity') }}"
                   name="Quantity" id="Quantity" placeholder="Введіть кількість">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Quantity') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Додати</button>
    </form>
@endsection
