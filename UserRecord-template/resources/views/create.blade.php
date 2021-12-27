@extends('layout')

@section('content')
<div class="container">
    <div class="register-container">
        <div class="reg-sec">
            <h1>Create Page</h1>
            <form action="createsubmit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
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