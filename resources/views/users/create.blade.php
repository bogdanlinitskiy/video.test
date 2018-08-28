@extends('template')


@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center">Registration</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-md-12">
        <form action="/registration" method="post">

            {{csrf_field()}}

            @include('embed.errors')
            <div class="form-group">
                <label for="name">Login:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection