@extends("layout")

@section("app-title", "Довідник працівників")

@section("page-title", "Працівники")

@section("page-content")
    <table>
        <tr>
            <th>Повне ім'я</th>
            <th>Посада</th>
            <th>Вік</th>
            <th>Номер телефону</th>
        </tr>
        <tr>
            <th>Єфімов Олексій Ігорович</th>
            <th>CEO</th>
            <th>19</th>
            <th>0987654321</th>
        </tr>
    </table>
@endsection
