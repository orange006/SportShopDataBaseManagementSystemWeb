@extends("layout")

@section("app-title", "Довідник замовлень")

@section("page-title", "Замовлення")

@section("page-content")
    <form method="post" action="/orders" class="text-left">
        <div class="form-group">
            <a href="/orders/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати замовлення</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">IdProd</th>
                        <th scope="col">IdEmpl</th>
                        <th scope="col">IdCust</th>
                        <th scope="col">Date Order</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->IdProd }}</td>
                            <td>{{ $order->IdEmpl }}</td>
                            <td>{{ $order->IdCust }}</td>
                            <td>{{ $order->DateOrder }}</td>
                            <td><a href="/orders/{{ $order->id }}/edit" class="btn btn-outline-primary">Редагувати</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
