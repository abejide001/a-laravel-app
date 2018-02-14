@extends('layout')

@section('content')
    <h1>Create a Post</h1>
    <form method="POST" action="/posts/{{$post->user_id}}">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="$post->title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" placeholder="enter text" name="body" value="$post->body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @endsection