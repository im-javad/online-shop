<!doctype html>
<html class="no-js" lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/themify-icons.css">
    <link rel="stylesheet" href="admin/css/metisMenu.css">
    <!-- others css -->
    <link rel="stylesheet" href="admin/css/typography.css">
    <link rel="stylesheet" href="admin/css/default-css.css">
    <link rel="stylesheet" href="admin/css/styles.css">
    <link rel="stylesheet" href="admin/css/responsive.css">
    <!-- modernizr css -->
    <script src="admin/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>
<body>

    @include('admin.partials.navbar')
    
    @yield('content')


    <!-- jquery latest version -->
    <script src="admin/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="admin/js/metisMenu.min.js"></script>
    <!-- others plugins -->
    <script src="admin/js/plugins.js"></script>
    <script src="admin/js/scripts.js"></script>
</body>
</html>