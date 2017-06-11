<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Hotel/css/bootstrap.min.css" rel="stylesheet">

    <link href="/Hotel/css/HotelStyles.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="/Hotel/css/sb-admin.css" rel="stylesheet">

    <link href="/css/Style.css" rel="stylesheet"/>


    <!-- Morris Charts CSS -->
    <link href="/Hotel/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Hotel/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="margin-top: -10px;" class="navbar-brand" href="home"> <span style="float: left; margin-left: 10px; margin-top: 1%;"><img src="/Images/icon-bed.png"
                                                                                                                    style="width: 50px" height="50px"
                                                                                                                    alt=""/>

            JustIn Hotels</span></a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    {{--<li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>--}}
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-out"></span>Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li><a href=""
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-user"></span> Profile
                        </a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li >
                    <a href="{{url('/hotels/home')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>

                <li>
                    <a href="  "><i class="fa fa-fw fa-bookmark"></i> Bookings</a>
                </li>

                <li>
                    <a href="{{url('/hotels/feedback')}}"><i class="fa fa-fw fa-edit"></i> Feedback</a>
                </li>

                <li>
                    <a href="{{url('/hotels/gallery')}}"><i class="fa fa-fw fa-photo"></i> Gallery</a>
                </li>

                <li>
                    <a href=" "><i class="fa fa-fw fa-file"></i> Enquiries</a>
                </li>
                <li>
                    <a href="{{url('/hotels/contact')}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>


                {{-- <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="demo" class="collapse">
                         <li>
                             <a href="#">Dropdown Item</a>
                         </li>
                         <li>
                             <a href="#">Dropdown Item</a>
                         </li>
                     </ul>
                 </li>--}}

                <li>
                    <a href=" "><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
                </li>
                <li>
                    <a href=" "><i class="fa fa-fw fa-line-chart"></i> Charts</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!-- /#page-wrapper -->


    @yield('content')
</div>

<!-- /#wrapper -->




<!-- jQuery -->
<script src="/Hotel/js/jquery-2.2.3.min.js"></script>
<script src="/Hotel/js/jquery-ui.min.js"></script>

{{--<script src="/Hotel/js/bootstrap-datepicker.js"></script>--}}

<script src="/Hotel/js/jsFiddler.min.js"></script>
<script src="/Hotel/js/AutoTable.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/Hotel/js/bootstrap.min.js"></script>
<script src="/Hotel/js/HotelScripts.js"></script>

{{--Report scripts--}}
<script type="text/javascript" src="/Hotel/Libraries/tableExport.js"></script>
<script type="text/javascript" src="/Hotel/Libraries/jquery.base64.js"></script>
<script type="text/javascript" src="/Hotel/Libraries/html2canvas.js"></script>
<script type="text/javascript" src="/Hotel/Libraries/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="/Hotel/Libraries/jspdf/jspdf.js"></script>
<script type="text/javascript" src="/Hotel/Libraries/jspdf/libs/base64.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/Hotel/js/plugins/morris/raphael.min.js"></script>
<script src="/Hotel/js/plugins/morris/morris.min.js"></script>
<script src="/Hotel/js/plugins/morris/morris-data.js"></script>
<script src="/js/scripts.js"></script>

<link href="/Hotel/css/jquery-ui.css" rel="stylesheet">

</body>

</html>
