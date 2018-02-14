@extends('layout')

@section('content')
        <h1>Sign In</h1>
            <form method="POST" action="/login">
                {!!csrf_field()!!}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="pass" name="password">
        </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
    @include('layouts.error')
    @endsection