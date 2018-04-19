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
<?php echo $__env->make('includes.fixed-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- main image slider container -->
<div id="slider-main">

    <!-- previous button -->
<button id="prev"><i class="fa fa-angle-double-left"></i></button>

    <!-- image container -->
<div id="slider"></div>

    <!-- load images -->
    <div class="load-images hidden"></div>

    <!-- next button -->
    <button id="next"><i class="fa fa-angle-double-right"></i></button>

    <!-- small circles container -->
    <div id="circles"></div>

    <!-- scroll down -->
    <div class="hidden-xs">
        <a href="#about"><button class="animated bounce infinite" id="down"><i class="fa fa-angle-double-down black-color"></i></button></a>
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

<div class="set-time hidden">
    <?php $times=$arr['times']; ?>
    <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div><?php echo e($time->time); ?></div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- about -->
<?php echo $__env->make('includes.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- next service -->
<?php echo $__env->make('includes.next-service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- watch -->
<?php echo $__env->make('includes.watch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- latest sermon -->
<?php echo $__env->make('includes.latest-sermon', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- contact -->
<?php echo $__env->make('includes.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- footer -->
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>










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
