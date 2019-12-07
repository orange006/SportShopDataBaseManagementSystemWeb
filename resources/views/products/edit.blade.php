@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/products/{{ $product->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdSuppl">Id поставки</label>

            <select name="IdSuppl" id="IdSuppl" class="browser-default custom-select">
                <option value="0" disabled>Оберіть id поставки</option>

                @foreach($supplies as $supply)
                    <option @if($product->supply->id == $supply->id) selected @endif value="{{ $supply->id }}">
                        {{ $supply->id }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdSuppl'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'NameProduct',
                'labelText' => 'Назва',
                'placeHolderText' => 'Введіть назву продукту',
                'fieldValue' => $product->NameProduct
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'TypeProduct',
                'labelText' => 'Тип',
                'placeHolderText' => 'Введіть тип продукту',
                'fieldValue' => $product->TypeProduct
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'CostPurchase',
                'labelText' => 'Вартість придбання',
                'placeHolderText' => 'Введіть вартість придбання',
                'fieldValue' => $product->CostPurchase
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'CostSale',
                'labelText' => 'Вартість продажу',
                'placeHolderText' => 'Введіть вартість продажу',
                'fieldValue' => $product->CostSale
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'Availability',
                'labelText' => 'Наявність',
                'placeHolderText' => 'Вкажіть наявність',
                'fieldValue' => $product->Availability
            ])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'Quantity',
                'labelText' => 'Кількість',
                'placeHolderText' => 'Введіть кількість',
                'fieldValue' => $product->Quantity
            ])
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
