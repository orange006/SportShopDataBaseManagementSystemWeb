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
                        <th scope="col">Назва продукту</th>
                        <th scope="col">ПІБ працівника</th>
                        <th scope="col">ПІБ клієнта</th>
                        <th scope="col">Date Order</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->product->NameProduct }}</td>
                            <td>{{ $order->employee->FullNameEmployee }}</td>
                            <td>{{ $order->customer->FullNameCustomer }}</td>
                            <td>{{ $order->DateOrder }}</td>
                            <td>
                                <a href="/orders/{{ $order->id }}" class="btn btn-outline-secondary">Переглянути</a>
                                <a href="/orders/{{ $order->id }}/edit" class="btn btn-outline-primary">Редагувати</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
