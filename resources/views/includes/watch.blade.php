<div class="container">
    <div class="row">
    <div id="watch">
        <h1 class="title text-center">Latest Videos</h1>
        <?php $videos = $arr['video']; ?>
        @foreach($videos as $video)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="video-container wow fadeInLeft" data-wow-delay="0.6s">
                <img src="https://img.youtube.com/vi/{{$video->code}}/mqdefault.jpg" alt="video" class="video-img">
                <h5 class="text-bold text-center">{{$video->title}}</h5>
                <a href="http://localhost/church/public/videos/{{$video->id}}"><button class="btn btn-primary btn-watch text-bold">Watch video</button></a>
            </div>
            </div>
        @endforeach
    </div>
    </div>
</div>