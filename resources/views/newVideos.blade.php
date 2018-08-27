@extends('template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/videos/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Add video</button>
        </a>
        <hr>
    </div>


    @foreach($videos as $video)

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/admin/videos/{{$video->alias}}">
                    <img class="card-img-top" src="/images/videos/{{$video->image}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">{{$video->name}}</p>
                    <p class="card-text">Views:{{$video->views}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/videos/{{$video->alias}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </a>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Videos</h1>
        </div>
    </div>

@endsection