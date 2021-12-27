@extends('layout')

@section('content')

<div class="container">
    <div class="userList-container">
        <div class="userList-sec">
            <h1>User List Page</h1>
            <div>
                <table class="table">
                    <thead class="thead-light" style="padding-left: 10px;">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id}}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection