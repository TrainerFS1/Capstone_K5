@extends('adminlte.layouts.auth')
@section('title', 'Register')
@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
<body class="hold-transition register-page" style="background-color: #eb47ebcc;">
    <div class="login-container" style="display: flex; height: 100vh;">
        <div class="login-image" style="flex: 1; background-color: #eb47ebcc; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('assetsLanding/img/undraw_regis.svg') }}" alt="Image" class="img-fluid" style="max-width: 100%; height: 400px;">
        </div>
        <div class="login-form-container" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <div class="login-box" style="width: 100%; max-width: 400px;">
                <div class="login-logo">
                    <a href="{{ route('home') }}" style="color: #eb47ebcc; font-weight: 700; font-size: 2rem;">{{ config('app.name', 'Laravel') }}</a>
                </div>
                <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <div class="card-body register-card-body" style="border-radius: 10px;">
                        <p class="login-box-msg" style="font-size: 1.2rem; color: #555;">Register</p>

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form action="{{ route('register.store') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}" style="border-radius: 30px; padding: 10px;">
                                <div class="input-group-append">
                                    <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" style="border-radius: 30px; padding: 10px;">
                                <div class="input-group-append">
                                    <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" style="border-radius: 30px; padding: 10px;">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                            <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Retype password" style="border-radius: 30px; padding: 10px;">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <div class="input-group-text" style="border-radius: 0 30px 30px 0;">
                                            <i class="fas fa-eye" id="togglePasswordConfirmation" style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="{{ asset('js/togglepassword.js') }}"></script>

                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center icheck-primary">
                                        <div>
                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                            <label for="agreeTerms" style="color: #555;">
                                                I agree to the <a href="#" style="color: #eb47ebcc;">terms</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block" style="border-radius: 30px; background-color: #eb47ebcc; border: none;">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
</br>
                        @if (Route::has('login'))
                        <p class="mb-4 text-center">
                            <a href="{{ route('login') }}" style="color: #eb47ebcc;">I already have an account</a>
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ route('home') }}"><b>{{ config('app.name', 'Laravel') }}</b> 1.0</a>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new membership</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Full name" name="name" value="{{ old('name') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Email" name="email" value="{{ old('email') }}">
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
                        <div class="input-group mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign up using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign up using Google+
                        </a>
                    </div>
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                    @endif
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    @endsection
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
