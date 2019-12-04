@extends("layout")

@section("app-title", "Довідник працівників")

@section("page-title", "Працівники")

@section("page-content")
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Повне ім'я</th>
                <th scope="col">Посада</th>
                <th scope="col">Вік</th>
                <th scope="col">Номер телефону</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->FullNameEmployee }}</td>
                    <td>{{ $employee->Position }}</td>
                    <td>{{ $employee->Age }}</td>
                    <td>{{ $employee->PhoneNumberEmployee }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
