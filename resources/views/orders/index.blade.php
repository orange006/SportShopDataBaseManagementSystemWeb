@extends("layout")

@section("app-title", "Довідник замовлень")

@section("page-title", "Замовлення")

@section("page-content")
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">IdProd</th>
                <th scope="col">IdEmpl</th>
                <th scope="col">IdCust</th>
                <th scope="col">Date Order</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
