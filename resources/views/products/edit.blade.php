@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/products/{{ $product->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdSuppl">Id поставки</label>
            <input type="text" class="form-control {{ $errors->has('IdSuppl') ? 'is-invalid':'' }}"
                   value="{{ old('IdSuppl') ? old('IdSuppl') : $product->IdSuppl }}"
                   name="IdSuppl" id="prod-idsuppl" placeholder="Введіть id поставки">

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
            <input type="text" class="form-control {{ $errors->has('NameProduct') ? 'is-invalid':'' }}"
                   value="{{ old('NameProduct') ? old('NameProduct') : $product->NameProduct }}"
                   name="NameProduct" id="prod-name" placeholder="Введіть назву продукту">

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
            <input type="text" class="form-control {{ $errors->has('TypeProduct') ? 'is-invalid':'' }}"
                   value="{{ old('TypeProduct') ? old('TypeProduct') : $product->TypeProduct }}"
                   name="TypeProduct" id="prod-type" placeholder="Введіть тип продукту">

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
            <input type="text" class="form-control {{ $errors->has('CostPurchase') ? 'is-invalid':'' }}"
                   value="{{ old('CostPurchase') ? old('CostPurchase') : $product->CostPurchase }}"
                   name="CostPurchase" id="prod-purchase" placeholder="Введіть вартість придбання">

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
            <input type="text" class="form-control {{ $errors->has('CostSale') ? 'is-invalid':'' }}"
                   value="{{ old('CostSale') ? old('CostSale') : $product->CostSale }}"
                   name="CostSale" id="prod-sale" placeholder="Введіть вартість продажу">

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
            <input type="text" class="form-control {{ $errors->has('Availability') ? 'is-invalid':'' }}"
                   value="{{ old('Availability') ? old('Availability') : $product->Availability }}"
                   name="Availability" id="prod-availability" placeholder="Вкажіть наявність">

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
            <input type="text" class="form-control {{ $errors->has('Quantity') ? 'is-invalid':'' }}"
                   value="{{ old('Quantity') ? old('Quantity') : $product->Quantity }}"
                   name="Quantity" id="prod-quantity" placeholder="Введіть кількість">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Quantity') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Змінити</button>

        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
            Видалити
        </button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">
                        <p>Підтвердіть видалення</p>
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">х</span>
                    </button>
                </div>

                <div class="modal-body text-left">
                    Видалити продукт {{ $product->NameProduct }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-product">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-product").click(function () {
                var id = {!! $product->id !!};

                $.ajax({
                    url: '/products/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/products";
                    }
                });
            });
        });
    </script>
@endsection
