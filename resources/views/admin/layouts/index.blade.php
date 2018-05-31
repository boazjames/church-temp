<!-- church template -->
<!-- authored by Boaz James Otieno -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="../adm/css/style.css">

</head>
<body>

<!-- navigation -->
@include('admin.includes.navigation')
<!-- end of navigation -->

<div id="dynamic">

    @yield('content')

</div>

<!-- modals -->
@include('admin.includes.modals')

<!-- footer -->
@include('admin.includes.footer')

<!-- loading -->
<div id="preloader">
    <div class="ring">
        loading
        <span class="ring-span"></span>
    </div>
</div>

<!-- back to top -->
<button id="back-to-top" class="animated bounce infinite"><i class="fa fa-angle-double-up blue-color"></i></button>

<!--jquery javascript library -->
<script src="../js/jquery.min.js"></script>

<!-- bootstrap script -->
<script src="../js/bootstrap.min.js"></script>

<!-- wow script -->
<script src="../js/wow.min.js"></script>

<!-- wow init -->
<script src="../js/wow.init.js"></script>

<!-- timer -->
<script src="../adm/js/time.js"></script>

<!-- clock -->
<script src="../adm/js/clock.js"></script>

<!-- ckeditor -->
<script type="text/javascript" src="http://localhost/church/public/ckeditor/ckeditor.js"></script>

<!-- main script -->
<script src="../adm/js/main.js"></script>

<!-- ajax requests -->
<script src="../adm/js/ajax_requests.js"></script>

</body>
</html>