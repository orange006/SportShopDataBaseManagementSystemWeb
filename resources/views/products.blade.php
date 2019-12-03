@extends("layout")

@section("app-title", "Довідник продукції")

@section("page-title", "Продукція")

@section("page-content")
    <table>
        <tr>
            <th>IdSuppl</th>
            <th>Назва</th>
            <th>Тип</th>
            <th>Ціна придбання</th>
            <th>Ціна продажу</th>
            <th>Наявність</th>
            <th>Кількість</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Nike Roshe Run</th>
            <th>Sneakers</th>
            <th>1399</th>
            <th>1999</th>
            <th>yes</th>
            <th>12</th>
        </tr>
    </table>
@endsection
