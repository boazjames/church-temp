<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin</title>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="adm/css/animate.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="adm/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="adm/css/style.css">



</head>
<body>
<div class="container-fluid">
    <div class="form-wrapper">
        <div class="panel-heading bg-blue-dark text-bold white-color" id="form-top">Login</div>

        <form class="login-form"  method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label>Email:</label>
                <input type="email"  name="email" class="form-control" placeholder="email or username" required autofocus>

                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                <?php endif; ?>

            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="password" required>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary bg-blue-dark">Login</button>
            </div>
            <div class="form-group">
                <a href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
            </div>
        </form>
    </div>

</div>
<!--jquery javascript library -->
<script src="adm/js/jquery.min.js"></script>

<script>
    $(document).ready(function () {

    })
</script>

<!-- bootstrap script -->
<script src="adm/js/bootstrap.min.js"></script>

<!-- main script -->
<script src="adm/js/main.js"></script>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

</body>
</html>
