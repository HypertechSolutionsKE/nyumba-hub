<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<title><?php echo $page_title;?>Euro Golden Bet</title>
		<link rel="icon" href="<?php echo base_url();?>assets/fe/images/favicon.png">

		<link href="<?php echo base_url();?>assets/be/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/be/css/londinium-theme.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/be/css/styles.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/be/css/icons.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/sparkline.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.orderbars.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.pie.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.time.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.animator.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/excanvas.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/charts/flot.resize.min.js"></script>
        

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/uniform.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/inputmask.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/autosize.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/inputlimit.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/listbox.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/multiselect.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/validate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/tags.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/switch.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/uploader/plupload.full.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/uploader/plupload.queue.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/forms/wysihtml5/toolbar.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/daterangepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/fancybox.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/moment.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/jgrowl.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/datatables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/colorpicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/fullcalendar.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/interface/timepicker.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/application.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/form_validation.js"></script>
        
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/charts/widgets/filled_green.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/be/js/charts/widgets/filled_red.js"></script>        
	</head>

	<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/be/images/logo-light.png" alt="Euro Golden Bet"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">
					<span>Administrator</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="#"><i class="icon-user"></i> Profile</a></li>
					<!--<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
					<li><a href="#"><i class="icon-cog"></i> Settings</a></li>-->
					<li><a href="<?php echo base_url();?>be/auth/logout"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">
						<div class="user-info">
							Ngigi Nyoro <span>Administrator</span>
						</div>
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
					    <div class="thumbnail">
					    	<div class="thumb">
								<img alt="" src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png">
								<div class="thumb-options">
									<span>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
										<!--<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>-->
									</span>
								</div>
						    </div>
					    
					    	<div class="caption text-center">
					    		<h6>Ngigi Nyoro <small>Administrator</small></h6>
					    	</div>
				    	</div>
					</div>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li class="active"><a href="<?php echo base_url();?>be"><span>Dashboard</span> <i class=" icon-home"></i></a></li>
					<li class="active">
						<a href="#"><span>Daily Tips</span> <i class=" icon-bubble2"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/daily-tips/entry">Tips Entry</a></li>
							<li><a href="<?php echo base_url();?>be/daily-tips">Tips List</a></li>
							<li><a href="<?php echo base_url();?>be/tips-categories">Tips Categories</a></li>
							<li><a href="<?php echo base_url();?>be/multibets">Multibets</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#"><span>Jackpots</span> <i class=" icon-coin"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/bookies">Bookies</a></li>
							<li><a href="<?php echo base_url();?>be/jackpots">Jackpots</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#"><span>Customers</span> <i class="icon-user3"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/customers/add">New Customer</a></li>
							<li><a href="<?php echo base_url();?>be/customers">Customers List</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#"><span>Transactions</span> <i class="icon-barcode2"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/payment-transactions">Payment Transactions</a></li>
							<li><a href="<?php echo base_url();?>be/outgoing-sms">Outgoing SMS</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#"><span>Administration</span> <i class=" icon-user"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/company">Company Information</a></li>
							<li><a href="<?php echo base_url();?>be/access-levels">Access Levels</a></li>
							<li><a href="<?php echo base_url();?>be/departments">Departments</a></li>
							<li><a href="<?php echo base_url();?>be/system-users">System Users</a></li>
						</ul>
					</li>
				</ul>
				<!-- /main navigation -->
			</div>
		</div>
		<!-- /sidebar -->