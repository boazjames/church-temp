<div class="container">
    <div id="watch" class="text-center">
        <h1 class="title">Latest Sermon Video</h1>
<?php $videos=$arr['video']; ?>
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?php echo e($video->code); ?>?feature=oembed&showinfo=0&rel=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
<h3 class="text-bold"><?php echo e($video->title); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>