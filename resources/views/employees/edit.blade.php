@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/employees/{{ $employee->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="FullNameEmployee">ПІБ</label>
            <input type="text" class="form-control {{ $errors->has('FullNameEmployee') ? 'is-invalid':'' }}"
                   value="{{ old('FullNameEmployee') ? old('FullNameEmployee') : $employee->FullNameEmployee }}"
                   name="FullNameEmployee" id="empl-name" placeholder="Введіть ПІБ">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('FullNameEmployee') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="Position">Посада</label>
            <input type="text" class="form-control {{ $errors->has('Position') ? 'is-invalid':'' }}"
                   value="{{ old('Position') ? old('Position') : $employee->Position }}"
                   name="Position" id="empl-position" placeholder="Введіть посаду">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Position') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="Age">Вік</label>
            <input type="text" class="form-control {{ $errors->has('Age') ? 'is-invalid':'' }}"
                   value="{{ old('Age') ? old('Age') : $employee->Age }}"
                   name="Age" id="empl-age" placeholder="Введіть вік">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Age') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="PhoneNumberEmployee">Номер телефону</label>
            <input type="text" class="form-control {{ $errors->has('PhoneNumberEmployee') ? 'is-invalid':'' }}"
                   value="{{ old('PhoneNumberEmployee') ? old('PhoneNumberEmployee') : $employee->PhoneNumberEmployee }}"
                   name="PhoneNumberEmployee" id="empl-number" placeholder="Введіть номер телефону">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('PhoneNumberEmployee') as $error)
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
                    Видалити працівника {{ $employee->FullNameEmployee }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-employee">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-employee").click(function () {
                var id = {!! $employee->id !!};

                $.ajax({
                    url: '/employees/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/employees";
                    }
                });
            });
        });
    </script>
@endsection
