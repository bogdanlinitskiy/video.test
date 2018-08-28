@extends('admin.template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Create new category</button>
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
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['alias']}}</td>
                <td>{{$category['name']}}</td>
                <td>{{$category['image']}}</td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/delete">
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
            <h1>Categories</h1>
        </div>
    </div>

@endsection