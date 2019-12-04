@extends("layout")

@section("app-title", "Довідник поставок")

@section("page-title", "Поставки")

@section("page-content")
    <form method="post" action="/supplies" class="text-left">
        <div class="form-group">
            <a href="/supplies/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати поставку</a>

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
        </div>
    </form>
@endsection
