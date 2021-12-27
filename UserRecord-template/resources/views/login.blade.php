@extends('layout')

@section('content')
<div class="container">
    <div class="loginForm">
        <div class="login-sec">
            <h1>Login Page</h1>
            <form action="loginsubmit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection