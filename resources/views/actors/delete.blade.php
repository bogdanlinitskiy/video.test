@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/admin/actors/{{$actor['alias']}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <input type="hidden" name="_method" value="DELETE">

            <div class="form-group">
                <h3> Are you sure you want to delete {{$actor['first_name']}} {{$actor['last_name']}} ?</h3>
            </div>

            <div class="form-group">
                <button class="btn btn-danger">Delete</button>
                <p><a class="btn btn-primary" href="/admin/actors" role="button">Back</a></p>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center">Deleting category {{$actor['first_name']}} {{$actor['last_name']}} </h1>
        </div>
    </div>
@endsection