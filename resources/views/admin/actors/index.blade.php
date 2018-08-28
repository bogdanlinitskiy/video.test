@extends('admin.template')

@section('content')
    <div class="div-create col-md-12 text-center">
        <a href="/admin/actors/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary"> Create new actor</button>
        </a>
        <hr>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">alias</th>
            <th scope="col">Nickname</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Birth date</th>
            <th scope="col">height</th>
            <th scope="col">Image</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
    @foreach($actors as $actor)
        <tr>
            <th scope="row">{{$actor['id']}}</th>
            <td>{{$actor['alias']}}</td>
            <td>{{$actor['nickname']}}</td>
            <td>{{$actor['first_name']}}</td>
            <td>{{$actor['last_name']}}</td>
            <td>{{$actor['birth_date']}}</td>
            <td>{{$actor['height']}}</td>
            <td>{{$actor['image']}}</td>
            <td>
                <a href="/admin/actors/{{$actor['alias']}}">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                </a>
            </td>
            <td>
                <a href="/admin/actors/{{$actor['alias']}}/edit">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </a>
            </td>
            <td>
                <a href="/admin/actors/{{$actor['alias']}}/delete">
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
            <h1>Actors</h1>
        </div>
    </div>

@endsection