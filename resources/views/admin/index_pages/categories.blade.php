@extends('admin.template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Add video</button>
        </a>
        <hr>
    </div>
    @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="/images/categories/{{$category['image']}}" height="200px" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$category['name']}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/categories/{{$category['alias']}}">Show</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/categories/{{$category['alias']}}/edit">Edit</a>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="/admin/categories/{{$category['alias']}}/delete">Delete</a>
                            </button>
                        </div>
                        <small class="text-muted">created: {{  strftime("%d %b %Y",strtotime($category['created_at'])) }}</small>
                        <small class="text-muted">updated: {{  strftime("%d %b %Y",strtotime($category['updated_at'])) }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Categories</h1>
        </div>
    </div>

@endsection