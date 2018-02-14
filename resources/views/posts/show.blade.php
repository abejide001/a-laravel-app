@extends('layout')

@section('content')
        <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>

            @foreach($post->comments as $comment)
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                        </strong>:
                        {{$comment->body}}
                    </li>
                </ul>
                        @endforeach
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{csrf_field()}}
        <div class="form-group">
            <textarea class="form-control" placeholder="enter the text"  name="body"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        </form>

        @include('layouts.error')

    @endsection