@extends("layout")

@section("app-title", "Довідник продукції")

@section("page-title", "Продукція")

@section("page-content")
    <table>
        <tr>
            <th>id</th>
            <th>IdSuppl</th>
            <th>Назва</th>
            <th>Тип</th>
            <th>Ціна придбання</th>
            <th>Ціна продажу</th>
            <th>Наявність</th>
            <th>Кількість</th>
        </tr>
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
            </tr>
        @endforeach
    </table>
@endsection
