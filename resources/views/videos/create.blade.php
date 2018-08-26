@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/admin/videos" method="post" class="form-horizontal" enctype="multipart/form-data">
            {{--@include('embed.errors')--}}

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
                <input type ="file" class="form-control" id="image" name="image[]">
            </div>

            <div class="form-group">
                <label for="video">Video: </label>
                <input type ="file" class="form-control" id="video" name="video[]">
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <input type ="text" class="form-control" id="description" name="description">
            </div>

            <div class="div-create col-md-12 text-center">
                <h2>Categories</h2>
            </div>
            @foreach($categories as $category)
                <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{$category['id']}}" name="{{$category['id']}}" style="display:inline">
                    <label class="custom-control-label" for="{{$category['id']}}">{{$category['name']}}</label>
                </div>
                </div>
            @endforeach

            <div class="div-create col-md-12 text-center">
                <h2>Actors</h2>
            </div>
            @foreach($actors as $actor)
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="act_{{$actor['id']}}" name="act_{{$actor['id']}}" style="display:inline">
                        <label class="custom-control-label" for="act_{{$actor['id']}}">{{$actor['first name']}} {{$actor['last_name']}}</label>
                    </div>
                </div>
            @endforeach

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