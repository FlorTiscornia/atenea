@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="salute" class="text-center">{{ __('¡Hola!') }}<img src="https://res.cloudinary.com/de1i08drf/
v1675077884/Atenea/cabezaBuhoAzulSmall_piqqgc.png" style="margin-left: 30px">
            </div>
            
            <div id="loginCard" >
                <div id="cardContainer">
                    <div class="card bg-success p-2 text-dark bg-opacity-25 ">
                        
                        <div class="card-body ">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div id="studentLog" class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="studentLog" class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
                                </div>                                                        
                                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                                <div id="logForgotContainer" class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button id="loginBttn" type="submit" class="btn btn-primary text">
                                        {{ __('Ingresar') }}
                                    </button>
                                    <br>
                                        @if (Route::has('password.request'))
                                        <a id="forgottenP" class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste la contraseña?') }}
                                        </a>
                                        @endif
                                    </br>
                                </div>
                            </form> 
                        </div>                    
                    </div>
                </div>   
            </div>    
        </div>
    </div>

    <div id="scholarYear" class="text-center">{{ __('Curso escolar 2022/2023') }}</div>

</div>

@endsection

