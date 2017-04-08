<!DOCTYPE html>
<html>
	<head lang="en">
	   	<meta charset="UTF-8">
	    <title>NYUMBAHUB</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
	    <meta name="format-detection" content="">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/vendor.min.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/font-awesome.min.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/theme-default.min.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/custom.css">
	    <link rel="icon" href="<?php echo base_url();?>assets/fe/img/favicon.ico" type="image/x-icon">
  	</head>
  	<body class="index menu-default hover-default scroll-animation">
    	<div class="box js-box">
          <!-- BEGIN HEADER-->
        <header class="header header--brand">
            <div class="container">
              	<div class="header__row"><a href="index.html" class="header__logo">
                  	<svg>
                    	<use xlink:href="#icon-logo--mob"></use>
                  	</svg></a>
	                <div class="header__contacts">
                    <a href="tel:+12025550135" class="header__phone">
                      <i class="fa fa-phone-square" aria-hidden="true"></i>
                          +1 202 555 0135
                    </a>
	                </div>
                <!-- end of block .header__contacts-->
                	<div class="header__social">
	                  	<div class="social social--header social--circles"><a href="index.html#" class="social__item"><i class="fa fa-facebook"></i></a><a href="index.html#" class="social__item"><i class="fa fa-twitter"></i></a><a href="index.html#" class="social__item"><i class="fa fa-google-plus"></i></a>
	                  	</div>
	                </div>
	                <button type="button" class="header__navbar-toggle js-navbar-toggle">
	                  	<svg class="header__navbar-show">
	                    	<use xlink:href="#icon-menu"></use>
	                  	</svg>
	                  	<svg class="header__navbar-hide">
	                    	<use xlink:href="#icon-menu-close"></use>
	                  </svg>
	                </button>
                	<!-- end of block .header__navbar-toggle-->
              	</div>
            </div>
        </header>
          <!-- END HEADER-->
          <!-- BEGIN NAVBAR-->
        <div id="header-nav-offset"></div>
        <nav id="header-nav" class="navbar navbar--header">
            <div class="container">
              	<div class="navbar__row js-navbar-row"><a href="index.html" class="navbar__brand">
                  	<svg class="navbar__brand-logo">
                    	<use xlink:href="#icon-logo"></use>
                  	</svg></a>
                <div id="navbar-collapse-1" class="navbar__wrap">
                  	<ul class="navbar__nav">
                    	<li class="navbar__item <?php if ($cur == 'Home'){echo 'active'; } ?>">
                            <a <a href="<?php echo base_url();?>home" class="navbar__link">Home</a></li>
                        <li class="navbar__item <?php if ($cur == 'About'){echo 'active'; } ?>">
                            <a href="<?php echo base_url();?>about" class="navbar__link">About Us</a></li>
	                    <li class="navbar__item <?php if ($cur == 'How'){echo 'active'; } ?>">
                            <a href="<?php echo base_url();?>how-it-works" class="navbar__link">How it Works</a></li>
                    	<li class="navbar__item <?php if ($cur == 'Contact'){echo 'active'; } ?>">
                            <a href="<?php echo base_url();?>contact" class="navbar__link">Contact Us</a>
                        </li>
                  	</ul>
                  <!-- end of block  navbar__nav-->
                </div>
              </div></div>
        </nav>
        <!-- END NAVBAR-->
