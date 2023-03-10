@extends('layouts.app')

@section('content')
<div class="container emailCardContainer">
    <div class="row justify-content-center">
        <div class="col-md-8 rearrangeLayout">
            <div id="emailContainer" class="card">
                <div id="headerBackground" class="card-header">{{ __('Restablecer Contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div id="sendBtton" class="col-md-6 offset-md-4">
                                <button id="sendLink" type="submit" class="btn btn-primary">
                                    {{ __('Enviar Link para restablecer la contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
