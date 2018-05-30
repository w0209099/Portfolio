@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($content, ['action' => ['ContentController@update', $content]
            ,'method' => 'put']) !!}

        <div class="form-group">
            {!!Form::label('contents_name', 'contents name')!!}
            {!! Form::text('contents_name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('contents_alias', 'contents alias')!!}
            {!! Form::text('contents_alias',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('contents_order', 'contents order')!!}
            {!! Form::text('contents_order',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('contents_descript', 'contents_descript')!!}
            {!! Form::text('contents_descript',null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Save content', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}



    </div>

@endsection