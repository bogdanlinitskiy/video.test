@extends('template')


@section('content')
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm badge-dark">
            <img class="card-img-top" src="/images/actors/{{$actor['image']}}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"  data-holder-rendered="true">
            <div class="card-body">
                <p class="card-text">Nickname: {{$actor['nickname']}}</p>
                <p class="card-text">First name: {{$actor['first_name']}}</p>
                <p class="card-text">Last name: {{$actor['last_name']}}</p>
                <p class="card-text">Birth date: {{$actor['birth_date']}} (Age {{$age}})</p>
                <p class="card-text">Height: {{$actor['height']}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    {{--<small class="text-muted">9 mins</small>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center" style="background-color:transparent !important;">
        <div class="container">
            <h1>{{$actor['first_name']}} {{$actor['last_name']}}</h1>
        </div>
    </div>

@endsection