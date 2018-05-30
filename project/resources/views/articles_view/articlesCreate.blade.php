@extends('layouts.app')

@section('content')
    <div class="container">

        {!! Form::open(['action' => 'ArticlesController@store']) !!}

        <div class="form-group">
            {!!Form::label('Articles_name', 'Articles name')!!}
            {!! Form::text('Articles_name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_descript', 'Articles descript')!!}
            {!! Form::text('Articles_descript',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_content', 'Articles content')!!}
            {!! Form::text('Articles_content',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_title', 'Articles title')!!}
            {!! Form::text('Articles_title',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_page', 'Articles page')!!}
            {!! Form::select('Articles_page', $pages_select) !!}
            {{--{!! Form::text('Articles_page',null, ['class' => 'form-control']) !!}--}}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_html', 'Articles html')!!}
            {!! Form::textarea('Articles_html',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_CA_ID', 'Articles Content ID')!!}
            {!! Form::select('Articles_CA_ID', $contents_select) !!}
            {{--{!! Form::text('Articles_CA_ID',null, ['class' => 'form-control']) !!}--}}
        </div>
        <div class="form-group">
            {!!Form::label('Articles_All_pages', 'Articles All pages')!!}
            {!! Form::text('Articles_All_pages',null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Create Article', ['class' => 'btn btn-default']) !!}
        {!! Form::close() !!}

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>

@endsection