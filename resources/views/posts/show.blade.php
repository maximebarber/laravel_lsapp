@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-outline-primary">Go back</a><br><br>

    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>

    <hr>

    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>

    <hr>

    {{-- Edit and delete buttons (only visible if logged in --}}
    @if(!Auth::guest())
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right delete']) !!}

        {{ Form::hidden('_method', 'DELETE') }}

        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}

    {!! Form::close() !!}
    @endif

{{-- Does not work --}}
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>

@endsection

