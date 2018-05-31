@extends('layouts.app')

@section('content')
    <div class="container">

<p>ID: {{$template->id}}</p>
<p>Name: {{$template->Template_name}}</p>
<p>Description: {{$template->Template_descript}}</p>
<p>Active: {{$template->Template_active}}</p>
<p>Content: {{$template->Template_content}}</p>


    </div>

    <a href="{{ action('TemplateController@index')}}">Back to templates</a>

    <br>
    <a href="{{ URL::to('logout') }}">Logout</a>
@endsection