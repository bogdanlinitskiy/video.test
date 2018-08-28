@extends('admin.template')

@section('content')
    <div class="col-md-12">
        <form action="/admin/categories" method="post" class="form-horizontal" enctype="multipart/form-data">
            @include('embed.errors')

            {{csrf_field()}}

            <div class="form-group">
                <label for="name" >Name: </label>
                <input type ="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias">
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