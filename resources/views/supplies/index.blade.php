@extends("layout")

@section("app-title", "Довідник поставок")

@section("page-title", "Поставки")

@section("page-content")
    <table>
        <tr>
            <th>id</th>
            <th>idProv</th>
            <th>Дата</th>
        </tr>
        @foreach ($supplies as $supply)
            <tr>
                <td>{{ $supply->id }}</td>
                <td>{{ $supply->IdProv }}</td>
                <td>{{ $supply->DateSupply }}</td>
            </tr>
        @endforeach
    </table>
@endsection
