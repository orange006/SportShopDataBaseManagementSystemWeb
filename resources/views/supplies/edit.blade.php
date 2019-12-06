@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/supplies/{{ $supply->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdProv">Id постачальника</label>
            <input type="text" class="form-control {{ $errors->has('IdProv') ? 'is-invalid':'' }}"
                   value="{{ old('IdProv') ? old('IdProv') : $supply->IdProv }}"
                   name="IdProv" id="suppl-idprov" placeholder="Введіть id постачальника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('IdProv') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="DateSupply">Дата</label>
            <input type="text" class="form-control {{ $errors->has('DateSupply') ? 'is-invalid':'' }}"
                   value="{{ old('DateSupply') ? old('DateSupply') : $supply->DateSupply }}"
                   name="DateSupply" id="suppl-date" placeholder="Введіть дату поставки" value="{{ $supply->DateSupply }}">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('DateSupply') as $error)
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
                    Видалити поставку №{{ $supply->id }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-supply">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-supply").click(function () {
                var id = {!! $supply->id !!};

                $.ajax({
                    url: '/supplies/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/supplies";
                    }
                });
            });
        });
    </script>
@endsection
