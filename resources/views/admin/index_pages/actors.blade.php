@extends('template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/actors/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Create new actor</button>
        </a>
        <hr>
    </div>

    @foreach($actors as $actor)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/admin/actors/{{$actor['alias']}}">
                    <img class="card-img-top" src="/images/actors/{{$actor['image']}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">{{$actor['first_name']}} "{{$actor['nickname']}}" {{$actor['last_name']}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/actors/{{$actor['alias']}}">Show</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/actors/{{$actor['alias']}}/edit">Edit</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/actors/{{$actor['alias']}}/delete">Delete</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Actors</h1>
        </div>
    </div>

@endsection