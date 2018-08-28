@extends('admin.template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <h1>Last added categories</h1>
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Create new category</button>
        </a>
        <hr>
    </div>
    @foreach($last_added['categories'] as $category)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/images/categories/{{$category['image']}}" height="200px" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-text">{{ $category['name'] }}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/categories/{{ $category['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/categories/{{ $category['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/categories/{{ $category['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="div-create col-md-12 text-center">
        <h1>Last added videos</h1>
        <a href="/admin/videos/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Add video</button>
        </a>
        <hr>
    </div>
    @foreach($last_added['videos'] as $video)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/images/videos/{{$video['image']}}" alt="Card image cap" height="250px">
                <div class="card-body">
                    <h2 class="card-text">{{ $video['name'] }}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/videos/{{ $video['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/videos/{{ $video['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/videos/{{ $video['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="div-create col-md-12 text-center">
        <h1>Last added actors</h1>
        <a href="/admin/actors/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Add actor</button>
        </a>
        <hr>
    </div>
    @foreach($last_added['actors'] as $actor)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/images/actors/{{$actor['image']}}" alt="Card image cap" height="250px">
                <div class="card-body">
                    <h2 class="card-text">{{$actor['first_name']}} {{$actor['last_name']}}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/actors/{{ $actor['alias'] }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="/admin/actors/{{ $actor['alias'] }}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            <a href="/admin/actors/{{ $actor['alias'] }}/delete"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4" align="center">Admin panel</h1>
        </div>
    </div>
@endsection