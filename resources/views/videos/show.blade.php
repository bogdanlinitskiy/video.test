@extends('template')

@section('content')
    <ul class="list-group">
        <li class="list-group-item">Name: {{$video['name']}}</li>
        <li class="list-group-item">Alias: {{$video['alias']}}</li>
        <li class="list-group-item">Description: {{$video['description']}}</li>
        <li class="list-group-item">Views: {{$video['views']}}</li>
        <li class="list-group-item">Likes: {{$video['likes']}}</li>
        <li class="list-group-item">Dislikes: {{$video['dislikes']}}</li>
        <li class="list-group-item">Date: {{$video['date']}}</li>
        <img src="/images/{{$video['image']}}">
    </ul>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="/videos/{{$video['video']}}" allowfullscreen></iframe>
    </div>

@endsection

