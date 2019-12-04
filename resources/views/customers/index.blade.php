@extends("layout")

@section("app-title", "Довідник клієнтів")

@section("page-title", "Клієнти")

@section("page-content")
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Повне ім'я</th>
                <th scope="col">Номер телефону</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->FullNameCustomer}}</td>
                    <td>{{ $customer->PhoneNumberCustomer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
