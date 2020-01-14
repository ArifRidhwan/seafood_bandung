<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    {{-- <form class="register-form">
        
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> --}}
<form method="POST" action="{{ route('login') }}">
                                        @csrf
    <form class="login-form">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"/>
         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password"/>
         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

      <button type="submit">login</button>
       @if (Route::has('register'))
      <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
       @endif
    </form>
  </div>
</div>
</body>
</html>
