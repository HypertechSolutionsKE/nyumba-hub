<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<title><?php echo $page_title;?>NyumbaHub</title>
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
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/scripts.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/oLoader/js/jquery.oLoader.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/be/js/plugins/oLoader/js/jquery.elevateZoom-3.0.8.min.js"></script>



	    <script type="text/javascript">
	    	var baseDir = '<?php echo base_url(); ?>';
	    	var cur_city_id = '';
	   	</script>

	</head>

	<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/be/images/logo-white.png" alt="NyumbaHub"></a>
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
						<?php if ($this->session->userdata('profile_picture')): ?>
							<?php if (file_exists('./uploads/profile_pictures/' . $this->session->userdata('profile_picture'))): ?>
								<img src="<?php echo base_url(); ?>uploads/profile_pictures/<?php echo $this->session->userdata('profile_picture');?>" alt="">
							<?php else: ?>
								<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">
							<?php endif; ?>						
						<?php else: ?>
							<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">						
						<?php endif; ?>

					<span><?php echo $this->session->userdata('user_name'); ?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="<?php echo base_url();?>be/system_users/profile/<?php echo $this->session->userdata('user_id');?>"><i class="icon-user"></i> Profile</a></li>
					<!--<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
					<li><a href="#"><i class="icon-cog"></i> Settings</a></li>-->
					<li><a href="<?php echo base_url();?>be/auth/logout"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if ($this->session->userdata('profile_picture')): ?>
							<?php if (file_exists('./uploads/profile_pictures/' . $this->session->userdata('profile_picture'))): ?>
								<img src="<?php echo base_url(); ?>uploads/profile_pictures/<?php echo $this->session->userdata('profile_picture');?>" alt="">
							<?php else: ?>
								<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">
							<?php endif; ?>						
						<?php else: ?>
							<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">						
						<?php endif; ?>

						<div class="user-info">
							<?php echo $this->session->userdata('user_name'); ?> <!--<span>Administrator</span>-->
						</div>
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
					    <div class="thumbnail">
					    	<div class="thumb">
								<?php if ($this->session->userdata('profile_picture')): ?>
									<?php if (file_exists('./uploads/profile_pictures/' . $this->session->userdata('profile_picture'))): ?>
										<img src="<?php echo base_url(); ?>uploads/profile_pictures/<?php echo $this->session->userdata('profile_picture');?>" alt="">
									<?php else: ?>
										<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">
									<?php endif; ?>						
								<?php else: ?>
									<img src="<?php echo base_url();?>assets/be/images/demo/users/avi-1.png" alt="">						
								<?php endif; ?>

								<div class="thumb-options">
									<span>
										<a href="<?php echo base_url();?>be/system_users/profile/<?php echo $this->session->userdata('user_id');?>" class="btn btn-icon btn-success"><i class="icon-profile"></i></a>
										<!--<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>-->
									</span>
								</div>
						    </div>
					    
					    	<div class="caption text-center">
					    		<h6><?php echo $this->session->userdata('user_name'); ?> <!--<small>Administrator</small>--></h6>
					    	</div>
				    	</div>
					</div>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li class="active"><a href="<?php echo base_url();?>be"><span>Dashboard</span> <i class=" icon-home"></i></a></li>
					<li class="active">
						<a hreactivef="#"><span>Property Management</span> <i class=" icon-office"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/properties/add_start"><span>New Property</span> <i class=" icon-plus-circle"></i></a></li>
							<li><a href="<?php echo base_url();?>be/properties"><span>Property Listing</span> <i class=" icon-office"></i></a></li>
						</ul>
					</li>

					<li class="active">
						<a hreactivef="#"><span>System Setup</span> <i class=" icon-cogs"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/listing_types"><span>Listing Types</span> <i class=" icon-list2"></i></a></li>
							<li><a href="<?php echo base_url();?>be/property_types"><span>Property Types</span> <i class=" icon-library"></i></a></li>
							<li><a href="<?php echo base_url();?>be/property_subcategories"><span>Property Subcategories</span> <i class="icon-grid2"></i></a></li>
							<li><a href="<?php echo base_url();?>be/regions"><span>Regions</span> <i class="icon-globe2"></i></a></li>
							<li><a href="<?php echo base_url();?>be/cities"><span>Cities/Towns</span> <i class="icon-map2"></i></a></li>
							<li><a href="<?php echo base_url();?>be/areas"><span>Areas/Localities</span> <i class="icon-bookmarks"></i></a></li>
							<li><a href="<?php echo base_url();?>be/property_feature_types"><span>Property Feature Types</span> <i class="icon-menu3"></i></a></li>
							<li><a href="<?php echo base_url();?>be/property_features"><span>Property Features</span> <i class="icon-equalizer"></i></a></li>
							<li><a href="<?php echo base_url();?>be/currencies"><span>Currencies</span> <i class="icon-coin"></i></a></li>
						</ul>
					</li>
					
					<li class="active">
						<a hreactivef="#"><span>Administration</span> <i class=" icon-user"></i></a>
						<ul>
							<li><a href="<?php echo base_url();?>be/company_information">Company Information <i class="icon-info"></i></a></li>
							<li><a href="<?php echo base_url();?>be/access_levels">Access Levels <i class="icon-user-block"></i></a></li>
							<li><a href="<?php echo base_url();?>be/departments">Departments<i class="icon-archive"></i></a></li>
							<li><a href="<?php echo base_url();?>be/system_users">System Users <i class="icon-users"></i></a></li>
						</ul>
					</li>
				</ul>
				<!-- /main navigation -->
			</div>
		</div>
		<!-- /sidebar -->

