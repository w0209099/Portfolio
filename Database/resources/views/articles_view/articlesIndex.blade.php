@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Articles</h2>

        <table class = "table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Articles name</th>
                <th>Articles descript</th>
                <th>Articles content</th>
                <th>Articles title</th>
                <th>Articles page</th>
                <th>Articles html</th>
                <th>Articles Content ID</th>
                <th>Articles All pages</th>
                <th>Update</th>
                <th>delete</th>
                <th>created by</th>
                <th>created at</th>
                <th>updated by</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->Articles_name}}</td>
                    <td>{{$article->Articles_descript}}</td>
                    <td>{{$article->Articles_content}}</td>
                    <td>{{$article->Articles_title}}</td>
                    <td>{{$article->Articles_page}}</td>
                    <td>{{$article->Articles_html}}</td>
                    <td>{{$article->Articles_CA_ID}}</td>
                    <td>{{$article->Articles_all_pages}}</td>
                    <td>
                        <a href="{{ action('ArticlesController@edit', ['id' => $article->id]) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open(['action' => ['ArticlesController@destroy', $article], 'method' => 'delete']) }}
                        <button type="submit" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                        {{ Form::close() }}
                    </td>
                    <td>{{$article->Created_by}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>{{$article->Modifyed_by}}</td>
                    <td>{{$article->updated_at}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ action('ArticlesController@create') }}">
            Create new article
        </a>
        <br>
        <a href="{{ URL::to('logout') }}">Logout</a>
    </div>
@endsection