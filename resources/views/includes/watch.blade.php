<div class="container">
    <div id="watch" class="text-center">
        <h1 class="title">Latest Sermon Video</h1>
<?php $videos=$arr['video']; ?>
        @foreach($videos as $video)
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/{{$video->code}}?feature=oembed&showinfo=0&rel=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
<h3 class="text-bold">{{$video->title}}</h3>
            @endforeach
    </div>
</div>