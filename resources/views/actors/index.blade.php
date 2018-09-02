@extends('template')

@section('content')
    @foreach($actors as $actor)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm badge-dark">
                <a href="/actors/{{$actor['alias']}}">
                    <img class="card-img-top" src="/images/actors/{{$actor['image']}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">{{$actor['first_name']}} "{{$actor['nickname']}}" {{$actor['last_name']}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/actors/{{$actor['alias']}}">Show</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center" style="background-color:transparent !important;">
        <div class="container">
            <h1>Actors</h1>
        </div>
    </div>

@endsection