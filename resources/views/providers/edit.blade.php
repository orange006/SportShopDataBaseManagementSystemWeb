@extends("layout")

@section("app-title", "Редагування працівника")

@section("page-title", "Редагування працівника")

@section("page-content")
    <form method="post" action="/providers/{{ $provider->id }}" class="text-left">
        @csrf

        {{ method_field("patch") }}

        <div class="form-group">
            <label for="NameProvider">Назва</label>
            <input type="text"  class="form-control {{ $errors->has('NameProvider') ? 'is-invalid':'' }}"
                   value="{{ old('NameProvider') ? old('NameProvider') : $provider->NameProvider }}"
                   name="NameProvider" id="prov-name" placeholder="Введіть назву постачальника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('NameProvider') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="Representative">Представник</label>
            <input type="text"  class="form-control {{ $errors->has('FullNameCustomer') ? 'is-invalid':'' }}"
                   value="{{ old('Representative') ? old('Representative') : $provider->Representative }}"
                   name="Representative" id="prov-representative" placeholder="Введіть ПІБ представника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('Representative') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </small>
        </div>

        <div class="form-group">
            <label for="PhoneNumberProvider">Номер телефону</label>
            <input type="text"  class="form-control {{ $errors->has('PhoneNumberProvider') ? 'is-invalid':'' }}"
                   value="{{ old('PhoneNumberProvider') ? old('PhoneNumberProvider') : $provider->PhoneNumberProvider }}"
                   name="PhoneNumberProvider" id="prov-number" placeholder="Введіть номер телефону представника">

            <small class="form-text text-danger">
                <ul>
                    @foreach($errors->get('PhoneNumberProvider') as $error)
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
                    Видалити постачальника {{ $provider->NameProvider }} ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Ні
                    </button>

                    <button type="button" class="btn btn-danger" id="delete-provider">
                        Видалити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-provider").click(function () {
                var id = {!! $provider->id !!};

                $.ajax({
                    url: '/providers/' + id,
                    type: 'post',

                    data: {
                        _method: 'delete',
                        _token: "{!! csrf_token() !!}"
                    },

                    success:function(msg) {
                        location.href="/providers";
                    }
                });
            });
        });
    </script>
@endsection
