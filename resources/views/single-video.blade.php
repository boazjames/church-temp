<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$video->title}}</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/css/font-awesome.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/css/bootstrap.min.css">

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/css/animate.css">

    <!-- countdown css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/css/countdown.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/css/style.css">

</head>
<body>

<!-- navigation -->
@include('includes.sermons-nav')

<!-- main -->
<div class="container">
    <div id="watch" class="text-center single-video-container">
        <iframe width="1280" height="720"
                src="https://www.youtube.com/embed/{{$video->code}}?feature=oembed&showinfo=0&rel=0" frameborder="0"
                allow="encrypted-media" allowfullscreen></iframe>
        <h3 class="text-bold">{{$video->title}}</h3>
    </div>
</div>
<!-- end of main -->

<!-- footer -->
@include('includes.sermons-footer')


</body>
</html>