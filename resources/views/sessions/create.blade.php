@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Sign in</h1>

        <form action="/login" method="post">
            {{ csrf_field() }}

            <input type="email" style="display:none;"/>
            <input type="password" style="display:none;"/>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="email">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
            @include('layouts.errors')
        </form>

    </div>
@endsection