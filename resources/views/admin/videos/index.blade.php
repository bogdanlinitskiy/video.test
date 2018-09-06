@extends('admin.template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/videos/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Add new video</button>
        </a>
        <hr>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Alias</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Video</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <th scope="row">{{$video['id']}}</th>
                <td>{{$video['alias']}}</td>
                <td>{{$video['name']}}</td>
                <td>{{$video['image']}}</td>
                <td>{{$video['video']}}</td>
                <td>
                    <a href="/admin/videos/{{$video['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/videos/{{$video['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/videos/{{$video['alias']}}/delete">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>Videos</h1>
        </div>
    </div>

@endsection