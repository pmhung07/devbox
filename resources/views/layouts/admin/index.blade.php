
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Devbox Dashboard :: Web Developer, Full Stack Developer</title>
    <base href="{{asset('')}}">

    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">

    <link href="assets/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="assets/admin/js/jquery-2.1.1.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

</head>

<body>
    <div id="wrapper">
        @include('layouts.admin.sidebar')
        
        <div id="page-wrapper" class="gray-bg" style="min-height: 118px;">

            @include('layouts.admin.header')

            @yield('breadcrumbs')

            <div class="wrapper wrapper-content">
            @yield('content')
            </div>


            @include('layouts.admin.footer')

        </div>
    </div>

    @yield('styles')
    @yield('script')

</body>
</html>
