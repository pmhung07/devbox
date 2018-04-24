@extends('layouts.admin.index')

@section('breadcrumbs')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Dashboard</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li class="active">
                <strong>Dashboard</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
@stop            

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">Today</span>
                    <h5>Visits</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">22 285,400</h1>
                    <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Monthly</span>
                    <h5>Comments</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">60 420,600</h1>
                    <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-warning pull-right">Annual</span>
                    <h5>Income</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">$ 120 430,800</h1>
                    <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i></div>
                    <small>New orders</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">

        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Bình luận mới nhất</h5>
                <span class="label label-primary">Today</span>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content no-padding">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                    </li>
                    <li class="list-group-item">
                        <p><a class="text-info" href="#">@Stock Man</a> Check this stock chart. This price is crazy! </p>
                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                    </li>
                    <li class="list-group-item">
                        <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown printer took a galley </p>
                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                    </li>
                    <li class="list-group-item ">
                        <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard chunk of Lorem Ipsum</p>
                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Bài viết mới nhất</h5>
                <span class="label label-primary">Today</span>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content inspinia-timeline">

                <div class="timeline-item">
                    <div class="row">
                        <div class="col-xs-3 date">
                            <i class="fa fa-briefcase"></i>
                            6:00 am
                            <br/>
                            <small class="text-navy">2 hour ago</small>
                        </div>
                        <div class="col-xs-7 content no-top-border">
                            <p class="m-b-xs"><strong>Meeting</strong></p>

                            <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="row">
                        <div class="col-xs-3 date">
                            <i class="fa fa-file-text"></i>
                            7:00 am
                            <br/>
                            <small class="text-navy">3 hour ago</small>
                        </div>
                        <div class="col-xs-7 content">
                            <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="row">
                        <div class="col-xs-3 date">
                            <i class="fa fa-coffee"></i>
                            8:00 am
                            <br/>
                        </div>
                        <div class="col-xs-7 content">
                            <p class="m-b-xs"><strong>Coffee Break</strong></p>
                            <p>
                                Go to shop and find some products.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="row">
                        <div class="col-xs-3 date">
                            <i class="fa fa-phone"></i>
                            11:00 am
                            <br/>
                            <small class="text-navy">21 hour ago</small>
                        </div>
                        <div class="col-xs-7 content">
                            <p class="m-b-xs"><strong>Phone with Jeronimo</strong></p>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy text ever since.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('script')

	<!-- Flot -->
    <script src="assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="assets/admin/js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/admin/js/inspinia.js"></script>
    <script src="assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="assets/admin/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="assets/admin/js/plugins/chartJs/Chart.min.js"></script>

    <script>
    	/*
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        });
        */
    </script>
@stop
