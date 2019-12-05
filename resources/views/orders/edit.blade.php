@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/orders/{{ $order->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdProd">Id продукта</label>
            <input type="text" class="form-control {{ $errors->has('IdProd') ? 'is-invalid':'' }}"
                   value="{{ old('IdProd') ? old('IdProd') : $order->IdProd }}"
                   name="IdProd" id="order-idprod" placeholder="Введіть id продукта">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdProd') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="IdEmpl">Id працівника</label>
            <input type="text" class="form-control {{ $errors->has('IdEmpl') ? 'is-invalid':'' }}"
                   value="{{ old('IdEmpl') ? old('IdEmpl') : $order->IdProd }}"
                   name="IdEmpl" id="order-idempl" placeholder="Введіть id працівника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdEmpl') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="IdEmpl">Id клієнта</label>
            <input type="text" class="form-control {{ $errors->has('IdCust') ? 'is-invalid':'' }}"
                   value="{{ old('IdCust') ? old('IdCust') : $order->IdCust }}"
                   name="IdCust" id="order-idcust" placeholder="Введіть id клієнта">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdCust') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="DateOrder">Дата замовлення</label>
            <input type="text" class="form-control {{ $errors->has('DateOrder') ? 'is-invalid':'' }}"
                   value="{{ old('DateOrder') ? old('DateOrder') : $order->IdCust }}"
                   name="DateOrder" id="order-date" placeholder="Введіть дату замовлення">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('DateOrder') as $error)
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
                    Видалити замовлення №{{ $order->id }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-order">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-order").click(function () {
                var id = {!! $order->id !!};

                $.ajax({
                    url: '/orders/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/orders";
                    }
                });
            });
        });
    </script>
@endsection
