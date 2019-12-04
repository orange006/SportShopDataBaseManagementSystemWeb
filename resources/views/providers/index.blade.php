@extends("layout")

@section("app-title", "Довідник постачальників")

@section("page-title", "Постачальники")

@section("page-content")
    <form method="post" action="/providers" class="text-left">
        <div class="form-group">
            <a href="/providers/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати постачальника</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Назва</th>
                        <th scope="col">Представник</th>
                        <th scope="col">Номер телефону</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($providers as $provider)
                        <tr>
                            <td>{{ $provider->id }}</td>
                            <td>{{ $provider->NameProvider }}</td>
                            <td>{{ $provider->Representative }}</td>
                            <td>{{ $provider->PhoneNumberProvider }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
