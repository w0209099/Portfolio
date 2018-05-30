@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All contents</h2>

        <table class = "table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Content name</th>
                <th>Content descript</th>
                <th>Content alias</th>
                <th>Content order</th>
                <th>Update</th>
                <th>delete</th>
                <th>created by</th>
                <th>created at</th>
                <th>updated by</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contents as $content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->contents_name}}</td>
                    <td>{{$content->contents_descript}}</td>
                    <td>{{$content->contents_alias}}</td>
                    <td>{{$content->contents_order}}</td>
                    <td>
                        <a href="{{ action('ContentController@edit', ['id' => $content->id]) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open(['action' => ['ContentController@destroy', $content], 'method' => 'delete']) }}
                        <button type="submit" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                        {{ Form::close() }}
                    </td>
                    <td>{{$content->Created_by}}</td>
                    <td>{{$content->created_at}}</td>
                    <td>{{$content->Modifyed_by}}</td>
                    <td>{{$content->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ action('ContentController@create') }}">
            Create new content
        </a>

    </div>
@endsection