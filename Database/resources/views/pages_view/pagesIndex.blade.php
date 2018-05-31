@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Pages</h2>

        <table class = "table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>alias</th>
                <th>Description</th>
                <th>Update</th>
                <th>delete</th>
                <th>created by</th>
                <th>created at</th>
                <th>updated by</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->Pages_name}}</td>
                    <td>{{$page->Pages_alias}}</td>
                    <td>{{$page->Pages_descript}}</td>
                    <td>
                        <a href="{{ action('PagesController@edit', ['id' => $page->id]) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open(['action' => ['PagesController@destroy', $page], 'method' => 'delete']) }}
                        <button type="submit" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                        {{ Form::close() }}
                    </td>
                    <td>{{$page->Created_by}}</td>
                    <td>{{$page->created_at}}</td>
                    <td>{{$page->Modifyed_by}}</td>
                    <td>{{$page->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ action('PagesController@create') }}">
            Create new Page
        </a>

        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>

    </div>
@endsection