@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h2 class="text-center">{{ __('Register') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="bmd-label-floating" style="color: #6a6a6a;">{{ __('Name') }}</label>                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>

                        <div class="form-group">
                            <label for="email" class="bmd-label-floating" style="color: #6a6a6a;">{{ __('E-Mail Address') }}</label>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>

                        <div class="form-group">
                            <label for="password" class="bmd-label-floating" style="color: #6a6a6a;">{{ __('Password') }}</label>
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="bmd-label-floating" style="color: #6a6a6a;">{{ __('Confirm Password') }}</label>
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                           
                        </div>

                        <div class="form-group">                            
                                <button type="submit" class="btn btn-raised btn-primary" style="background-color: #0e457b;">
                                    {{ __('Register') }}
                                </button>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
