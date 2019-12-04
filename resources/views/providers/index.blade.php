@extends("layout")

@section("app-title", "Довідник постачальників")

@section("page-title", "Постачальники")

@section("page-content")
    <table>
        <tr>
            <th>id</th>
            <th>Назва</th>
            <th>Представник</th>
            <th>Номер телефону</th>
        </tr>
        @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->id }}</td>
                <td>{{ $provider->NameProvider }}</td>
                <td>{{ $provider->Representative }}</td>
                <td>{{ $provider->PhoneNumberProvider }}</td>
            </tr>
        @endforeach
    </table>
@endsection
