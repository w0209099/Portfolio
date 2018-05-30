@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($page, ['action' => ['PagesController@update', $page]
            ,'method' => 'put']) !!}

        <div class="form-group">
            {!!Form::label('Pages_name', 'Pages name')!!}
            {!! Form::text('Pages_name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Pages_alias', 'Pages alias')!!}
            {!! Form::text('Pages_alias',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Pages_descript', 'Pages descript')!!}
            {!! Form::text('Pages_descript',null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Save changes', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>

@endsection