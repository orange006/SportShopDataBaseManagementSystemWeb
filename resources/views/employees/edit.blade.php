@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/employees/{{ $employee->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="empl-name">ПІБ</label>
            <input type="text" class="form-control" name="FullNameEmployee" id="empl-name"
                   placeholder="Введіть ПІБ" value="{{ $employee->FullNameEmployee }}">
        </div>

        <div class="form-group">
            <label for="">Посада</label>
            <input type="text" class="form-control" name="Position" id="empl-position"
                   placeholder="Введіть посаду" value="{{ $employee->Position }}">
        </div>

        <div class="form-group">
            <label for="">Вік</label>
            <input type="text" class="form-control" name="Age" id="empl-age"
                   placeholder="Введіть вік" value="{{ $employee->Age }}">
        </div>

        <div class="form-group">
            <label for="empl-number">Номер телефону</label>
            <input type="text" class="form-control" name="PhoneNumberEmployee" id="empl-number"
                   placeholder="Введіть номер телефону" value="{{ $employee->PhoneNumberEmployee }}">
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
