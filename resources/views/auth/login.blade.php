@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="form-signin">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
        <!-- Links de "Esqueci a senha" e "Cadastrar" -->
        <div class="mt-3">
            <a href="{{ route('password.request') }}">Esqueci a senha</a> | 
            <a href="{{ route('register') }}">Cadastrar-se</a>
        </div>

        <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    </form>
@endsection
