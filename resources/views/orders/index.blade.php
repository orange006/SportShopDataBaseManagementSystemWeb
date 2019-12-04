@extends("layout")

@section("app-title", "Довідник замовлень")

@section("page-title", "Замовлення")

@section("page-content")
    <table>
        <tr>
            <th>id</th>
            <th>IdProd</th>
            <th>IdEmpl</th>
            <th>IdCust</th>
            <th>Date Order</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->IdProd }}</td>
                <td>{{ $order->IdEmpl }}</td>
                <td>{{ $order->IdCust }}</td>
                <td>{{ $order->DateOrder }}</td>
            </tr>
        @endforeach
    </table>
@endsection
