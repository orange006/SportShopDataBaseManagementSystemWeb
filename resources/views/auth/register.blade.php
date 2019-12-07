@extends('layout')

@section("app-title", "Реєстрація")
@section("page-title", "Реєстрація користувача")

@section('page-content')
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">
                Ім'я
            </label>

            <div class="col-md-6">
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">
                e-mail
            </label>

            <div class="col-md-6">
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">
                Пароль
            </label>

            <div class="col-md-6">
                <input type="password" id="password" name="password" required class="form-control
                    @error('password') is-invalid @enderror" autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                Підтвердження пароля
            </label>

            <div class="col-md-6">
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control"
                       required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Реєстрація
                </button>
            </div>
        </div>
    </form>
@endsection
