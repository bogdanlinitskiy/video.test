@extends('template')

@section('jumbotron')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Login</h1>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-12">
    <form action="/login" method="post">

        {{csrf_field()}}

        @include('embed.errors')
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Enter</button>
        </div>
    </form>
</div>
@endsection