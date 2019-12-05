@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/orders/{{ $order->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="order-idprod">Id продукта</label>
            <input type="text" class="form-control" name="IdProd" id="order-idprod"
                   placeholder="Введіть id продукта" value="{{ $order->IdProd }}">
        </div>

        <div class="form-group">
            <label for="order-idempl">Id працівника</label>
            <input type="text" class="form-control" name="IdEmpl" id="order-idempl"
                   placeholder="Введіть id працівника" value="{{ $order->IdEmpl }}">
        </div>

        <div class="form-group">
            <label for="order-idcust">Id клієнта</label>
            <input type="text" class="form-control" name="IdCust" id="order-idcust"
                   placeholder="Введіть id клієнта" value="{{ $order->IdCust }}">
        </div>

        <div class="form-group">
            <label for="order-date">Дата замовлення</label>
            <input type="text" class="form-control" name="DateOrder" id="order-date"
                   placeholder="Введіть дату замовлення" value="{{ $order->DateOrder }}">
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
