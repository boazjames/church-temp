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
<?php echo $__env->make('includes.sermons-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- header -->
<div class="container-fluid">
    <div class="header">
        <h1 class="inline">Sermons</h1>
        <form method="post" class="float-right" action="search">
            <?php echo e(csrf_field()); ?>

            <input type="text" id="search-input" class="form-control" minlength="3" name="title" placeholder="search sermons" required>
            <button type="submit" class="btn" id="search-btn"><i class="fa fa-search blue-color"></i></button>
        </form>
    </div>
</div>
<!-- end of header -->

<!-- main -->
<div id="main-sermon">
<?php if($sermon): ?>
    <!-- sermon -->
    <div class="container bg-white margin-bottom-20p padding-bottom-20p">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <img class="ser-img" src="storage/sermon-images/<?php echo e($sermon->image); ?>" alt="loading">
                <div class="date bg-blue position-absolute white-color"><i class="fa fa-clock-o"></i> <?php echo e(($sermon->created_at)->toFormattedDateString()); ?></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="text-center">
                    <img src="storage/user-images/<?php echo e($sermon->user->image); ?>" class="poster-img">
                </div>
                <div class="text-center padding-top-10p"><i class="fa fa-user blue-color"></i> <?php echo e($sermon->user->salutation); ?> <?php echo e($sermon->user->username); ?></div>
                <div class="poster-description text-center">
                    <?php echo e($sermon->user->description); ?>


                    <br>
                    <div class="inline poster-social move-left" ><a href="#"><i class="fa fa-facebook-square"></i></a></div>
                    <div class="inline poster-social move-right"><a href="#"><i class="fa fa-twitter-square"></i></a></div>

                </div>

            </div>
            <div class="col-md-9">
                <h3 class="text-bold"><?php echo e($sermon->title); ?></h3>
                <p class="all-sermon-paragraph"><?php echo $sermon->body; ?></p>

            </div>
        </div>
    </div>
    <!-- end of sermon -->
    <?php else: ?>

        <h2 class="text-center">There is no such sermon</h2>

    <?php endif; ?>
</div>
<!-- end of main -->



<!-- footer -->
<?php echo $__env->make('includes.sermons-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</body>
</html>