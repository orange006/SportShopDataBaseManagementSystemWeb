@extends("layout")

@section("app-title", "Довідник постачальників")

@section("page-title", "Постачальники")

@section("page-content")
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
@endsection
