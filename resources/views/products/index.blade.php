@extends("layout")

@section("app-title", "Довідник продукції")

@section("page-title", "Продукція")

@section("page-content")
    <form method="post" action="/products" class="text-left">
        <div class="form-group">
            <a href="/products/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати продукт</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">IdSuppl</th>
                        <th scope="col">Назва</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Ціна придбання</th>
                        <th scope="col">Ціна продажу</th>
                        <th scope="col">Наявність</th>
                        <th scope="col">Кількість</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->IdSuppl }}</td>
                            <td>{{ $product->NameProducts }}</td>
                            <td>{{ $product->TypeProduct }}</td>
                            <td>{{ $product->CostPurchase }}</td>
                            <td>{{ $product->CostSale }}</td>
                            <td>{{ $product->Availability }}</td>
                            <td>{{ $product->Quantity }}</td>
                            <td><a href="/products/{{ $product->id }}/edit" class="btn btn-outline-primary">Редагувати</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
