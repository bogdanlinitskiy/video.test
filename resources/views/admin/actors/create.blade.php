@extends('admin.template')

@section('content')
    <div class="col-md-12">
        <form action="/admin/actors" method="post" class="form-horizontal" enctype="multipart/form-data">
            @include('embed.errors')

            {{csrf_field()}}

            <div class="form-group">
                <label for="nickname">Nickname: </label>
                <input type ="text" class="form-control" id="nickname" name="nickname">
            </div>

            <div class="form-group">
                <label for="first_name">First name: </label>
                <input type ="text" class="form-control" id="first_name" name="first_name">
            </div>

            <div class="form-group">
                <label for="last_name">Last name: </label>
                <input type ="text" class="form-control" id="last_name" name="last_name">
            </div>

            <div class="form-group">
                <label for="birth_date">Birth date:(YYYY-MM-DD) </label>
                <input type ="text" class="form-control" id="birth_date" name="birth_date">
            </div>

            <div class="form-group">
                <label for="height">Height: </label>
                <input type ="text" class="form-control" id="height" name="height">
            </div>

            <div class="form-group">
                <label for="image">Image: </label>
                <input type ="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
                <button class="btn btn-default">Save</button>
                <p><a class="btn btn-primary" href="/admin" role="button">Back to the home page</a></p>
            </div>

        </form>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Create new video</h1>
        </div>
    </div>

@endsection