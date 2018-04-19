<?php $__env->startComponent('mail::message'); ?>
    Welcome <?php echo e(ucfirst($user->salutation)); ?> <?php echo e(ucfirst($user->username)); ?>, you have been added as an admin in <?php echo e(config('app.name')); ?>. You can now log in by clicking the button below with the following credentials:

- **email:** <?php echo e($user->email); ?>

- **password:** <?php echo e($password); ?>


<?php $__env->startComponent('mail::button', ['url' => 'http://localhost/church/public/admin_church']); ?>
Log In
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
