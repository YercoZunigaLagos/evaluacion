@extends('layouts.app')

@include('layouts.header.header')

@section('content')
<style>
.content {
    margin: 10px auto;
    width: 80%;
}

.or {
    text-align: center;
    font-size: 10px;
    background-image: linear-gradient(#aaa, #aaa), linear-gradient(#aaa, #aaa);
    background-size: 40% 1px;
    background-position: center left, center right;
    background-repeat: no-repeat;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{asset('/img/login.jpg')}}" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <!-- <input type="email" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Enter Email Address..."> -->
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Ingresa tu correo...">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password"> -->
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Contraseña" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="customCheck"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                        </div>



                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Inicia Sesion
                                    </button <div class="content">
                                    <p class="or">o</p>
                                    <div class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Perdiste tu contraseña?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                            </div>
                            </div>
                            

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection