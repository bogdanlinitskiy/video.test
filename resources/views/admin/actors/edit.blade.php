@extends('admin.template')

@section('content')

    <div class="col-md-12">

        <form action="/admin/actors/{{$actor['alias']}}" method="post" class="form-horizontal" enctype="multipart/form-data">

            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="nickname">Nickname: </label>
                <input type ="text" class="form-control" id="nickname" name="nickname" value="{{$actor['nickname']}}">
            </div>

            <div class="form-group">
                <label for="first_name">First name: </label>
                <input type ="text" class="form-control" id="first_name" name="first_name" value="{{$actor['first_name']}}">
            </div>

            <div class="form-group">
                <label for="last_name">Last name: </label>
                <input type ="text" class="form-control" id="last_name" name="last_name" value="{{$actor['last_name']}}">
            </div>

            <div class="form-group">
                <label for="birth_date">Birth date:(YYYY-MM-DD) </label>
                <input type ="text" class="form-control" id="birth_date" name="birth_date" value="{{$actor['birth_date']}}">
            </div>

            <div class="form-group">
                <label for="height">Height: </label>
                <input type ="text" class="form-control" id="height" name="height" value="{{$actor['height']}}">
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
            <h1>Editing "{{$actor['first_name']}} {{$actor['last_name']}}"</h1>
        </div>
    </div>

@endsection