@extends("layout")

@section("app-title", "Довідник працівників")

@section("page-title", "Працівники")

@section("page-content")
    <form method="post" action="/employees" class="text-left">
        <div class="form-group">
            <a href="/employees/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати працівника</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Повне ім'я</th>
                        <th scope="col">Посада</th>
                        <th scope="col">Вік</th>
                        <th scope="col">Номер телефону</th>
                        <th scope="col"></th>
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
                            <td>
                                <a href="/employees/{{ $employee->id }}" class="btn btn-outline-secondary">Переглянути</a>
                                <a href="/employees/{{ $employee->id }}/edit" class="btn btn-outline-primary">Редагувати</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
