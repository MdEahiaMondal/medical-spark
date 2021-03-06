@extends('auth.layouts.app')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="ibox-content">
            <h2 class="font-bold" style="text-align: center">{{ __('Reset Password') }}</h2>
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}"">
                        @csrf

                        <div class="form-group">
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="help-block m-b-none text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Send Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
