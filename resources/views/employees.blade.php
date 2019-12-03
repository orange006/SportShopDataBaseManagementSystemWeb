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
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <td>{{ $employee['FullNameEmployee'] }}</td>
                <td>{{ $employee['Position'] }}</td>
                <td>{{ $employee['Age'] }}</td>
                <td>{{ $employee['PhoneNumberEmployee'] }}</td>
            </tr>
        <?php endforeach; ?>
    </table>
@endsection
