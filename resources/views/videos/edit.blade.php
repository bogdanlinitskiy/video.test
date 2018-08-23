@extends('template')

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
                <input type ="file" class="form-control" id="image" name="image[]" multiple>
            </div>

            <div class="form-group">
                <label for="video">Video: </label>
                <input type ="file" class="form-control" id="video" name="video[]">
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <input type ="text" class="form-control" id="description" name="description" value="{{$video['description']}}">
            </div>

            <div class="form-group">
                <button class="btn btn-default">Update</button>
            </div>

        </form>
    </div>

@endsection
