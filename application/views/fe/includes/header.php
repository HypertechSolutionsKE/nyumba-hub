<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <title>NYUMBAHUB</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Loading Source Sans Pro font that is used in this theme-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Boostrap and other lib styles-->
    <link rel="stylesheet" href="assets/css/vendor.min.css?v=201603120801">
    <!-- Font-awesome lib-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css?v=201603120801">
    <!-- Theme styles, please replace "default" with other color scheme from the list available in template/css-->
    <link rel="stylesheet" href="assets/css/theme-default.min.css?v=201603120801">
    <!-- Your styles should go in this file-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Fixes for IE-->
    <!--[if lt IE 11]>
    <link rel="stylesheet" href="assets/css/ie-fix.css"><![endif]-->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  </head>
  <body class="index menu-default hover-default scroll-animation">
    <div class="box js-box">
          <!-- BEGIN HEADER-->
        <header class="header header--overlay header--dark">
            <div class="container">
              <div class="header__row"><a href="index.html" class="header__logo">
                  <svg>
                    <use xlink:href="#icon-logo--mob"></use>
                  </svg></a>
                <div class="header__settings">
                  <div class="header__settings-column">
                    <div class="dropdown dropdown--header">
                      <button data-toggle="dropdown" type="button" class="dropdown-toggle dropdown__btn">
                        <svg class="header__settings-icon">
                          <use xlink:href="#icon-money"></use>
                        </svg>USD
                      </button>
                      <div class="dropdown__menu">
                        <ul>
                          <li class="dropdown__item"><a href="index.html#" class="dropdown__link">EUR</a></li>
                          <li class="dropdown__item"><a href="index.html#" class="dropdown__link">RUB</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- end of block .header__settings-column-->
                  <div class="header__settings-column">
                    <div class="switch switch--header">
                      <label>M <sup>2</sup>
                        <input type="checkbox" checked><span class="lever"></span>Sq Ft
                      </label>
                    </div>
                  </div>
                  <!-- end of block .header__settings-column-->
                  <div class="header__settings-column">
                    <div class="dropdown dropdown--header">
                      <button data-toggle="dropdown" type="button" class="dropdown-toggle dropdown__btn">
                        <svg class="header__settings-icon">
                          <use xlink:href="#icon-earth"></use>
                        </svg>Eng
                      </button>
                      <div class="dropdown__menu">
                        <ul>
                          <li class="dropdown__item"><a href="index.html#" class="dropdown__link">Francais</a></li>
                          <li class="dropdown__item"><a href="index.html#" class="dropdown__link">Italian</a></li>
                          <li class="dropdown__item"><a href="index.html#" class="dropdown__link">Russian</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="header__contacts"><a href="tel:+12025550135" class="header__phone">
                    <svg class="header__phone-icon">
                      <use xlink:href="#icon-phone"></use>
                    </svg><span class="header__span">+1 202 555 0135</span></a></div>
                <!-- end of block .header__contacts-->
                <div class="header__social">
                  <div class="social social--header social--circles"><a href="index.html#" class="social__item"><i class="fa fa-facebook"></i></a><a href="index.html#" class="social__item"><i class="fa fa-twitter"></i></a><a href="index.html#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                </div>
                <div class="auth auth--header">
                  <ul class="auth__nav">
                    <li class="dropdown auth__nav-item">
                      <div class="dropdown__menu auth__dropdown--restore">
                        <!-- BEGIN AUTH RESTORE-->
                        <h5 class="auth__title">Reset password</h5>
                        <form action="index.html#" class="form form--flex form--auth form--restore js-restore-form js-parsley">
                          <div class="row">
                            <div class="form-group">
                              <label for="restore-email-dropdown" class="control-label">Enter your User Name or Email</label>
                              <input type="email" name="email" id="restore-email-dropdown" required class="form-control">
                            </div>
                          </div>
                          <div class="row">
                            <button type="submit" class="form__submit">Reset password</button>
                          </div>
                          <div class="row">
                            <div class="form__options">Back to
                              <button type="button" class="js-user-login">Log In</button>or
                              <button type="button" class="js-user-register">Registration</button>
                            </div>
                            <!-- end of block .auth__links-->
                          </div>
                        </form>
                        <!-- end of block .auth__form-->
                        <!-- END AUTH RESTORE-->
                      </div>
                    </li>
                    <li class="dropdown auth__nav-item">
                      <button data-toggle="dropdown" type="button" class="dropdown-toggle js-auth-nav-btn auth__nav-btn">
                        <svg class="auth__icon-user">
                          <use xlink:href="#icon-user"></use>
                        </svg><span class="header__span"> Log in /</span>
                      </button>
                      <div class="dropdown__menu auth__dropdown--login">
                        <!-- BEGIN AUTH LOGIN-->
                        <h5 class="auth__title">Login in your account</h5>
                        <form action="index.html#" class="form form--flex form--auth js-login-form js-parsley">
                          <div class="row">
                            <div class="form-group">
                              <label for="login-username-dropdown" class="control-label">Username</label>
                              <input type="text" name="username" id="login-username-dropdown" required data-parsley-trigger="keyup" data-parsley-minlength="6" data-parsley-validation-threshold="5" data-parsley-minlength-message="Login should be at least 6 chars" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="login-password-dropdown" class="control-label">Password</label>
                              <input type="password" name="password" id="login-password-dropdown" required class="form-control">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form__options form__options--forgot">
                              <button type="button" class="js-user-restore">Forgot password ?</button>
                            </div>
                            <button type="submit" class="form__submit">Sign in</button>
                          </div>
                          <div class="form__remember">
                            <input type="checkbox" id="remember-in-dropdown" class="in-checkbox">
                            <label for="remember-in-dropdown" class="in-label">Remember me</label>
                          </div>
                          <div class="row">
                            <div class="form__options">Not a user yet?
                              <button type="button" class="js-user-register">Get an account</button>
                            </div>
                          </div>
                        </form>
                        <!-- end of block .auth__form-->
                        <!-- END AUTH LOGIN-->
                      </div>
                    </li>
                    <li class="dropdown auth__nav-item">
                      <button data-toggle="dropdown" type="button" class="dropdown-toggle auth__nav-btn"><span class="header__span">  Sign up</span></button>
                      <div class="dropdown__menu auth__dropdown--register">
                        <!-- BEGIN AUTH REGISTER-->
                        <h5 class="auth__title">Sign up a new account</h5>
                        <form action="index.html#" class="form form--flex form--auth js-register-form js-parsley">
                          <div class="row">
                            <div class="form-group form-group--col-6">
                              <label for="register-name-dropdown" class="control-label">First name</label>
                              <input type="text" name="username" id="register-name-dropdown" required class="form-control">
                            </div>
                            <div class="form-group form-group--col-6">
                              <label for="register-lastname-dropdown" class="control-label">Last name</label>
                              <input type="text" name="name" id="register-lastname-dropdown" required class="form-control">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group form-group--col-6">
                              <label for="register-email-dropdown" class="control-label">E-mail</label>
                              <input type="email" name="email" id="register-email-dropdown" required class="form-control">
                            </div>
                            <div class="form-group form-group--col-6">
                              <label for="register-password-dropdown" class="control-label">Password</label>
                              <input type="password" name="password" id="register-password-dropdown" required class="form-control">
                            </div>
                          </div>
                          <div class="row">
                            <div class="form__options">Back to
                              <button type="button" class="js-user-login">Log In</button>
                            </div>
                            <button type="submit" class="form__submit">Sign up</button>
                          </div>
                        </form>
                        <!-- end of block .auth__form-->
                        <!-- END AUTH REGISTER-->
                      </div>
                    </li>
                  </ul>
                  <!-- end of block .auth header-->
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
        <nav id="header-nav" class="navbar navbar--header navbar--overlay">
            <div class="container">
              <div class="navbar__row js-navbar-row"><a href="index.html" class="navbar__brand">
                  <svg class="navbar__brand-logo">
                    <use xlink:href="#icon-logo"></use>
                  </svg></a>
                <div id="navbar-collapse-1" class="navbar__wrap">
                  <ul class="navbar__nav">
                    <li class="navbar__item js-dropdown active"><a class="navbar__link">Home
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem active"><a href="index.html" class="navbar__sublink js-navbar-sublink">Banner & Search</a></li>
                            <li class="navbar__subitem"><a href="index_slider.html" class="navbar__sublink js-navbar-sublink">Property slider</a></li>
                            <li class="navbar__subitem"><a href="index_projects.html" class="navbar__sublink js-navbar-sublink">Property projects</a></li>
                            <li class="navbar__subitem"><a href="index_slider_search.html" class="navbar__sublink js-navbar-sublink">Slider & Search</a></li>
                            <li class="navbar__subitem"><a href="index_slider_auth.html" class="navbar__sublink js-navbar-sublink">Slider & Authorization</a></li>
                            <li class="navbar__subitem"><a href="index_vmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Light search</a></li>
                            <li class="navbar__subitem"><a href="index_vmap_dark.html" class="navbar__sublink js-navbar-sublink">Google Map & Dark search</a></li>
                            <li class="navbar__subitem"><a href="index_hmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Horizontal search</a></li>
                            <li class="navbar__subitem"><a href="feature_map_leaflet.html" class="navbar__sublink js-navbar-sublink">Openstreet Map & Filter</a></li>
                            <li class="navbar__subitem"><a href="feature_vmap_fullscreen.html" class="navbar__sublink js-navbar-sublink">Fullscreen Google Map</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Properties
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Details</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="property_details.html" class="navbar__sublink js-navbar-sublink">Property</a></li>
                            <li class="navbar__subitem"><a href="property_details_projected.html" class="navbar__sublink js-navbar-sublink">Property projected</a></li>
                            <li class="navbar__subitem"><a href="property_details_agent.html" class="navbar__sublink js-navbar-sublink">Property & agent</a></li>
                          </ul>
                        </div>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Listing</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Grid
                                <svg class="navbar__arrow">
                                  <use xlink:href="#icon-arrow-right"></use>
                                </svg></a>
                              <div class="navbar__submenu navbar__submenu--level">
                                <button class="navbar__back js-navbar-submenu-back">
                                  <svg class="navbar__arrow">
                                    <use xlink:href="#icon-arrow-left"></use>
                                  </svg>Back
                                </button>
                                <ul class="navbar__subnav">
                                  <li class="navbar__subitem"><a href="feature_grid_large.html" class="navbar__sublink js-navbar-sub-sublink">Large</a></li>
                                  <li class="navbar__subitem"><a href="properties_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Medium</a></li>
                                  <li class="navbar__subitem"><a href="feature_grid_small.html" class="navbar__sublink js-navbar-sub-sublink">Small</a></li>
                                </ul>
                              </div>
                            </li>
                            <li class="navbar__subitem"><a href="properties_listing_list.html" class="navbar__sublink js-navbar-sublink">List</a></li>
                            <li class="navbar__subitem"><a href="properties_listing_table.html" class="navbar__sublink js-navbar-sublink">Table</a></li>
                            <li class="navbar__subitem"><a href="properties_listing_empty.html" class="navbar__sublink js-navbar-sublink">Empty</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Agents
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="agent_profile.html" class="navbar__sublink js-navbar-sub-sublink">Agent's profile</a></li>
                            <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agents_listing_list.html" class="navbar__sublink js-navbar-sublink">Agent's listing
                                <svg class="navbar__arrow">
                                  <use xlink:href="#icon-arrow-right"></use>
                                </svg></a>
                              <div class="navbar__submenu navbar__submenu--level">
                                <button class="navbar__back js-navbar-submenu-back">
                                  <svg class="navbar__arrow">
                                    <use xlink:href="#icon-arrow-left"></use>
                                  </svg>Back
                                </button>
                                <ul class="navbar__subnav">
                                  <li class="navbar__subitem"><a href="agents_listing_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                                  <li class="navbar__subitem"><a href="agents_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                                </ul>
                              </div>
                            </li>
                            <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agent_profile_blog_list.html" class="navbar__sublink js-navbar-sublink">Agent's blog
                                <svg class="navbar__arrow">
                                  <use xlink:href="#icon-arrow-right"></use>
                                </svg></a>
                              <div class="navbar__submenu navbar__submenu--level">
                                <button class="navbar__back js-navbar-submenu-back">
                                  <svg class="navbar__arrow">
                                    <use xlink:href="#icon-arrow-left"></use>
                                  </svg>Back
                                </button>
                                <ul class="navbar__subnav">
                                  <li class="navbar__subitem"><a href="agent_profile_blog_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                                  <li class="navbar__subitem"><a href="agent_profile_blog_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                                  <li class="navbar__subitem"><a href="agent_profile_blog_details.html" class="navbar__sublink js-navbar-sub-sublink">Details</a></li>
                                </ul>
                              </div>
                            </li>
                            <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agent_profile_listing_list.html" class="navbar__sublink js-navbar-sublink">Agent's properties
                                <svg class="navbar__arrow">
                                  <use xlink:href="#icon-arrow-right"></use>
                                </svg></a>
                              <div class="navbar__submenu navbar__submenu--level">
                                <button class="navbar__back js-navbar-submenu-back">
                                  <svg class="navbar__arrow">
                                    <use xlink:href="#icon-arrow-left"></use>
                                  </svg>Back
                                </button>
                                <ul class="navbar__subnav">
                                  <li class="navbar__subitem"><a href="agent_profile_listing_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                                  <li class="navbar__subitem"><a href="agent_profile_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                                  <li class="navbar__subitem"><a href="agent_profile_listing_table.html" class="navbar__sublink js-navbar-sub-sublink">Table</a></li>
                                </ul>
                              </div>
                            </li>
                            <li class="navbar__subitem"><a href="agent_profile_testimonials.html" class="navbar__sublink js-navbar-sub-sublink">Agent's testimonials</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">User
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Pages</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="my_listings.html" class="navbar__sublink js-navbar-sublink">My listings</a></li>
                            <li class="navbar__subitem"><a href="my_listings_add_edit.html" class="navbar__sublink js-navbar-sublink">Property submit</a></li>
                            <li class="navbar__subitem"><a href="my_profile.html" class="navbar__sublink js-navbar-sublink">Profile</a></li>
                          </ul>
                        </div>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Auth</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="user_login.html" class="navbar__sublink js-navbar-sublink">Login</a></li>
                            <li class="navbar__subitem"><a href="user_register.html" class="navbar__sublink js-navbar-sublink">Register</a></li>
                            <li class="navbar__subitem"><a href="user_restore_pass.html" class="navbar__sublink js-navbar-sublink">Restore</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Blog
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="blog.html" class="navbar__sublink js-navbar-sublink">Blog list</a></li>
                            <li class="navbar__subitem"><a href="blog_details.html" class="navbar__sublink js-navbar-sublink">Blog details</a></li>
                            <li class="navbar__subitem"><a href="blog_empty.html" class="navbar__sublink js-navbar-sublink">Blog empty</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Pages
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="page.html" class="navbar__sublink js-navbar-sublink">Сontent page</a></li>
                            <li class="navbar__subitem"><a href="faq.html" class="navbar__sublink js-navbar-sublink">Faq</a></li>
                            <li class="navbar__subitem"><a href="reviews.html" class="navbar__sublink js-navbar-sublink">Testimonials</a></li>
                            <li class="navbar__subitem"><a href="pricing.html" class="navbar__sublink js-navbar-sublink">Pricing</a></li>
                            <li class="navbar__subitem"><a href="gallery.html" class="navbar__sublink js-navbar-sublink">Gallery</a></li>
                            <li class="navbar__subitem"><a href="email.html" class="navbar__sublink js-navbar-sublink">Email template</a></li>
                            <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Errors
                                <svg class="navbar__arrow">
                                  <use xlink:href="#icon-arrow-right"></use>
                                </svg></a>
                              <div class="navbar__submenu navbar__submenu--level">
                                <button class="navbar__back js-navbar-submenu-back">
                                  <svg class="navbar__arrow">
                                    <use xlink:href="#icon-arrow-left"></use>
                                  </svg>Back
                                </button>
                                <ul class="navbar__subnav">
                                  <li class="navbar__subitem"><a href="error_403.html" class="navbar__sublink js-navbar-sub-sublink">403 Error</a></li>
                                  <li class="navbar__subitem"><a href="error_404.html" class="navbar__sublink js-navbar-sub-sublink">404 Error</a></li>
                                  <li class="navbar__subitem"><a href="error_500.html" class="navbar__sublink js-navbar-sub-sublink">500 Error</a></li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item"><a href="contacts.html" class="navbar__link">Contacts</a></li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">Dashboard
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="dashboard.html" class="navbar__sublink">Dashboard</a></li>
                            <li class="navbar__subitem"><a href="dashboard_property_new.html" class="navbar__sublink">Add Listing</a></li>
                            <li class="navbar__subitem"><a href="dashboard_news.html" class="navbar__sublink">News Feed</a></li>
                            <li class="navbar__subitem"><a href="dashboard_profile.html" class="navbar__sublink">Profile</a></li>
                            <li class="navbar__subitem"><a href="dashboard_activity.html" class="navbar__sublink">Activity Log</a></li>
                            <li class="navbar__subitem"><a href="dashboard_favorites_listings.html" class="navbar__sublink">Favorite Listings</a></li>
                            <li class="navbar__subitem"><a href="dashboard_favorites_agents.html" class="navbar__sublink">Favorite Agents</a></li>
                            <li class="navbar__subitem"><a href="dashboard_favorites_search.html" class="navbar__sublink">Favorite search</a></li>
                            <li class="navbar__subitem"><a href="dashboard_financials.html" class="navbar__sublink">Financials</a></li>
                            <li class="navbar__subitem"><a href="dashboard_statistics.html" class="navbar__sublink">Statistics</a></li>
                            <li class="navbar__subitem"><a href="dashboard_property.html" class="navbar__sublink">Property management</a></li>
                            <li class="navbar__subitem"><a href="dashboard_blog.html" class="navbar__sublink">Blog Management</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item js-dropdown"><a class="navbar__link">UI
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right navbar__dropdown--colls-2">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Variations</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="index_not_available.html" class="navbar__sublink js-navbar-sublink">Feature not available</a></li>
                            <li class="navbar__subitem"><a href="feature_boxed.html" class="navbar__sublink js-navbar-sublink">Layout boxed</a></li>
                            <li class="navbar__subitem"><a href="feature_left_sidebar.html" class="navbar__sublink js-navbar-sublink">Sidebar left</a></li>
                          </ul>
                        </div>
                        <div class="navbar__submenu">
                          <h5 class="navbar__subtitle">Elements</h5>
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem"><a href="feature_ui.html" class="navbar__sublink js-navbar-sublink">UI</a></li>
                            <li class="navbar__subitem"><a href="feature_typography.html" class="navbar__sublink js-navbar-sublink">Typography</a></li>
                            <li class="navbar__subitem"><a href="feature_loaders.html" class="navbar__sublink js-navbar-sublink">Feature loaders</a></li>
                            <li class="navbar__subitem"><a href="bootstrap.html" class="navbar__sublink js-navbar-sublink">Twitter Bootstrap</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Language
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem active"><a href="index.html" class="navbar__sublink js-navbar-sublink">English</a></li>
                            <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">Francais</a></li>
                            <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">Italian</a></li>
                            <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">Russian</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Currency
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <ul class="navbar__subnav">
                            <li class="navbar__subitem active"><a href="index.html" class="navbar__sublink js-navbar-sublink">USD</a></li>
                            <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">EURO</a></li>
                            <li class="navbar__subitem"><a href="index.html" class="navbar__sublink js-navbar-sublink">RUB</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Measures
                        <svg class="navbar__arrow">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                      <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                        <button class="navbar__back js-navbar-submenu-back">
                          <svg class="navbar__arrow">
                            <use xlink:href="#icon-arrow-left"></use>
                          </svg>Back
                        </button>
                        <div class="navbar__submenu">
                          <div class="switch switch--menu">
                            <label>M <sup>2</sup>
                              <input type="checkbox" checked><span class="lever"></span>Sq Ft
                            </label>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!-- end of block  navbar__nav-->
                </div>
              </div>
            </div>
        </nav>
          <!-- END NAVBAR-->
