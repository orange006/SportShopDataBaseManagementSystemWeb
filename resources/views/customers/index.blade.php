@extends("layout")

@section("app-title", "Довідник клієнтів")

@section("page-title", "Клієнти")

@section("page-content")
    <form method="post" action="/customers" class="text-left">
        <div class="form-group">
            <a href="/customers/create" class="btn btn-outline-success float-left" style="margin-bottom: 10px;">Додати клієнта</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Повне ім'я</th>
                        <th scope="col">Номер телефону</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->FullNameCustomer}}</td>
                            <td>{{ $customer->PhoneNumberCustomer }}</td>
                            <td><a href="/customers/{{ $customer->id }}/edit" class="btn btn-outline-primary">Редагувати</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
