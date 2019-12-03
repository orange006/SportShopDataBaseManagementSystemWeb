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
            <td>1</td>
            <td>Nike Roshe Run</td>
            <td>Sneakers</td>
            <td>1399</td>
            <td>1999</td>
            <td>yes</td>
            <td>12</td>
        </tr>
    </table>
@endsection
