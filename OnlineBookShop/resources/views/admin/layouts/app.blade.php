<!doctype html>
<html class="no-js" lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/metisMenu.css">
    <!-- others css -->
    <link rel="stylesheet" href="/css/typography.css">
    <link rel="stylesheet" href="/css/default-css.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

    @include('admin.partials.navbar')
    
    @yield('content')


    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="/js/plugins.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>