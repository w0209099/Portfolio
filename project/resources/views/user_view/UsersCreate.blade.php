@extends('layouts.app')

@section('content')
    <div class="container">

        {!! Form::open(['action' => 'UserController@store']) !!}

        <div class="form-group">
            {!!Form::label('name', 'user name')!!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('email', 'user email')!!}
            {!! Form::text('email',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('password', 'user password')!!}
            {!! Form::password('password',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!!Form::label('admin')!!}
            {!!Form::checkbox('isadmin', 'admin')!!}
            {!!Form::label('Editer')!!}
            {!! Form::checkbox('isediter', 'editer') !!}
            {!!Form::label('User')!!}
            {!! Form::checkbox('isuser', 'user') !!}
        </div>

        {!! Form::submit('Create user', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>

@endsection