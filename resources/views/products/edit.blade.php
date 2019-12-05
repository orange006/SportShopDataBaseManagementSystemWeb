@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/products/{{ $product->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="prod-idsuppl">Id поставки</label>
            <input type="text" class="form-control" name="IdSuppl" id="prod-idsuppl"
                   placeholder="Введіть id поставки" value="{{ $product->IdSuppl }}">
        </div>

        <div class="form-group">
            <label for="prod-name">Назва</label>
            <input type="text" class="form-control" name="NameProduct" id="prod-name"
                   placeholder="Введіть назву продукту" value="{{ $product->NameProduct }}">
        </div>

        <div class="form-group">
            <label for="prod-type">Тип</label>
            <input type="text" class="form-control" name="TypeProduct" id="prod-type"
                   placeholder="Введіть тип продукту" value="{{ $product->TypeProduct }}">
        </div>

        <div class="form-group">
            <label for="prod-purchase">Вартість придбання</label>
            <input type="text" class="form-control" name="CostPurchase" id="prod-purchase"
                   placeholder="Введіть вартість придбання" value="{{ $product->CostPurchase }}">
        </div>

        <div class="form-group">
            <label for="prod-sale">Вартість продажу</label>
            <input type="text" class="form-control" name="CostSale" id="prod-sale"
                   placeholder="Введіть вартість продажу" value="{{ $product->CostSale }}">
        </div>

        <div class="form-group">
            <label for="prod-availability">Наявність</label>
            <input type="text" class="form-control" name="Availability" id="prod-availability"
                   placeholder="Вкажіть наявність" value="{{ $product->Availability }}">
        </div>

        <div class="form-group">
            <label for="prod-quantity">Кількість</label>
            <input type="text" class="form-control" name="pQuantity" id="prod-quantity"
                   placeholder="Введіть кількість" value="{{ $product->Quantity }}">
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
