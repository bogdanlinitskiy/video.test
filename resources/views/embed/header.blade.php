<link rel="stylesheet" href="/css/login_drop.css">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/new">New videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/popular">Popular</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="/admin/videos">Videos</a>--}}
            {{--</li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach(\App\Category::all() as $category)
                    <a class="dropdown-item" href='{{url("/categories/$category[alias]")}}'>{{$category['name']}}</a>
                    @endforeach
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="/actors">Actors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/search">Search</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            @if(Auth::check())
                <li class="nav-item">
                    <div class="dropdown ">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b>{{Auth::user()->name}}</b><span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/favorite">Favorite videos</a>
                            <a class="dropdown-item" href="/likes">Likes</a>
                            <hr>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" ><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu dropdown-menu-right">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="/login" accept-charset="UTF-8" id="login-nav">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email </label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password </label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="">Forgot password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login </button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> stay online
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    First time on this site ? <a href="/registration"><b>Registration</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
