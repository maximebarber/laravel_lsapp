@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-outline-primary">Create Post</a>

                    <hr>

                    <h3>Your blog posts</h3>

                    @if(count($posts) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                {{-- Title --}}
                                <td scope="col">{{ $post->title }}</td>
                                {{-- Edit --}}
                                <td scope="col"><a href="/posts/{{ $post->id }}/edit"><i class="far fa-edit fa-2x"></i></i></a></td>
                                {{-- Delete --}}
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'delete']) !!}

                                        {{ Form::hidden('_method', 'DELETE') }}

                                        {{ Form::submit('Delete', ['class' => 'btn']) }}

                                    {!! Form::close() !!}
                                </td>
                                {{-- Delete end --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>You have no blog posts. Get started by cliking <a href="/posts/create">here</a></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
