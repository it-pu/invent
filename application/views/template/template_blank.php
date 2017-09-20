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
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('assets/template/css/paper-dashboard.css'); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/template/css/themify-icons.css'); ?>" rel="stylesheet">

		<!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/template/js/jquery-1.10.2.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url('assets/template/js/bootstrap-checkbox-radio.js'); ?>"></script>


    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/template/js/bootstrap-notify.js'); ?>"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<!-- <script src="<?php //echo base_url('assets/bootstrap/js/paper-dashboard.js') ?>"></script> -->

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assets/template/js/demo.js') ?>"></script>

</head>
<style>

	body {
		background: #f4f3ef;

		/*background: url('<?php echo base_url("assets/bg.png"); ?>') no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;*/
	}
</style>
<body>

<div class="wrapper">

  <?php echo $content; ?>

</div>


</body>

</html>
