@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0">
                <div class="card-body rounded-lg">
                    <p class="text-muled text-center pt-3 mb-5">
                        Login With Account
                    </p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-group mb-4 shadow-sm">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/></svg>
                                    <input type="email" name="email" id="email"
                                    class="form-control border-0 text-muted {{ $errors->has('email') ? 'is-invalid' : ''}}"
                                    value="{{ old('email') }}"
                                    placeholder="Email" required autofocus>
                                </div>
                            </div>    
                        </div>
                        <div class="input-group mb-2 shadow-sm">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 17c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm3 0c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm3 0c0 .552-.447 1-1 1s-1-.448-1-1 .447-1 1-1 1 .448 1 1zm2-7v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-10-4c0-2.206 1.795-4 4-4s4 1.794 4 4v4h-8v-4zm11 16h-14v-10h14v10z"/></svg>
                                    <input type="password" name="password" id="password" 
                                        class="from-control border-0 text-muted
                                        {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="Password" autofocus require>
                                    
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password')}}</strong>
                                        </span>
                                        @endif    
                                </div>    
                            </div>    
                        </div>
                        <div class="form-group pt-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember"  class="form-check-input" {{ old("remember") ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember"> 
                                        {{ _ ('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3 mb-3">
                            <button type="submit" class="btn btn-primary shadow-sm">
                                {{ __('Sign In') }}
                            </buttons>
                        </div>
                    </from>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection
