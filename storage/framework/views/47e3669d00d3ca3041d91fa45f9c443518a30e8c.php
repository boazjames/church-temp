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

    <?php if(count($sermons)>0): ?>
<?php $__currentLoopData = $sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <!-- sermon -->
        <div class="container bg-white margin-bottom-20p padding-bottom-20p search-result" data-id="<?php echo e($sermon->id); ?>">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5">

                    <img class="ser-img-search" src="storage/sermon-images/<?php echo e($sermon->image); ?>" alt="loading">

                </div>
                <div class="col-lg-10 col-md-10 col-sm-7 col-xs-7">
                    <h4 class="text-bold margin-top-20p"><?php echo e($sermon->title); ?></h4>
                    <div class="text-left">
                        <a href="http://localhost/church/public/sermons/<?php echo e($sermon->id); ?>" class="white-color"><button class="btn btn-primary">View</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of sermon -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="text-center"><?php echo e($sermons->links()); ?></div>

        <?php else: ?>

    <div class="jumbotron"><h3 class="margin-left-30p">Sorry, there is no such sermon.</h3></div>
        <?php endif; ?>
</div>
<!-- end of main -->

<!-- footer -->
<?php echo $__env->make('includes.sermons-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</body>
</html>