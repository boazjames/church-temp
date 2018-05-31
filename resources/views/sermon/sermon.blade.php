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

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- navigation -->
@include('includes.sermons-nav')

<!-- header -->
<div class="container-fluid">
    <div class="header">
        <h1 class="inline">Sermons</h1>
        <form method="post" class="float-right" action="search">
            {{csrf_field()}}
            <input type="text" id="search-input" class="form-control" minlength="3" name="title" placeholder="search sermons" required>
            <button type="submit" class="btn" id="search-btn"><i class="fa fa-search blue-color"></i></button>
        </form>
    </div>
</div>
<!-- end of header -->

<!-- main -->
<div id="main-sermon">
@if($sermon)
    <!-- sermon -->
    <div class="container bg-white margin-bottom-20p padding-bottom-20p">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <img class="ser-img" src="storage/sermon-images/{{$sermon->image}}" alt="loading">
                <div class="date bg-blue position-absolute white-color"><i class="fa fa-clock-o"></i> {{($sermon->created_at)->toFormattedDateString()}}</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="text-center">
                    <img src="storage/user-images/{{$sermon->user->image}}" class="poster-img">
                </div>
                <div class="text-center padding-top-10p"><i class="fa fa-user blue-color"></i> {{$sermon->user->salutation}} {{$sermon->user->username}}</div>
                <div class="poster-description text-center">
                    {{$sermon->user->description}}

                    <br>
                    <div class="inline poster-social move-left" ><a href="#"><i class="fa fa-facebook-square"></i></a></div>
                    <div class="inline poster-social move-right"><a href="#"><i class="fa fa-twitter-square"></i></a></div>

                </div>

            </div>
            <div class="col-md-9">
                <h3 class="text-bold">{{$sermon->title}}</h3>
                <p class="all-sermon-paragraph">{!! $sermon->body !!}</p>

            </div>
        </div>
    </div>
    <!-- end of sermon -->
    @else

        <h2 class="text-center">There is no such sermon</h2>

    @endif
</div>
<!-- end of main -->



<!-- footer -->
@include('includes.sermons-footer')


</body>
</html>