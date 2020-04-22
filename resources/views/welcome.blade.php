@extends('layouts.app')

@section('title', 'laravel-lab1')

@section('content')
<div class="title m-b-md">
    Entries Collector
</div>
<h2>Login to existing account</h2>
<form method="post" class="form-login">
    @csrf
    <div class="auth-fields">
        <div>
            <p>Username: </p>
            <input type="text" name="username" required>
        </div>
        <div>
            <p>Password: </p>
            <input type="password" name="password" minlength="6" required>
        
        </div>
    </div>  
    <div class="submit-btns">
        <input type="submit" name="submit" value="Login">
        <input type="submit" name="submit" value="Register">
    </div>
    @if(isset($login_failed) || isset($registration_failed))
    <div class="error_message">
        {{ $login_failed??$registration_failed }}
    </div>
    @endif
</form>
@include('layouts.scoreboard')
@endsection
