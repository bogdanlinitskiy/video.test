@extends('template')

@section('content')
    <div class="col-md-12" align="center">
        <video width="720" height="500" controls="controls" poster="/images/videos/{{$video['image']}}">
            <source src="/videos/{{$video['video']}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' id="player">
        </video>
    </div>

    <div class ="col-md-12">
        <ul class="list-group">
            @foreach($video->comments as $comment)
                @foreach($users as $user)
                @if($user['id'] == $comment['user_id'])
                <li class="list-group-item">{{$user['name'] ." : " . $comment->text}}</li>
                @endif
                    @endforeach
            @endforeach
        </ul>
        @include('embed.errors')
        @if(Auth::check())
        <form action="/videos/{{$video['alias']}}/comments" class="form-horizontal" method="POST">
            {{csrf_field()}}
            <label for="comment">Write your comment:</label><br>
            <textarea name="text" id="comment" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        @endif
    </div>

    <script>
        var marker = true;
        function count() {
            <?php $video->addView($video['id'])?>
            marker = false;
        }
        var v = document.getElementsByTagName("video")[0];
        v.addEventListener("play", function() {
            if(marker){
                count();
            }
        }, true);
    </script>
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center" style="background-color:transparent !important;">
        <div class="container">
            <h1>{{$video['name']}}</h1>
        </div>
    </div>

@endsection

