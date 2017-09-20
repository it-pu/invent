<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/template/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/template/css/animate.min.css'); ?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('assets/template/css/paper-dashboard.css'); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->


    <!--  Fonts and icons     -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/template/css/themify-icons.css'); ?>" rel="stylesheet">


        <!--   Core JS Files   -->
        <script src="<?php echo base_url('assets/template/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/template/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    	<!--  Checkbox, Radio & Switch Plugins -->
    	<script src="<?php echo base_url('assets/template/js/bootstrap-checkbox-radio.js'); ?>"></script>

    	<!--  Charts Plugin -->
    	<script src="<?php echo base_url('assets/template/js/chartist.min.js'); ?>"></script>

        <!--  Notifications Plugin    -->
        <script src="<?php echo base_url('assets/template/js/bootstrap-notify.js'); ?>"></script>


        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    	<!-- <script src="<?php //echo base_url('assets/bootstrap/js/paper-dashboard.js') ?>"></script> -->

    	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    	<script src="<?php echo base_url('assets/template/js/demo.js') ?>"></script>

</head>


<style media="screen">
	.sidebar .logo, .off-canvas-sidebar .logo {
		padding: 0px;
		padding-top: 10px;
		padding-bottom: 6px;
	}
</style>

<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    <img src="<?php echo base_url('assets/logo.png'); ?>" style="width:180px;height:48px;" alt="Podomoro University">
                </a>
            </div>

            <ul class="nav">
                <li class="<?php if($this->uri->segment(1)=='dashboard'){echo 'active';} ?>">
                    <a href="<?php echo base_url('dashboard'); ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=='wifi'){echo 'active';} ?>">
                    <a href="<?php echo base_url('wifi'); ?>">
                        <i class="ti-rss-alt"></i>
                        <p>Registrasi Wifi</p>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=='finance'){echo 'active';} ?>">
                    <a href="<?php echo base_url('finance'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Finance</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-archive"></i>
                        <p>Assets</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-server"></i>
                        <p>Internal</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul> -->
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
										<a class="navbar-brand" href="<?php echo base_url(''.$this->uri->segment(1)); ?>"><?php echo strtoupper($this->uri->segment(1)); ?></a>


                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<?php echo $content; ?>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <!-- <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                IT Team
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">IT Team - Podomoro University</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>


</html>
