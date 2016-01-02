@extends('app')
@section('content')
<section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form role="form" method="POST" action="{{ url('/auth/login') }}>
        <p><type="email" name="email" value="{{ old('email') }}" placeholder="Username or Email"></p>
        <p><input type="password" name="password" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
@endsection
