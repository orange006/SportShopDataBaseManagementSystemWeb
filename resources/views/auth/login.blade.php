@extends('layout')

@section("app-title", "Вхід")
@section("page-title", "Логін")

@section('page-content')
    <div class="col-md-6 mx-auto">
        <form class="d-flex flex-column text-right" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">

                <input placeholder="Пошта" type="email" name="email" value="{{ old('email') }}" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-group">

                <input placeholder="Пароль" type="password" id="password" name="password" required
                       class="form-control @error('password') is-invalid @enderror" autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember" class="form-check-label">Запам'ятати</label>
                </div>

                <div>
                    @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Забули пароль</a>
                    @endif
                </div>
            </div>

            <div class="form-group mb-0">
                <button class="btn btn-primary" type="submit">Вхід</button>
            </div>
        </form>
    </div>
@endsection
