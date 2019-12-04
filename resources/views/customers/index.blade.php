@extends("layout")

@section("app-title", "Довідник клієнтів")

@section("page-title", "Клієнти")

@section("page-content")
    <table>
        <tr>
            <th>id</th>
            <th>Повне ім'я</th>
            <th>Номер телефону</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->FullNameCustomer}}</td>
                <td>{{ $customer->PhoneNumberCustomer }}</td>
            </tr>
        @endforeach
    </table>
@endsection
