@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/supplies/{{ $supply->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="IdProv">Назва постачальника</label>

            <select name="IdProv" id="IdProv" class="browser-default custom-select">
                <option value="0" disabled>Оберіть назву постачальника</option>

                @foreach($providers as $provider)
                    <option @if($supply->provider->id == $provider->id) selected @endif value="{{ $provider->id }}">
                        {{ $provider->NameProvider }}
                    </option>
                @endforeach
            </select>

            @include('includes/validationErr', ['errFieldName' => 'IdProv'])
        </div>

        <div class="form-group">
            @include("includes/input", [
                'fieldId' => 'DateSupply',
                'labelText' => 'Дата',
                'placeHolderText' => 'Введіть дату поставки',
                'fieldValue' => $supply->DateSupply
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
