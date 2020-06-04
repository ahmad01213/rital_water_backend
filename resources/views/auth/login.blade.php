
<!DOCTYPE html>
<html lang="en">
<head>
<title>ريتال - لوحة التحكم</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<style>
*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: arial;
    box-sizing: border-box;
}
body {
    background-color: #44bd32;
}
#login-form {
    width: 450px;
    background: #fff;
    padding: 80px 40px;
    border-top-left-radius: 100px;
    border-bottom-right-radius: 100px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    margin: 20px 0px;
}
#login-form h1 {
    text-align: center;
    margin-bottom: 60px;
    color: #44bd32;
    font-size: 30px;
}
#login-form p {
    font-size: 16px;
    color: #333;
}
#login-form p a {
    color: #44bd32;
}
#login-form label {
    color: #44bd32;
}
.input-box{
    border-bottom: 2px solid #adadad;
    position: relative;
    margin: 30px 0;
}
.input-box input{
    font-size: 15px;
    color: #333;
    border: none;
    width: 100%;
    outline: none;
    background: none;
    padding: 0 5px;
    height: 40px;
}
.input-box span::before{
    content: attr(data-placeholder);
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    z-index: -1;
    transition: .5s;
}
.input-box span::after{
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    background: linear-gradient(120deg,#2196F3,#FF5722);
    transition: .5s;
}
.focus + span::before{
    top: -5px;
}
.focus + span::after{
    width: 100%;
}
.login-btn {
    display: block;
    width: 100%;
    height: 50px;
    border: none;
    background: #44bd32;
    background-size: 200%;
    color: #fff;
    outline: none;
    cursor: pointer;
    margin: 20px 0px 0px;
    border-radius: 50px;
    transition: .5s;
    font-size: 18px;
    letter-spacing: 1px;
}
.login-btn:hover{
    background-position: right;
}
.bottom-links{
    margin-top: 30px;
    text-align: center;
    font-size: 13px;
}

/*--For Small Devices CSS--*/
@media (max-width: 575px){
#login-form {
    width: 300px;
}
}
</style>
</head>
<body>
  <form method="POST" action="{{ route('loginadmin') }}" id="login-form" autocomplete="off">
      @csrf
      <h1>ريتال - لوحة التحكم </h1>
    <div class="input-box" >
          <input type="text" name="email" class="form-control" placeholder="Email" 
onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Email'" >
      </div>

      <div class="input-box">
          <input type="password" name="password" class="form-control" placeholder="Password" 
onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Password'">
        
      </div>


      <button type="submit" class="login-btn">تسجبل الدخول</button>
  </form>
</body>
</html>



<!--@extends('layouts.app')-->

<!--@section('content')-->
<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">{{ __('Login') }}</div>-->

<!--                <div class="card-body">-->
<!--                    <form method="POST" action="{{ route('login') }}">-->
<!--                        @csrf-->

<!--                        <div class="form-group row">-->
<!--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

<!--                            <div class="col-md-6">-->
<!--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->

<!--                                @error('email')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="form-group row">-->
<!--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

<!--                            <div class="col-md-6">-->
<!--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

<!--                                @error('password')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="form-group row">-->
<!--                            <div class="col-md-6 offset-md-4">-->
<!--                                <div class="form-check">-->
<!--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

<!--                                    <label class="form-check-label" for="remember">-->
<!--                                        {{ __('Remember Me') }}-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="form-group row mb-0">-->
<!--                            <div class="col-md-8 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Login') }}-->
<!--                                </button>-->

<!--                                @if (Route::has('password.request'))-->
<!--                                    <a class="btn btn-link" href="{{ route('password.request') }}">-->
<!--                                        {{ __('Forgot Your Password?') }}-->
<!--                                    </a>-->
<!--                                @endif-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--@endsection-->
