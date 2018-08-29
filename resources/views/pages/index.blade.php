@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{$title}}</h1>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores ut repellendus cupiditate iure sit quidem sint id, praesentium ad excepturi alias quasi dicta perspiciatis possimus dolorum, recusandae illo voluptas quas.</p>
            <p><a href="/login" role="button" class="btn btn-primary btn-lg">Login</a><a href="/register" role="button" class="btn btn-success btn-lg">Register</a></p>
        </div>
    </div>

@endsection