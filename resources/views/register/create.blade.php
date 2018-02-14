@extends('layout')

@section('content')
        <h1>Register</h1>
        <form method="POST" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="title" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" placeholder="pass" name="password">
            </div>
            <div class="form-group">
                <label for="pass">Password Confirm</label>
                <input type="password" class="form-control" id="pass" placeholder="pass" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @include('layouts.error')
    @endsection