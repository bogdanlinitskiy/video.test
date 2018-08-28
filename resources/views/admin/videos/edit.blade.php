@extends('admin.template')

@section('content')

    <div class="col-md-12">

        <form action="/admin/videos/{{$video['alias']}}" method="post" class="form-horizontal" enctype="multipart/form-data">

            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="name" >Name: </label>
                <input type ="text" class="form-control" id="name" name="name" value="{{$video['name']}}">
            </div>

            <div class="form-group">
                <label for="alias" >Alias: </label>
                <input type ="text" class="form-control" id="alias" name="alias" value="{{$video['alias']}}">
            </div>

            <div class="form-group">
                <label for="image">Image: </label>
                <input type ="file" class="form-control" id="image" name="image[]">
            </div>

            <div class="form-group">
                <label for="video">Video: </label>
                <input type ="file" class="form-control" id="video" name="video[]">
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <input type ="text" class="form-control" id="description" name="description" value="{{$video['description']}}">
            </div>

            @foreach($categories as $category)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{$category['id']}}" name="{{$category['id']}}">
                    <label class="custom-control-label" for="{{$category['id']}}">{{$category['name']}}</label>
                </div>
            @endforeach

            <div class="form-group">
                <button class="btn btn-default">Update</button>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Editing "{{$video['name']}}"</h1>
        </div>
    </div>

@endsection