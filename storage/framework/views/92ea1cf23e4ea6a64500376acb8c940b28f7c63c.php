<div class="container">
    <div class="row">
        <div id="sermon">
            <h1 class="title text-center">Latest Sermon</h1>

            <?php $__currentLoopData = $sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- sermon -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="latest-sermon-item wow fadeInRight" data-wow-delay="0.6s">
                            <img class="img-responsive sermon-img" src="storage/sermon-images/<?php echo e($sermon->image); ?>" alt="loading">
                            <div class="inline padding-20p"><i class="fa fa-user blue-color"></i> <?php echo e($sermon->user->salutation); ?> <?php echo e($sermon->user->username); ?></div>
                            <div class="inline padding-20p"><i class="fa fa-clock-o blue-color"></i> <?php echo e(($sermon->created_at)->toFormattedDateString()); ?></div>
                            <h3 class="padding-20p"><?php echo e($sermon->title); ?></h3>
                            <p class="sermon-paragraph text-left"><?php echo e(str_limit($sermon->body, $limit = 500, $end = '...')); ?></p>

                            <a class="padding-20p" href="http://localhost/church/public/<?php echo e($sermon->id); ?>sermon">Read more</a>
                        </div>
                    </div>
                    <!-- end of sermon -->

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>