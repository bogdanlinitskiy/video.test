@extends('template')


@section('carousel')

    <link rel="stylesheet" href="/css/carousel.css">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="/images/videos/{{$popular[0]['image']}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>{{$popular[0]['name']}}</h1>
                        <p>{{$popular[0]['description']}}</p>
                        <p><a class="btn btn-lg btn-primary" href="/videos/{{$popular[0]['alias']}}" role="button">Watch</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="/images/videos/{{$popular[1]['image']}}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{$popular[1]['name']}}</h1>
                        <p>{{$popular[1]['description']}}</p>
                        <p><a class="btn btn-lg btn-primary" href="/videos/{{$popular[1]['alias']}}" role="button">Watch</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="/images/videos/{{$popular[2]['image']}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>{{$popular[2]['name']}}</h1>
                        <p>{{$popular[2]['description']}}</p>
                        <p><a class="btn btn-lg btn-primary" href="/videos/{{$popular[2]['alias']}}" role="button">Watch</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')
    @foreach($videos as $video)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/videos/{{$video['alias']}}">
                    <img class="card-img-top" src="/images/videos/{{$video['image']}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">{{$video['name']}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/videos/{{$video['alias']}}">
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
