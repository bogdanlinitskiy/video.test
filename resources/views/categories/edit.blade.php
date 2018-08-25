@extends('template')

@section('content')

    <div class="col-md-12">

        <form action="/admin/categories/{{$category['alias']}}" method="post" class="form-horizontal" enctype="multipart/form-data">

            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="name" >Name: </label>
                <input type ="text" class="form-control" id="name" name="name" value="{{$category['name']}}">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias" value="{{$category['alias']}}">
            </div>

            <div class="form-group">
                <label for="image">Image: </label>
                <input type ="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
                <button class="btn btn-default">Update</button>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Editing "{{$category['name']}}"</h1>
        </div>
    </div>

@endsection