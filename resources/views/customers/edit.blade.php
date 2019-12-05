@extends("layout")

@section("app-title", "Редагувати клієнта")

@section("page-title", "Редагувати клієнта")

@section("page-content")
    <form method="post" action="/customers/{{ $customer->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="FullNameCustomer">ПІБ</label>
            <input type="text" class="form-control {{ $errors->has('FullNameCustomer') ? 'is-invalid':'' }}"
                   value="{{ old('FullNameCustomer') ? old('FullNameCustomer') : $customer->FullNameCustomer }}"
                   name="FullNameCustomer" id="cust-name" placeholder="Введіть ПІБ">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('FullNameCustomer') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="PhoneNumberCustomer">Номер телефону</label>
            <input type="text" class="form-control {{ $errors->has('PhoneNumberCustomer') ? 'is-invalid':'' }}"
                   value="{{ old('PhoneNumberCustomer') ? old('PhoneNumberCustomer') : $customer->PhoneNumberCustomer }}"
                   name="PhoneNumberCustomer" id="cust-number" placeholder="Введіть номер телефону">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('PhoneNumberCustomer') as $error)
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
                    Видалити клієнта {{ $customer->FullNameCustomer }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-customer">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-customer").click(function () {
                var id = {!! $customer->id !!};

                $.ajax({
                    url: '/customers/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/customers";
                    }
                });
            });
        });
    </script>
@endsection
