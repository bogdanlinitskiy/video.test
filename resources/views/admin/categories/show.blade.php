@extends('admin.template')

@section('content')
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/categories/{{$category['image']}}" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"  data-holder-rendered="true">
                <div class="card-body">
                    <p class="card-text">Name: {{$category['name']}}</p>
                    <p class="card-text">Alias: {{$category['alias']}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/categories/{{$category['alias']}}/edit">Edit</a></button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/categories/{{$category['alias']}}/delete">Delete</a></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" align="center">
            <div class="container">
                <h1>Videos of this category</h1>
            </div>
        </div>
        @foreach($category->videos as $video)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="/admin/videos/{{$video['alias']}}">
                        <img class="card-img-top" src="/images/videos/{{$video['image']}}" height="200px" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{$video['name']}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/admin/videos/{{$video['alias']}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </a>
                                <a href="/admin/videos/{{$video['alias']}}/edit">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </a>
                                <a href="/admin/videos/{{$video['alias']}}/delete">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
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
            <h1>{{$category['name']}}</h1>
        </div>
    </div>
@endsection