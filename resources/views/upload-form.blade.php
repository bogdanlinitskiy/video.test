<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
<form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="file" multiple name="file[]">
    <button type="submit">Загрузить</button>
</form>
<div>
    <video id="myvideo" width="480" height="270" poster="poster.gif" >
        <source src="trailer_480p.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
        <source src="trailer_480p.webm" type='video/webm; codecs="vorbis,vp8"'/>
    </video>
</div>
<div id="controls">
    <span id="playpause" class="paused" >Play</span>
</div>
{{--<img src="../../storage/images/1534553617_Drfne_iXJxI1.jpg">--}}
<video src="/videos/1534553698_20131212_142728.mp4" width="480" height="270" poster="poster.gif" controls></video>
</body>
</html>