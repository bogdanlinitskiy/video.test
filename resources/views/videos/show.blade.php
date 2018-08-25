@extends('template')


@section('content')
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="/images/videos/{{$video['image']}}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"  data-holder-rendered="true">
            <div class="card-body">
                <p class="card-text">Name: {{$video['name']}}</p>
                <p class="card-text">Alias: {{$video['alias']}}</p>
                <p class="card-text">Description: {{$video['description']}}</p>
                <p class="card-text">Date: {{$video['date']}}</p>
                <p class="card-text">Views: {{$video['views']}}</p>
                <p class="card-text">Likes: {{$video['likes']}}</p>
                <p class="card-text">Dislikes: {{$video['dislikes']}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/videos/{{$video['alias']}}/edit">Edit</a></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/videos/{{$video['alias']}}/delete">Delete</a></button>
                    </div>
                    {{--<small class="text-muted">9 mins</small>--}}
                </div>
            </div>
        </div>
    </div>
    <video width="720" height="500" controls="controls" poster="video/duel.jpg">
        <source src="/videos/{{$video['video']}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>{{$video['name']}}</h1>
        </div>
    </div>

@endsection

