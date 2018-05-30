@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($user, ['action' => ['UserController@update', $user]
            ,'method' => 'put']) !!}

        <div class="form-group">
            {!!Form::label('name', 'name')!!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('email', 'email')!!}
            {!! Form::text('email',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('password', 'password')!!}
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

        {!! Form::submit('Save user', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}


        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>
    </div>

@endsection