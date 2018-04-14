<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Login</title>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="adm/css/animate.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="adm/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="adm/css/style.css">



</head>
<body>
<div class="container-fluid">
    <div class="form-wrapper">
        <div class="panel-heading bg-blue-dark text-bold white-color" id="form-top">Login</div>

        <form class="login-form"  method="POST" action="login">
            @csrf

            <div class="form-group">
                <label>Email:</label>
                <input type="email"  name="email" class="form-control" placeholder="email or username" required autofocus>

            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>

            </div>


            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary bg-blue-dark">Login</button>
            </div>
            <div class="form-group">
                <a href="">Forgot Password?</a>
            </div>

            @include('layouts.errors');

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

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#alert').fadeOut(2000);
        },3000);
    });
</script>

</body>
</html>
