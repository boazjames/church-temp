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
<!-- fixed navigation -->
@include('includes.fixed-navigation')

<!-- main image slider container -->
<div id="slider-main">

    <!-- previous button -->
<button id="prev"><i class="fa fa-angle-double-left"></i></button>

    <!-- image container -->
<div id="slider"></div>

    <!-- next button -->
    <button id="next"><i class="fa fa-angle-double-right"></i></button>

    <!-- small circles container -->
    <div id="circles"></div>

    <!-- scroll down -->
    <div class="text-center hidden-xs">
        <a href="#about"><button class="animated bounce infinite" id="down"><i class="fa fa-angle-double-down"></i></button></a>
    </div>

</div>
<!-- end of main image slider container -->

<!--home -->
<!--<div id="home" class="text-center">
    <div id="home-container">
        <h1>Welcome to Christian Church</h1>
        <h3>Let us praise the Lord Jesus son of God.</h3>
        <a href="#main"><button class="btn btn-primary hidden-xs" id="get-started">Get Started</button></a>
    </div>
</div>-->
<!-- end of home -->


<!-- about -->
@include('includes.about')

<!-- next service -->
@include('includes.next-service')

<!-- watch -->
@include('includes.watch')

<!-- latest sermon -->
@include('includes.latest-sermon')
<!-- contact -->
@include('includes.contact')

<!-- footer -->
@include('includes.footer')










<script>
    /*$('document').ready(function() {
        /!*var d = new Date();
        var current=(d.getTime())/1000;
        var str=((new Date(2018,2,25,9,0)).getTime())/1000;
        var en=str+86400*7;
        'use strict';

        $('.countdown').final_countdown({
            'start': str,
            'end': en,
            'now': current
        });*!/
    });*/
</script>
</body>
</html>
