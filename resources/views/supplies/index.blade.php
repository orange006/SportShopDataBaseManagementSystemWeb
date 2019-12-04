@extends("layout")

@section("app-title", "Довідник поставок")

@section("page-title", "Поставки")

@section("page-content")
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">idProv</th>
                <th scope="col">Дата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplies as $supply)
                <tr>
                    <td>{{ $supply->id }}</td>
                    <td>{{ $supply->IdProv }}</td>
                    <td>{{ $supply->DateSupply }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
