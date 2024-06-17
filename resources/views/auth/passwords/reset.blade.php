@extends('adminlte.layouts.auth')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<body class="hold-transition login-page" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ route('home') }}" style="color: #eb47ebcc;"><b>{{ config('app.name', 'Laravel') }}</b> 1.0</a>
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ route('home') }}"><b>{{ config('app.name', 'Laravel') }}</b> 1.0</a>
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $request->token }}">
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
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
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
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
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
<<<<<<< HEAD
<<<<<<< HEAD
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #eb47ebcc; border-color: #eb47ebcc; color: white;">Change password</button>
=======
                <button type="submit" class="btn btn-primary btn-block">Change password</button>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                <button type="submit" class="btn btn-primary btn-block">Change password</button>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
              </div>
              <!-- /.col -->
            </div>
          </form>
          @if (Route::has('login'))
          <p class="mt-3 mb-1">
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="{{ route('login') }}" style="color: #eb47ebcc;">Login</a>
=======
            <a href="{{ route('login') }}">Login</a>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            <a href="{{ route('login') }}">Login</a>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
          </p>
          @endif
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

@endsection
