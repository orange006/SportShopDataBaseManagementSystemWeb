@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/orders/{{ $order->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdProd">Назва продукта</label>

            <select name="IdProd" id="IdProd" class="browser-default custom-select">
                <option value="0" disabled>Оберіть продукт</option>

                @foreach($products as $product)
                    <option @if($order->product->id == $product->id) selected @endif value="{{ $product->id }}">
                        {{ $product->NameProduct }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdProd'])
        </div>

        <div class="form-group">
            <label for="IdEmpl">ПІБ працівника</label>

            <select name="IdEmpl" id="IdEmpl" class="browser-default custom-select">
                <option value="0" disabled>Оберіть працівника</option>

                @foreach($employees as $employee)
                    <option @if($order->employee->id == $employee->id) selected @endif value="{{ $employee->id }}">
                        {{ $employee->FullNameEmployee }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdEmpl'])
        </div>

        <div class="form-group">
            <label for="IdCust">ПІБ клієнта</label>

            <select name="IdCust" id="IdCust" class="browser-default custom-select">
                <option value="0" disabled>Оберіть клієнта</option>

                @foreach($customers as $customer)
                    <option @if($order->customer->id == $customer->id) selected @endif value="{{ $customer->id }}">
                        {{ $customer->FullNameCustomer }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdCust'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'DateOrder',
                'labelText' => 'Дата замовлення',
                'placeHolderText' => 'Введіть дату замовлення',
                'fieldValue' => $order->DateOrder
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
