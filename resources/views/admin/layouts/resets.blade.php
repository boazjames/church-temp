<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/adm/css/animate.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/adm/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/church/public/adm/css/style.css">



</head>
<body>
<div class="container-fluid">
    <div class="form-wrapper">
       @yield('content')

    </div>

</div>

<!--jquery javascript library -->
<script src="http://localhost/church/public/adm/js/jquery.min.js"></script>

<!-- bootstrap script -->
<script src="http://localhost/church/public/adm/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('#alert').fadeOut(2000);
        },3000);
    });
</script>

</body>
</html>
