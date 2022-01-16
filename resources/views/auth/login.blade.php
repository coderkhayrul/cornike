{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}




<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <title>Sign In | Cornike Admin Panel</title>
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="{{ asset('admin') }}/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/light.css" rel="stylesheet">
</head>
<body>
    <div class="main d-flex justify-content-center w-100">
        <main class="content d-flex p-0">
            <div class="container d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">
                            <div class="text-center mt-4">
                                <h1 class="h2">Welcome back, Chris</h1>
                                <p class="lead">
                                    Sign in to your account to continue
                                </p>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <div class="text-center">
                                            <img src="{{ asset('admin') }}/img/avatars/avatar.jpg" alt="Chris Wood"
                                                class="img-fluid rounded-circle" width="132" height="132" />
                                        </div>
                                        <form method="post" action="{{ route('login') }}" id="login-form">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control form-control-lg" type="email" name="email"
                                                    @error('email') is-invalid @enderror placeholder="Enter your email" />
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <small class="form-text d-block text-muted">{{ $message }}</small>
                                                    </span>
                                                    @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg" type="password"
                                                    name="password" placeholder="Enter your password"  @error('password') is-invalid @enderror/>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                <small>
                                                    <a href="pages-reset-password.html">Forgot password?</a>
                                                </small>
                                            </div>
                                            <div>
                                                <div class="form-check align-items-center">
                                                    <input id="customControlInline" type="checkbox"
                                                        class="form-check-input" value="remember-me" name="remember-me"
                                                        checked>
                                                    <label class="form-check-label text-small"
                                                        for="customControlInline">Remember me next time</label>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a href="{{ route('login') }}" onclick="event.preventDefault() document.getElementById('login-form').submit();" class="btn btn-lg btn-primary">Sign
                                                    in</a>
                                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('admin') }}/js/app.js"></script>
</body>
</html>
