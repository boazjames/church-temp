<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church</title>

    <!-- image slider css -->
    <link rel="stylesheet" type="text/css" href="css/image-slider.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- countdown css -->
    <link rel="stylesheet" type="text/css" href="css/countdown.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- navigation -->
@include('includes.sermons-nav')

<!-- header -->
<div class="container-fluid">
    <div class="header">
        <h1 class="inline">Videos</h1>
        <form method="post" class="float-right" action="videos">
            {{csrf_field()}}
            <input type="text" id="search-input" class="form-control" minlength="3" name="title"
                   placeholder="search videos" required>
            <button type="submit" class="btn" id="search-btn"><i class="fa fa-search blue-color"></i></button>
        </form>
    </div>
</div>
<!-- end of header -->

<!-- main -->
<div class="container">
    @if(count($videos) > 0)
        <div class="row">
            @foreach($videos as $video)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="video-container">
                        <img src="https://img.youtube.com/vi/{{$video->code}}/mqdefault.jpg" alt="video"
                             class="video-img">
                        <h5 class="text-bold text-center">{{$video->title}}</h5>
                        <a href="http://localhost/church/public/videos/{{$video->id}}"><button class="btn btn-primary btn-watch text-bold">Watch video</button></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">{{$videos->links()}}</div>

    @else

        <div class="jumbotron"><h3 class="margin-left-30p">Sorry, there is no such video.</h3></div>
    @endif

</div>
<!-- end of main -->

<!-- footer -->
@include('includes.footer')


</body>
</html>