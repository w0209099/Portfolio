@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Users</h2>

        <table class = "table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>delete</th>
                <th>created by</th>
                <th>created at</th>
                <th>updated by</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <a href="{{ action('UserController@edit', ['id' => $user->id]) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open(['action' => ['UserController@destroy', $user], 'method' => 'delete']) }}
                        <button type="submit" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                        {{ Form::close() }}
                    </td>
                    <td>{{$user->Created_by}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->Modifyed_by}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ action('UserController@create') }}">
            Create new User
        </a>

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>
@endsection