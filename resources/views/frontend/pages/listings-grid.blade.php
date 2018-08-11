<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Houzez HTML5 Template">
  <meta name="description" content="Houzez HTML5 Template">
  <meta name="author" content="Favethemes">
  <meta name="theme-color" content="#ffffff">

  <title>Houzez HTML5 Template</title>

  <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon.png">
  <link rel="icon" href="images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="images/favicons/manifest.json">
  <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" >

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>
<body>

  <button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
  <div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="login-tabs">
            <li class="active">Login</li>
            <li>Register</li>
          </ul>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

        </div>
        <div class="modal-body login-block">
          <div class="tab-content">
            <div class="tab-pane fade in active">
              <div class="message">
                <p class="error text-danger"><i class="fa fa-close"></i> You are not Logedin</p>
                <p class="success text-success"><i class="fa fa-check"></i> You are not Logedin</p>
              </div>
              <form>
                <div class="form-group field-group">
                  <div class="input-user input-icon">
                    <input type="text" placeholder="Username">
                  </div>
                  <div class="input-pass input-icon">
                    <input type="password" placeholder="Password">
                  </div>
                </div>
                <div class="forget-block clearfix">
                  <div class="form-group pull-left">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <div class="form-group pull-right">
                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#pop-reset-pass">I forgot username and password</a>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
              </form>
              <hr>
              <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
              <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
              <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
            </div>
            <div class="tab-pane fade">
              <form>
                <div class="form-group field-group">
                  <div class="input-user input-icon">
                    <input type="text" placeholder="Username">
                  </div>
                  <div class="input-email input-icon">
                    <input type="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      I agree with your <a href="#">Terms & Conditions</a>.
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </form>
              <hr>

              <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
              <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
              <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="login-tabs">
            <li class="active">Reset Password</li>
          </ul>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
        </div>
        <div class="modal-body">
          <p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
          <form>
            <div class="form-group">
              <div class="input-user input-icon">
                <input placeholder="Enter your username or email" class="form-control">
              </div>
            </div>
            <button class="btn btn-primary btn-block">Get new password</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--start header section header v1-->
  <header id="header-section" class="header-section-4 header-main  nav-left hidden-sm hidden-xs" data-sticky="1">
    <div class="container">
      <div class="header-left">
        <div class="logo">
          <a href="index.html">
            <img src="images/houzez-logo-color.png" alt="logo">
          </a>
        </div>
        <nav class="navi main-nav">
          <ul>
            <li><a href="#">Home</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Map</a>
                  <ul class="sub-menu">
                    <li><a href="home-map.html">Map Standard</a></li>
                    <li><a href="home-map-fullscreen.html">Map Fullscreen</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Parallax</a>
                  <ul class="sub-menu">
                    <li><a href="home-parallax.html">Parallax Standard</a></li>
                    <li><a href="home-parallax-fullscreen.html">Parallax Fullscreen</a></li>
                    <li><a href="home-parallax-autofix.html">Parallax Auto Fix</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Video</a>
                  <ul class="sub-menu">
                    <li><a href="home-video.html">Video Standard</a></li>
                    <li><a href="home-video-fullscreen.html">Video Fullscreen</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Sliders</a>
                  <ul class="sub-menu">
                    <li><a href="home-property-slider.html">Property Slider</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Splash</a>
                  <ul class="sub-menu">
                    <li><a href="splash-video.html">Video Fullscreen</a></li>
                    <li><a href="splash-slider.html">Slider Fullscreen</a></li>
                    <li><a href="splash-image.html">Image Fullscreen</a></li>
                    <li><a href="home-splash.html">Home With Splash</a></li>
                    <li><a href="splash-half.html">Half</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Listing</a>
              <ul class="sub-menu">
                <li><a href="properties-list.html">List View</a>
                  <ul class="sub-menu">
                    <li><a href="properties-list.html">List View Standard</a></li>
                    <li><a href="properties-list-fullwidth.html">List View Fullwidth</a></li>
                    <li><a href="properties-list-compare.html">List View Compare Panel</a></li>
                    <li><a href="properties-list-save-search.html">List View Save Search</a></li>
                  </ul>
                </li>
                <li>
                  <a href="properties-list-style-2.html">List View Style 2</a>
                  <ul class="sub-menu">
                    <li><a href="properties-list-style-2.html">List View Standard Style 2</a></li>
                    <li><a href="properties-list-style-2-fullwidth.html">List View Fullwidth Style 2</a></li>
                  </ul>
                </li>
                <li><a href="properties-grid.html">Grid View</a>
                  <ul class="sub-menu">
                    <li><a href="properties-grid.html">Grid View Standard</a></li>
                    <li><a href="properties-grid-fullwidth.html">Grid View Fullwidth</a></li>
                  </ul>
                </li>
                <li><a href="properties-grid-style-2.html">Grid View Style 2</a>
                  <ul class="sub-menu">
                    <li><a href="properties-grid-style-2.html">Grid View Standard Style 2</a></li>
                    <li><a href="properties-grid-style-2-fullwidth.html">Grid View Fullwidth Style 2</a></li>
                  </ul>
                </li>
                <li><a href="#">Map</a>
                  <ul class="sub-menu">
                    <li><a href="map-listing.html">Half Map</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Property</a>
              <ul class="sub-menu">
                <li><a href="property-detail.html">Single Property v1</a></li>
                <li><a href="property-detail-v2.html">Single Property v2</a></li>
                <li><a href="property-detail-v3.html">Single Property v3</a></li>
                <li><a href="property-detail-landing-page.html">Property Landing Page</a></li>
                <li><a href="property-detail-full-width-gallery.html">Property Full Width Gallery</a></li>
                <li><a href="property-detail-tabs.html">Single Property Tabs v1</a></li>
                <li><a href="property-detail-tabs-vertical.html">Single Property Tabs v2</a></li>
                <li><a href="property-detail-multi-properties.html">Multi Units / Sub listing</a></li>
                <li><a href="property-nav-on-scroll.html">Property Nav On Scroll</a></li>
              </ul>
            </li>
            <li class="houzez-megamenu"><a href="#">Pages</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Column 1</a>
                  <ul class="sub-menu">
                    <li><a href="agent-list.html">All Agents</a></li>
                    <li><a href="agent-detail.html">Agent Profile</a></li>
                    <li><a href="agency-list.html">All Agencies</a></li>
                    <li><a href="company-profile.html">Company Profile</a></li>
                    <li><a href="compare-properties.html">Compare Properties</a></li>
                    <li><a href="landing-page.html">Landing Page</a></li>
                    <li><a href="map-full-search.html">Map Full Screen</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Column 2</a>
                  <ul class="sub-menu">
                    <li><a href="about-us.html">About Houzez</a></li>
                    <li><a href="contact-us.html">Contact us</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="register.html">Register Page</a></li>
                    <li><a href="forget-password.html">Forget Password Page</a></li>
                    <li><a href="typography.html">Typography</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Column 3</a>
                  <ul class="sub-menu">
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="simple-page.html">Simple Page</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="headers.html">Houzez Headers</a></li>
                    <li><a href="footer.html">Houzez Footers</a></li>
                    <li><a href="widgets.html">Houzez Widgets</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Column 4</a>
                  <ul class="sub-menu">
                    <li><a href="search-bars.html">Houzez Search Bars</a></li>
                    <li><a href="add-new-property.html">Create Listing Page</a></li>
                    <li><a href="listing-select-package.html">Select Packages Page</a></li>
                    <li><a href="listing-payment.html">Payment Page</a></li>
                    <li><a href="listing-done.html">Listing Done Page</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Column 5</a>
                  <ul class="sub-menu">
                    <li><a href="blog-detail.html">Blog detail</a></li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="my-properties.html">My Properties</a></li>
                    <li><a href="my-favourite-properties.html">My Favourite Properties</a></li>
                    <li><a href="my-saved-search.html">My Saved Searches</a></li>
                    <li><a href="my-invoices.html">My Invoices</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="houzez-megamenu"><a href="#">Modules</a>
              <ul class="sub-menu">
                <li>
                  <a href="#"> Column 1 </a>
                  <ul class="sub-menu">
                    <li><a href="module-advanced-search.html">Advanced Search</a></li>
                    <li><a href="module-property-grids.html">Property Grids</a></li>
                    <li><a href="module-property-carousel-v1.html">Property Carousel v1</a></li>
                    <li><a href="module-property-carousel-v2.html">Property Carousel v2</a></li>

                  </ul>
                </li>
                <li>
                  <a href="#"> Column 2 </a>
                  <ul class="sub-menu">
                    <li><a href="module-property-cards.html">Property Cards Module</a></li>
                    <li><a href="module-property-by-id.html">Property by ID</a></li>
                    <li><a href="module-taxonomy-grids.html">Taxonomy Grids</a></li>
                    <li><a href="module-taxonomy-tabs.html">Taxonomy Tabs</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"> Column 3 </a>
                  <ul class="sub-menu">
                    <li><a href="module-testimonials.html">Testimonials</a></li>
                    <li><a href="module-membership-packages.html">Membership Packages</a></li>
                    <li><a href="module-agents.html">Agents</a></li>
                    <li><a href="module-team.html">Team</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"> Column 4 </a>
                  <ul class="sub-menu">
                    <li><a href="module-partners.html">Partners</a></li>
                    <li><a href="module-text-with-icons.html">Text with icons</a></li>
                    <li><a href="module-blog-post-carousels.html">Blog Post Carousels</a></li>
                    <li><a href="module-blog-post-grids.html">Blog Post Grids</a></li>
                    <li><a href="blog-masonry.html">Blog Post Masonry</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header-right">
        <div class="user">
          <a href="#" data-toggle="modal" data-target="#pop-login">Sign In / Register</a>
          <a href="add-new-property.html" class="btn btn-default">Create Listing</a>
        </div>
      </div>
    </div>
  </header>
  <div class="header-mobile visible-sm visible-xs">
    <div class="container">
      <!--start mobile nav-->
      <div class="mobile-nav">
        <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
        <div class="nav-dropdown main-nav-dropdown"></div>
      </div>
      <!--end mobile nav-->
      <div class="header-logo">
        <a href="index.html"><img src="images/logo-houzez-white.png" alt="logo"></a>
      </div>
      <div class="header-user">
        <ul class="account-action">
          <li>
            <span class="user-icon"><i class="fa fa-user"></i></span>
            <div class="account-dropdown">
              <ul>
                <li> <a href="add-new-property.html"> <i class="fa fa-plus-circle"></i>Creat Listing</a></li>
                <li> <a href="#" data-toggle="modal" data-target="#pop-login"> <i class="fa fa-user"></i> Log in / Register </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--end header section header v1-->

  <!--start advanced search section-->
  <section class="advanced-search advance-search-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form>
            <div class="form-group search-long">
              <div class="search">
                <div class="input-search input-icon">
                  <input class="form-control" type="text" placeholder="Search for a place to stay?">
                </div>
                <select name="location" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                  <option value="">All Cities</option>
                  <option value="chicago"> Chicago</option>
                  <option value="los-angeles"> Los Angeles</option>
                  <option value="miami"> Miami</option>
                  <option value="new-york"> New York</option>
                </select>
                <select name="area" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                  <option value="">All Areas</option>
                  <option value="beverly-hills"> Beverly Hills</option>
                  <option value="brickell"> Brickell</option>
                  <option value="brickyard"> Brickyard</option>
                  <option value="bronx"> Bronx</option>
                  <option value="brooklyn"> Brooklyn</option>
                  <option value="coconut-grove"> Coconut Grove</option>
                  <option value="downtown"> Downtown</option>
                  <option value="eagle-rock"> Eagle Rock</option>
                  <option value="englewood"> Englewood</option>
                  <option value="hermosa"> Hermosa</option>
                  <option value="hollywood"> Hollywood</option>
                  <option value="lincoln-park"> Lincoln Park</option>
                  <option value="manhattan"> Manhattan</option>
                  <option value="midtown"> Midtown</option>
                  <option value="queens"> Queens</option>
                  <option value="westwood"> Westwood</option>
                  <option value="wynwood"> Wynwood</option>
                </select>
                <div class="advance-btn-holder">
                  <button class="advance-btn btn" type="button"><i class="fa fa-gear"></i> Advanced</button>
                </div>
              </div>
              <div class="search-btn">
                <button class="btn btn-secondary">Go</button>
              </div>
            </div>
            <div class="advance-fields">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Status">
                      <option>Status 1</option>
                      <option>Status 2</option>
                      <option>Status 3</option>
                      <option>Status 4</option>
                      <option>Status 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Property Type">
                      <option>Property Type 1</option>
                      <option>Property Type 2</option>
                      <option>Property Type 3</option>
                      <option>Property Type 4</option>
                      <option>Property Type 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Beds">
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Baths">
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Min Areas (Sqft)">
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Max Areas (Sqft)">
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                      <option>$100</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="range-advanced-main">
                    <div class="range-text">
                      <input type="text" class="min-price-range-hidden range-input" readonly >
                      <input type="text" class="max-price-range-hidden range-input" readonly >
                      <p><span class="range-title">Price Range:</span> from <span class="min-price-range"></span> to <span class="max-price-range"></span></p>
                    </div>
                    <div class="range-wrap">
                      <div class="price-range-advanced"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-xs-12 features-list">

                  <label class="advance-trigger text-uppercase title"><i class="fa fa-plus-square"></i> Other Features </label>
                  <div class="clearfix"></div>
                  <div class="field-expand">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--end advanced search section-->

  <!--start advanced search section-->
  <section class="advanced-search-mobile visible-xs visible-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form>
            <div class="single-search-wrap">
              <div class="single-search-inner advance-btn">
                <button class="table-cell text-left" type="button"><i class="fa fa-gear"></i></button>
              </div>
              <div class="single-search-inner single-search">

                <input type="text" class="form-control table-cell" name="search" placeholder="Search">
              </div>
              <div class="single-search-inner single-seach-btn">
                <button class="table-cell text-right" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>

            <div class="advance-fields">
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Cities">
                      <option>City 1</option>
                      <option>City 2</option>
                      <option>City 3</option>
                      <option>City 4</option>
                      <option>City 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Areas">
                      <option>Area 1</option>
                      <option>Area 2</option>
                      <option>Area 3</option>
                      <option>Area 4</option>
                      <option>Area 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Status">
                      <option>Status 1</option>
                      <option>Status 2</option>
                      <option>Status 3</option>
                      <option>Status 4</option>
                      <option>Status 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Types">
                      <option>Type 1</option>
                      <option>Type 2</option>
                      <option>Type 3</option>
                      <option>Type 4</option>
                      <option>Type 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="count_beds">
                          <i class="fa fa-minus"></i>
                        </button>
                      </span>
                      <input type="text" name="count_beds" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Beds">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-number" data-type="plus" data-field="count_beds">
                          <i class="fa fa-plus"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="count_baths">
                          <i class="fa fa-minus"></i>
                        </button>
                      </span>
                      <input type="text" name="count_baths" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Baths">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-number" data-type="plus" data-field="count_baths">
                          <i class="fa fa-plus"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <input type="text" class="form-control" value="" name="min-area" placeholder="Min Area (sqft)">
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <input type="text" class="form-control" value="" name="max-area" placeholder="Max Area (sqft)">
                  </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <div class="range-advanced-main">
                    <div class="range-text">
                      <input type="text" class="min-price-range-hidden range-input" readonly >
                      <input type="text" class="max-price-range-hidden range-input" readonly >
                      <p><span class="range-title">Price Range:</span> from <span class="min-price-range"></span> to <span class="max-price-range"></span></p>
                    </div>
                    <div class="range-wrap">
                      <div class="price-range-advanced"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <label class="advance-trigger"><i class="fa fa-plus-square"></i> Other Features </label>
                </div>
                <div class="col-sm-12 col-xs-12 features-list ">
                  <div class="field-expand">
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option1"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option2"> Feature
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="option3"> Feature
                    </label>
                  </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                  <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search pull-left"></i> Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--end advanced search section-->

  <!--start section page body-->
  <section id="section-body">
    <div class="container">
      <div class="page-title breadcrumb-top">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb"><li ><a href="/"><i class="fa fa-home"></i></a></li><li class="active">Simple Listing – Grid View</li></ol>
            <div class="page-title-left">
              <h2>Simple Listing – Grid View</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 list-grid-area container-contentbar">
          <div id="content-area">

            <!--start list tabs-->
            <div class="list-tabs table-list full-width">
              <div class="tabs table-cell">
                <ul>
                  <li>
                    <a href="#" class="active">ALL</a>
                  </li>
                  <li>
                    <a href="#">FOR SALE</a>
                  </li>
                  <li>
                    <a href="#">FOR RENT</a>
                  </li>
                </ul>
              </div>
              <div class="sort-tab table-cell text-right">
                Sort by:
                <select class="selectpicker bs-select-hidden" title="Please select" data-live-search-style="begins" data-live-search="true">
                  <option>Relevance</option>
                  <option>Relevance</option>
                  <option>Relevance</option>
                </select>
              </div>
            </div>
            <!--end list tabs-->

            <!--start property items-->
            <div class="property-listing grid-view">
              <div class="row">
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
                <div class="item-wrap">
                  <div class="property-item-grid">
                    <figure class="item-thumb">
                      <a href="#" class="hover-effect">
                        <img src="http://placehold.it/383x316" alt="thumb">
                      </a>
                      <div class="label-wrap label-left">
                        <span class="label label-success">Featured</span>
                        <span class="label label-danger">Open House</span>
                      </div>
                      <div class="price">
                        <span class="item-price">$350,000</span>
                        <span class="item-sub-price">$21,000/mo</span>
                      </div>
                      <ul class="actions">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                            <i class="fa fa-heart"></i>
                          </span>
                        </li>
                        <li class="share-btn">
                          <div class="share_tooltip fade">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                          <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                            <i class="fa fa-camera"></i>
                          </span>
                        </li>
                      </ul>
                      <div class="item-caption">
                        <div class="label-wrap">
                          <span class="label label-primary">Fore Sale</span>
                        </div>
                        <h4 class="item-caption-title">Luxury apartment bay view</h4>
                        <ul class="item-caption-list">
                          <li>2 bd</li>
                          <li>3 ba</li>
                          <li>1,287 sqft</li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <!--end property items-->

            <hr>

            <!--start Pagination-->
            <div class="pagination-main">
              <ul class="pagination">
                <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a aria-label="Next" href="#"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
              </ul>
            </div>
            <!--start Pagination-->

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3 container-sidebar">
          <aside id="sidebar" class="sidebar-white">
            <div class="widget widget-range">
              <div class="widget-body">
                <form>
                  <div class="range-block">
                    <h4>Price range</h4>
                    <div id="slider-price"></div>
                    <div class="clearfix range-text">
                      <input type="text" class="pull-left range-input text-left" id="min-price" readonly >
                      <input type="text" class="pull-right range-input text-right" id="max-price" readonly >
                    </div>
                  </div>
                  <div class="range-block">
                    <h4>Area Size</h4>
                    <div id="slider-size"></div>
                    <div class="clearfix range-text">
                      <input type="text" class="pull-left range-input text-left" id="min-size" readonly >
                      <input type="text" class="pull-right range-input text-right" id="max-size" readonly >
                    </div>
                  </div>
                  <div class="range-block rang-form-block">
                    <div class="row">
                      <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                          <input class="form-control" name="keyword" placeholder="Search" type="text">
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                          <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property Type">
                            <option>Property Type 1</option>
                            <option>Property Type 2</option>
                            <option>Property Type 3</option>
                            <option>Property Type 4</option>
                            <option>Property Type 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Beds">
                            <option>Beds 1</option>
                            <option>Beds 2</option>
                            <option>Beds 3</option>
                            <option>Beds 4</option>
                            <option>Beds 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Baths">
                            <option>Baths 1</option>
                            <option>Baths 2</option>
                            <option>Baths 3</option>
                            <option>Baths 4</option>
                            <option>Baths 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                          <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property type">
                            <option>Type 1</option>
                            <option>Type 2</option>
                            <option>Type 3</option>
                            <option>Type 4</option>
                            <option>Type 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                          <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Status">
                            <option>Status 1</option>
                            <option>Status 2</option>
                            <option>Status 3</option>
                            <option>Status 4</option>
                            <option>Status 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-secondary btn-block"> Search</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget widget-featured">
              <div class="widget-top">
                <h3 class="widget-title">Featured Properties</h3>
              </div>
              <div class="widget-body">
                <div class="figure-block">
                  <figure class="item-thumb">
                    <span class="label-featured label label-success">Featured</span>
                    <a class="hover-effect" href="#">
                      <img src="http://placehold.it/290x194" width="290" height="194" alt="thumb">
                    </a>
                    <div class="thumb-caption clearfix">
                      <div class="cap-price pull-left">$350,000</div>

                      <ul class="list-unstyled actions pull-right">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                            <i class="fa fa-camera"></i> <span class="blue">12</span>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </figure>
                </div>
                <div class="figure-block">
                  <figure class="item-thumb">
                    <span class="label-featured label label-success">Featured</span>
                    <a class="hover-effect" href="#">
                      <img src="http://placehold.it/290x194" width="290" height="194" alt="thumb">
                    </a>
                    <div class="thumb-caption clearfix">
                      <div class="cap-price pull-left">$350,000</div>

                      <ul class="list-unstyled actions pull-right">
                        <li>
                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                            <i class="fa fa-camera"></i> <span class="blue">12</span>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
            <div class="widget widget-slider">
              <div class="widget-top">
                <h3 class="widget-title">Featured Properties Slider</h3>
              </div>
              <div class="widget-body">
                <div class="property-widget-slider">
                  <div class="item">
                    <div class="figure-block">
                      <figure class="item-thumb">
                        <span class="label-featured label label-success">Featured</span>
                        <a href="#" class="hover-effect">
                          <img src="http://placehold.it/370x202" alt="thumb">
                        </a>
                        <div class="thumb-caption">
                          <div class="cap-price pull-left">$350,000</div>
                          <ul class="list-unstyled actions pull-right">
                            <li>
                              <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                <i class="fa fa-heart-o"></i>
                              </span>
                            </li>
                            <li class="share-btn">
                              <div class="share_tooltip fade">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                              </div>
                              <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                            </li>
                          </ul>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <div class="item">
                    <div class="figure-block">
                      <figure class="item-thumb">
                        <span class="label-featured label label-success">Featured</span>
                        <a href="#" class="hover-effect">
                          <img src="http://placehold.it/370x202" alt="thumb">
                        </a>
                        <div class="thumb-caption">
                          <div class="cap-price pull-left">$350,000</div>
                          <ul class="list-unstyled actions pull-right">
                            <li>
                              <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                <i class="fa fa-heart-o"></i>
                              </span>
                            </li>
                            <li class="share-btn">
                              <div class="share_tooltip fade">
                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                              </div>
                              <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                            </li>
                          </ul>
                        </div>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget widget-recommend">
              <div class="widget-top">
                <h3 class="widget-title">We recommend</h3>
              </div>
              <div class="widget-body">
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                    <h4>$350,000</h4>
                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                    <h4>$350,000</h4>
                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                    <h4>$350,000</h4>
                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget widget-rated">
              <div class="widget-top">
                <h3 class="widget-title">Most Rated Properties</h3>
              </div>
              <div class="widget-body">
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                    <div class="rating">
                      <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                    </div>
                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>

                    <div class="rating">
                      <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                    </div>


                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="#">
                        <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                      </a>
                      <div class="thumb-caption">

                        <ul class="list-unstyled actions">
                          <li>
                            <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">
                              <i class="fa fa-camera"></i> <span class="blue">12</span>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </figure>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>

                    <div class="rating">
                      <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                    </div>


                    <div class="amenities">
                      <p>3 beds • 2 baths • 1,238 sqft</p>
                      <p>Single Family Home</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget widget-categories">
              <div class="widget-top">
                <h3 class="widget-title">Property Categories</h3>
              </div>
              <div class="widget-body">
                <ul>
                  <li><a href="">Apartment</a> <span class="cat-count">(30)</span></li>
                  <li><a href="">Condo</a> <span class="cat-count">(30)</span></li>
                  <li><a href="">Single Family Home</a> <span class="cat-count">(30)</span></li>
                  <li><a href="">Villa</a> <span class="cat-count">(30)</span></li>
                  <li><a href="">Studio</a> <span class="cat-count">(30)</span></li>
                </ul>
              </div>
            </div>
            <div class="widget widget-reviews">
              <div class="widget-top">
                <h3 class="widget-title">Latest Reviews</h3>
              </div>
              <div class="widget-body">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="http://placehold.it/50x50" alt="Thumb" width="50" height="50">
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Property title</a></h3>
                    <div class="rating">
                      <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Etiam
                      risus tortor, accumsan at nisi et,
                    </p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="http://placehold.it/50x50" alt="Thumb" width="50" height="50">
                    </a>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><a href="#">Property title</a></h3>
                    <div class="rating">
                      <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Etiam
                      risus tortor, accumsan at nisi et,
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget widget-login">
              <div class="widget-body">
                <ul class="login-tabs">
                  <li class="active">Login</li>
                  <li>Register</li>
                </ul>
                <div class="login-block">
                  <div class="tab-content">
                    <div class="tab-pane fade in active">
                      <form>
                        <div class="form-group field-group">
                          <div class="input-user input-icon">
                            <input placeholder="Username">
                          </div>
                          <div class="input-email input-icon">
                            <input placeholder="Email">
                          </div>
                        </div>
                        <div class="forget-block clearfix">
                          <div class="form-group pull-left">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox">
                                Remember me
                              </label>
                            </div>
                          </div>
                          <div class="form-group pull-right">
                            <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#pop-reset-pass">Lost your password.</a>
                          </div>
                        </div>

                        <div class="btn btn-primary btn-block">Login</div>
                      </form>
                      <hr>
                      <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
                      <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
                      <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
                    </div>
                    <div class="tab-pane fade">
                      <form>
                        <div class="form-group field-group">
                          <div class="input-user input-icon">
                            <input placeholder="Username">
                          </div>
                          <div class="input-email input-icon">
                            <input placeholder="Email">
                          </div>
                        </div>
                        <div class="forget-block clearfix">
                          <div class="form-group pull-left">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox">
                                I agree with your
                              </label>
                            </div>
                          </div>
                          <div class="form-group pull-right">
                            <a href="#">Terms & Conditions</a>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-block">Login</button>
                      </form>
                      <hr>
                      <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
                      <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
                      <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget widget-logout">
              <div class="widget-body">
                <div class="media">
                  <div class="media-left">
                    <div class="thumb">
                      <img src="http://placehold.it/64x64" width="64" height="64" alt="thumb">
                    </div>
                  </div>
                  <div class="media-body v-align-middle">
                    <p>Martin Moore</p>
                    <a href="#">Log out</a>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!--end section page body-->

  <!--start footer section-->
  <footer class="footer-v2">
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="footer-widget widget-about">
              <div class="widget-top">
                <h3 class="widget-title">About Site</h3>
              </div>
              <div class="widget-body">
                <p>Houzez is a premium WordPress theme for real estate where modern aesthetics are combined with tasteful simplicity.</p>
                <p class="read"><a href="about-us.html">Read more <i class="fa fa-caret-right"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="footer-widget widget-contact">
              <div class="widget-top">
                <h3 class="widget-title">Contact Us</h3>
              </div>
              <div class="widget-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-location-arrow"></i> 121 King Street, Melbourne VIC 3000</li>
                  <li><i class="fa fa-phone"></i> +1 (877) 987 3487</li>
                  <li><i class="fa fa-envelope-o"></i> <a href="#">info@housez.com</a></li>
                </ul>
                <p class="read"><a href="contact-us.html">Contact us <i class="fa fa-caret-right"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="footer-widget widget-newsletter">
              <div class="widget-top">
                <h3 class="widget-title">Newsletter Subscribe</h3>
              </div>
              <div class="widget-body">
                <form>
                  <div class="table-list">
                    <div class="form-group table-cell">
                      <div class="input-email input-icon">
                        <input class="form-control" placeholder="Enter your email">
                      </div>
                    </div>
                    <div class="table-cell">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
                <p>Houzez is a premium WordPress theme for real estate agents.<br>Don’t forget to fullow us on:</p>
                <ul class="social">
                  <li>
                    <a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="footer-col">
              <p>Houzez - All rights reserved</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="footer-col">
              <div class="navi">
                <ul id="footer-menu" class="">
                  <li><a href="privacy.html">Privacy</a></li>
                  <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="footer-col foot-social">
              <p>
                Follow us
                <a target="_blank" class="btn-facebook" href="https://facebook.com/Favethemes"><i class="fa fa-facebook-square"></i></a>

                <a target="_blank" class="btn-twitter" href="https://twitter.com/favethemes"><i class="fa fa-twitter-square"></i></a>

                <a target="_blank" class="btn-linkedin" href="http://linkedin.com"><i class="fa fa-linkedin-square"></i></a>

                <a target="_blank" class="btn-google-plus" href="http://google.com"><i class="fa fa-google-plus-square"></i></a>

                <a target="_blank" class="btn-instagram" href="http://instagram.com"><i class="fa fa-instagram"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--end footer section-->

  <!--Start Scripts-->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/moment.js') }}"></script>
  <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-select.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>