@extends('template')

@section('content')

        @foreach($videos as $video)

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/videos/{{$video->alias}}">
                    <img class="card-img-top" src="/images/videos/{{$video->image}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">{{$video->name}}</p>
                    <p class="card-text">Views:{{$video->views}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/videos/{{$video->alias}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </a>
                        </div>
                        <small class="text-muted">{{$video->time_ago(($video['date']))}} ago</small>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    <div style="margin: 0 auto;">{{ $videos->links() }}</div>
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Popular videos</h1>
        </div>
    </div>

@endsection