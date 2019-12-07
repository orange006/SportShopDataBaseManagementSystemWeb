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
                        <th scope="col">Назва постачальника</th>
                        <th scope="col">Дата</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supplies as $supply)
                        <tr>
                            <td>{{ $supply->id }}</td>
                            <td>{{ $supply->provider->NameProvider}}</td>
                            <td>{{ $supply->DateSupply }}</td>
                            <td>
                                <a href="/supplies/{{ $supply->id }}" class="btn btn-outline-secondary">Переглянути</a>
                                <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-outline-primary">Редагувати</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
