@extends('adminlte.layouts.auth')

@section('content')

    <body class="hold-transition login-page"
        style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ route('home') }}" style="color: #eb47ebcc;"><b>{{ config('app.name', 'Laravel') }}</b> 1.0</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                    <!-- Success Message -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block"
                                    style="background-color: #eb47ebcc; border-color: #eb47ebcc; color: white;">Request new
                                    password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    @if (Route::has('login'))
                        <p class="mt-3 mb-1">
                            <a href="{{ route('login') }}" style="color: #eb47ebcc;">Login</a>
                        </p>
                    @endif
                    @if (Route::has('register'))
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center" style="color: #eb47ebcc;">Register a new
                                account</a>
                        </p>
                    @endif
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </body>
@endsection
