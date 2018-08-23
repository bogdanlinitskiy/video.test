@extends('template')

@section('content')

    @foreach($videos as $video)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/admin/videos/{{$video['alias']}}">
                    <img class="card-img-top" src="/images/{{$video->image}}" height="200px" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/admin/videos/{{$video['alias']}}">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </a>
                            <a href="/admin/videos/{{$video['alias']}}/edit">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </a>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection