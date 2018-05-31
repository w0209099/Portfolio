@extends('layouts.app')

@section('content')
    <div class="container">
<h2>Templates</h2>

<table class = "table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Active</th>
            <th>Content</th>
            <th>Update</th>
            <th>delete</th>
            <th>created by</th>
            <th>created at</th>
            <th>updated by</th>
            <th>updated at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($templates as $template)
            <tr>
                <td>{{$template->id}}</td>
                <td>{{$template->Template_name}}</td>
                <td>{{$template->Template_descript}}</td>
                <td>{{$template->Template_active}}</td>
                <td>{{$template->Template_content}}</td>
                <td>
                    <a href="{{ action('TemplateController@edit', ['id' => $template->id]) }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    {{ Form::open(['action' => ['TemplateController@destroy', $template], 'method' => 'delete']) }}
                        <button type="submit" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                    {{ Form::close() }}
                </td>
                <td>{{$template->Created_by}}</td>
                <td>{{$template->created_at}}</td>
                <td>{{$template->Modifyed_by}}</td>
                <td>{{$template->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

        <a href="{{ action('TemplateController@create') }}">
            Create new Template
        </a>

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>
</div>
@endsection