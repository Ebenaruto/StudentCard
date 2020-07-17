@extends('layouts\app')

@section('content')
    <div class="container"></div>

    <div class="logo d-flex bd-highlight mb-3">
        <div class="mr-auto p-2 bd-highlight"><img src="assets/img/logoesi.png" alt="logo" class="log"></div>
        <div class="ml-auto p-2 bd-highlight"><img src="assets/img/armoiries.jpg" alt="armoiries" class="log"></div>
    </div>
    <div class="esi">
        <h1>Ecole Superieur d'Informatique</h1>
    </div>
    <div class="appl">
        <h1>Gestion des cartes d'étudiants</h1>
        <h2>Premier Cycle</h2>
    </div>
    <div class="auth">
        <h2>Veuillez vous identifier</h2>
        <!-- Default form login -->
<form class="text-center border border-light p-5" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <p class="h4 mb-4">Se connecter</p>
    <div class="divider"></div>
    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
        <!-- Email -->
        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Pseudo" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <div class="col s12">
                    <span class="red-text">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                </div>
            @endif
    </div>
    <div class=" {{ $errors->has('password') ? ' has-error' : '' }}" required>
        <!-- Password -->
        <input type="password" id="password" min="8" name="password" class="form-control mb-4" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="red-text">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>
    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember" name="remember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Restez connecter</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a class="" href="{{ url('/password/reset') }}">Mot de passe oublié?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">{{ __('Login') }}</button>
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif

</form>
<!-- Default form login -->
    </div>
@endsection
