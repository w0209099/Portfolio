@extends('layouts.app')

@section('content')
    <div class="container">

        {!! Form::open(['action' => 'TemplateController@store']) !!}

        <div class="form-group">
            {!!Form::label('Template_name', 'Template Name')!!}
            {!! Form::text('Template_name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Template_descript', 'Template Descript')!!}
            {!! Form::text('Template_descript',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Template_content', 'Template Content')!!}
            {!! Form::textarea('Template_content',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!!Form::label('Template_active', 'Template active')!!}
            {!! Form::text('Template_active',null, ['class' => 'form-control']) !!}
        </div>

            {!! Form::submit('Create Template', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>

@endsection
