<!DOCTYPE html>
<html lang="en">
<head>
    <title>Houzez HTML5 Template</title>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">

    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" >
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
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

    <!--start detail top-->
    <div class="detail-top detail-top-grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-detail table-list">
                        <div class="header-left">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li><a href="#">Library</a></li>
                                <li class="active">Data</li>
                            </ol>
                            <h1>
                                Oceanfront Villa With Pool
                                <span class="label-wrap hidden-sm hidden-xs">
                                    <span class="label label-primary">For Sale</span>
                                    <span class="label label-danger">Sold</span>
                                </span>
                            </h1>
                            <address class="property-address">7601 East Treasure Drive, Miami Beach, FL 33141</address>
                        </div>
                        <div class="header-right">
                            <ul class="actions">
                                <li class="share-btn">
                                    <div class="share_tooltip tooltip_left fade">
                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                        <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                    <span data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-heart-o"></i></span>
                                </li>
                            </ul>
                            <span class="item-price">$575,000</span>
                            <span class="item-sub-price">$21,000/mo</span>
                        </div>
                    </div>
                    <div class="detail-media">
                        <div class="tab-content">
                            <div id="gallery" class="tab-pane fade in active" style="background-image: url(http://placehold.it/1170x600)">
                                    <span class="label-wrap visible-sm visible-xs">
                                        <span class="label label-primary">For Sale</span>
                                        <span class="label label-danger">Sold</span>
                                    </span>
                                <div class="form-small form-media">
                                    <div class="media agent-media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="http://placehold.it/74x74" class="media-object" alt="image" width="74" height="74">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">CONTACT AGENT</h4>
                                            <ul>
                                                <li><i class="fa fa-user"></i> Kenneth Phllips</li>
                                                <li><i class="fa fa-phone"></i> (987) 654 3210</li>
                                            </ul>
                                            <a href="#" class="view">View my listing</a>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Location"></textarea>
                                        </div>
                                        <button class="btn btn-secondary btn-block">Request info</button>
                                    </form>
                                </div>
                            </div>
                            <div id="map" class="tab-pane fade"></div>
                            <div id="street-map" class="tab-pane fade"></div>
                        </div>
                        <div class="media-tabs">
                            <ul class="media-tabs-list">
                                <li class="popup-trigger" data-placement="bottom" data-toggle="tooltip" data-original-title="View Photos">
                                    <a href="#gallery" data-toggle="tab">
                                        <i class="fa fa-camera"></i>
                                    </a>
                                </li>
                                <li data-placement="bottom" data-toggle="tooltip" data-original-title="Map View">
                                    <a href="#map" data-toggle="tab">
                                        <i class="fa fa-map"></i>
                                    </a>
                                </li>
                                <li data-placement="bottom" data-toggle="tooltip" data-original-title="Street View">
                                    <a href="#street-map" data-toggle="tab">
                                        <i class="fa fa-street-view"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="actions">
                                <li class="share-btn">
                                    <div class="share_tooltip tooltip_left fade">
                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                        <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                    <span data-placement="right" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-heart-o"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end detail top-->

    <!--start section page body-->
    <section id="section-body">

        <!--start detail content-->
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                        <div class="detail-bar">
                            <!--start detail content tabber-->
                            <div class="detail-content-tabber">
                                <!--start detail tabs-->
                                <ul class="detail-tabs">
                                    <li class="active">Description</li>
                                    <li>Address</li>
                                    <li>Features</li>
                                    <li>Detail</li>
                                    <li>Floor Plan</li>
                                    <li>VIDEO</li>
                                </ul>
                                <!--end detail tabs-->

                                <!--start tab-content-->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active">
                                        <div class="property-description detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Description</h2>
                                                <div class="title-right">
                                                    <a href="#">Flag this listing <i class="fa fa-flag"></i></a>
                                                </div>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, condimentum feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
                                            <p>Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="detail-address detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Address</h2>
                                                <div class="title-right">
                                                    <a href="#">Open on Google Maps <i class="fa fa-map-marker"></i></a>
                                                </div>
                                            </div>
                                            <ul class="list-three-col">
                                                <li><strong>Address:</strong> 7601 East Treasure Drive</li>
                                                <li><strong>City:</strong> Miami Beach</li>
                                                <li><strong>State/Country:</strong> Florida</li>
                                                <li><strong>Zip:</strong> 33139</li>
                                                <li><strong>Country:</strong> United States</li>
                                                <li><strong>Neighbourhood:</strong> Miami</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="detail-features detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Features</h2>
                                            </div>
                                            <ul class="list-three-col list-features">
                                                <li><a href="#"><i class="fa fa-check"></i>Air Conditioning</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Barbeque</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Dryer</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Gym</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Laundry</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Lawn</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Microwave</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Outdoor Shower</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Refrigerator</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Sauna</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Swimming Pool</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>TV Cable</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Washer</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>WiFi</a></li>
                                                <li><a href="#"><i class="fa fa-check"></i>Window Coverings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="detail-list detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Detail</h2>
                                                <div class="title-right">
                                                    <p>Information last updated on 11/29/2015 12:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="alert alert-info">
                                                <ul class="list-three-col">
                                                    <li><strong>Property ID:</strong> HZ33</li>
                                                    <li><strong>Price:</strong> $670,000</li>
                                                    <li><strong>Property Size:</strong> 1200 Sq Ft</li>
                                                    <li><strong>Bedrooms:</strong> 4</li>
                                                    <li><strong>Bathrooms:</strong> 2</li>
                                                    <li><strong>Garage:</strong> 1</li>
                                                    <li><strong>Garage Size:</strong> 200 SqFt</li>
                                                    <li><strong>Year Built:</strong> 2016-01-09</li>
                                                </ul>
                                            </div>
                                            <div class="detail-title-inner">
                                                <h4 class="title-inner">Additional details</h4>
                                            </div>
                                            <ul class="list-three-col">
                                                <li><strong>Deposit:</strong> 20%</li>
                                                <li><strong>Pool Size:</strong> 300 Sqft</li>
                                                <li><strong>Last remodel year:</strong> 1987</li>
                                                <li><strong>Amenities:</strong> Clubhouse</li>
                                                <li><strong>Additional Rooms::</strong> Guest Bath</li>
                                                <li><strong>Equipment:</strong> Grill - Gas</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade">
                                        <div class="property-plans detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Floor plans</h2>
                                            </div>
                                            <div class="accord-block">
                                                <div class="accord-tab">
                                                    <h3>Floor Plan A</h3>
                                                    <ul>
                                                        <li>Size: <strong>1,234 sqft</strong></li>
                                                        <li>Beds: <strong>4</strong></li>
                                                        <li>Baths: <strong>3</strong></li>
                                                        <li>Price: <strong>$1,200/mo</strong></li>
                                                    </ul>
                                                    <div class="expand-icon active"></div>
                                                </div>
                                                <div class="accord-content" style="display: block">
                                                    <img src="images/floor-image.png" alt="img" width="400" height="436">
                                                </div>
                                                <div class="accord-tab">
                                                    <h3>Floor Plan B</h3>
                                                    <ul>
                                                        <li>Size: <strong>1,234 sqft</strong></li>
                                                        <li>Beds: <strong>4</strong></li>
                                                        <li>Baths: <strong>3</strong></li>
                                                        <li>Price: <strong>$1,200/mo</strong></li>
                                                    </ul>
                                                    <div class="expand-icon"></div>
                                                </div>
                                                <div class="accord-content">
                                                    <img src="images/floor-image.png" alt="img" width="400" height="436">
                                                </div>
                                                <div class="accord-tab">
                                                    <h3>Floor Plan C</h3>
                                                    <ul>
                                                        <li>Size: <strong>1,234 sqft</strong></li>
                                                        <li>Beds: <strong>4</strong></li>
                                                        <li>Baths: <strong>3</strong></li>
                                                        <li>Price: <strong>$1,200/mo</strong></li>
                                                    </ul>
                                                    <div class="expand-icon"></div>
                                                </div>
                                                <div class="accord-content">
                                                    <img src="images/floor-image.png" alt="img" width="400" height="436">
                                                </div>
                                            </div>
                                            <div class="detail-title-inner">
                                                <h4 class="title-inner">Property Documents</h4>
                                            </div>
                                            <ul class="document-list">
                                                <li>
                                                    <div class="pull-left">
                                                        <i class="fa fa-file-o"></i> Property plan PDF
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">DOWNLOAD</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pull-left">
                                                        <i class="fa fa-file-o"></i> Brochure PDF
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">DOWNLOAD</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade">
                                        <div class="property-video detail-block">
                                            <div class="detail-title">
                                                <h2 class="title-left">Video</h2>
                                            </div>
                                            <div class="video-block">
                                                <a href="https://www.youtube.com/watch?v=QK66RK7ogKU" data-fancy="property_video" title="YouTube demo">
                                                    <span class="play-icon"><img src="images/icons/video-play-icon.png" alt="YouTube demo" width="70" height="50"></span>
                                                    <img src="http://placehold.it/750x388" alt="thumb" class="video-thumb">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end tab-content-->
                            </div>
                            <!--end detail content tabber-->

                            <div class="detail-contact detail-block">
                                <div class="detail-title">
                                    <h2 class="title-left">Contact info</h2>
                                    <div class="title-right"><strong><a href="#">View my listing</a></strong></div>
                                </div>
                                <div class="media agent-media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="http://placehold.it/74x74" class="media-object" alt="image" width="74" height="74">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">CONTACT AGENT</h4>
                                        <ul>
                                            <li><i class="fa fa-user"></i> Kenneth Phllips</li>
                                            <li>
                                                <span><i class="fa fa-phone"></i> (987) 654 3210</span>
                                                <span><i class="fa fa-mobile"></i>  (987) 654 3210</span>
                                                <span><a href="#"><i class="fa fa-skype"></i>  kenneth.phllips</a></span>
                                            </li>
                                            <li>
                                                <span><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></span>
                                                <span><a href="#"><i class="fa fa-twitter-square"></i>  Twitter</a></span>
                                                <span><a href="#"><i class="fa fa-linkedin-square"></i>  Linkedin</a></span>
                                                <span><a href="#"><i class="fa fa-instagram"></i>  Linkedin</a></span>
                                                <span><a href="#"><i class="fa fa-pinterest-square"></i>  Linkedin</a></span>
                                                <span><a href="#"><i class="fa fa-globe"></i>  Linkedin</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="detail-title-inner">
                                    <h4 class="title-inner">Inquire about this propertys</h4>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Your Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Phone" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Location"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-secondary">Request info</button>
                                </form>
                            </div>

                            <div class="next-prev-block clearfix">
                                <div class="prev-box pull-left">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="http://placehold.it/99x99" class="media-object" alt="image" width="99" height="99">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <h3 class="media-heading"><a href="#"><i class="fa fa-angle-left"></i> PREVIOUS PROPERTY</a></h3>
                                            <h4>Villa For Sale</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-box pull-right">
                                    <div class="media">
                                        <div class="media-body media-middle text-right">
                                            <h3 class="media-heading"><a href="#">PREVIOUS PROPERTY <i class="fa fa-angle-right"></i></a></h3>
                                            <h4>Villa For Sale</h4>
                                        </div>
                                        <div class="media-right">
                                            <a href="#">
                                                <img src="http://placehold.it/99x99" class="media-object" alt="image" width="99" height="99">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
                        <aside id="sidebar">
                            <div class="widget widget-download">
                                <div class="widget-top">
                                    <h3 class="widget-title">Documents</h3>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                Property plan PDF
                                            </div>
                                            <div class="pull-right">
                                                <a href="#">DOWNLOAD</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                                Brochure PDF
                                            </div>
                                            <div class="pull-right">
                                                <a href="#">DOWNLOAD</a>
                                            </div>
                                        </li>
                                    </ul>
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
                            <div class="widget widget-pages">
                                <div class="widget-top">
                                    <h3 class="widget-title">Pages</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="children">
                                            <li><a href="#">Clearing Floats</a></li>
                                            <li><a href="#">Page Image Alignment</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About Houzez</a></li>
                                    <li><a href="#">Our Agents</a></li>
                                    <li><a href="#">Create Listing</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="widget widget_archive">
                                <div class="widget-top">
                                    <h3 class="widget-title">Archives</h3></div>
                                <ul>
                                    <li><a href="#">March 2016</a>&nbsp;(10)</li>
                                    <li><a href="#">January 2016</a>&nbsp;(1)</li>
                                    <li><a href="#">January 2013</a>&nbsp;(5)</li>
                                    <li><a href="#">March 2012</a>&nbsp;(5)</li>
                                </ul>
                            </div>
                            <div class="widget widget_meta">
                                <div class="widget-top">
                                    <h3 class="widget-title">Meta</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Site Admin</a></li>
                                    <li><a href="#">Log out</a></li>
                                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                </ul>
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
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!--end detail content-->

    </section>
    <!--end section page body-->

    <div id="lightbox-popup-main" class="fade">
        <div class="lightbox-popup">
            <div class="popup-inner">
                <div class="lightbox-left">
                    <div class="lightbox-header">
                        <div class="header-title">
                            <p>
                                <span>
                                    <img src="images/logo-houzez-white.png" width="86" height="13" alt="logo">
                                </span>
                                <span class="hidden-xs">
                                    Oceanfront Villa With Pool - 7601 East Treasure Drive, Miami Beach, FL 33141
                                </span>
                            </p>
                        </div>
                        <div class="header-actions">
                            <ul class="actions">
                                <li class="share-btn">
                                    <div class="share_tooltip tooltip_left fade">
                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                        <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                        <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-heart-o"></i></span>
                                </li>
                                <li class="lightbox-expand visible-xs compress">
                                    <span><i class="fa fa-envelope-o"></i></span>
                                </li>
                                <li class="lightbox-close">
                                    <span><i class="fa fa-close"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery-area">
                        <div class="slider-placeholder">
                            <div class="loader-inner">
                                <span class="fa fa-spin fa-spinner"></span> Loading Slider...
                            </div>
                        </div>
                        <div class="expand-icon lightbox-expand hidden-xs"></div>
                        <div class="gallery-inner">
                            <div class="lightbox-slide slide-animated">
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                                <div>
                                    <img src="http://placehold.it/1044x525" alt="Lightbox Slider" width="1044" height="525">
                                </div>
                            </div>
                        </div>
                        <div class="lightbox-slide-nav visible-xs">
                            <button class="lightbox-arrow-left lightbox-arrow"><i class="fa fa-angle-left"></i></button>
                            <p class="lightbox-nav-title">Luxury apartment bay view</p>
                            <button class="lightbox-arrow-right lightbox-arrow"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="lightbox-right fade in">
                    <div class="lightbox-header hidden-xs">
                        <div class="header-title">
                            <p>$575,000 or $21,000/mo</p>
                        </div>
                        <div class="header-actions">
                            <ul class="actions">
                                <li class="lightbox-close">
                                    <span><i class="fa fa-close"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="agent-area">
                        <div class="form-small">
                            <div class="agent-media-head">
                                <h4 class="head-left">Contact info</h4>
                                <a href="" class="head-right">View my listing</a>
                            </div>
                            <div class="media agent-media">
                                <div class="media-left">
                                    <a href="#">
                                        <img width="100" height="100" alt="image" class="media-object" src="http://placehold.it/100x100">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <dl>
                                        <dt>CONTACT AGENT</dt>
                                        <dd><i class="fa fa-user"></i> Brittany Watkins</dd>
                                        <dd><i class="fa fa-phone"></i> 321 456 9874</dd>
                                    </dl>
                                    <ul class="profile-social">
                                        <li><a class="btn-facebook" href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a class="btn-twitter" href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a class="btn-linkedin" href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a class="btn-google-plus" href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="form-small-title"> Inquire about this property </h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Location" rows="2" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-secondary btn-block">Request info</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE&amp;callback=initMap"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>


        var map = null;
        var panorama = null;
        var fenway = new google.maps.LatLng(25.762449, -80.188872);
        var mapOptions = {
            center: fenway,
            zoom: 12
        };
        var panoramaOptions = {
            position: fenway,
            pov: {
                heading: 34,
                pitch: 10
            }
        };
        var tabsHeight = function() {
            //jQuery(".detail-media .tab-content").css('min-height',jQuery("#gallery").innerHeight());
            jQuery("#map,#street-map").css('min-height',jQuery(".detail-media #gallery").innerHeight());
        };
        jQuery(window).on('load',function(){
            tabsHeight();
        });
        jQuery(window).on('resize',function(){
            tabsHeight();
        });
        function initialize() {

            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            panorama = new google.maps.StreetViewPanorama(document.getElementById('street-map'), panoramaOptions);
            map.setStreetView(panorama);
        }

        $('a[href="#map"]').on('shown.bs.tab', function (e) {
            var center = panorama.getPosition();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        $('a[href="#street-map"]').on('shown.bs.tab', function (e) {
            fenway = panorama.getPosition();
            panoramaOptions.position = fenway;
            panorama = new google.maps.StreetViewPanorama(document.getElementById('street-map'), panoramaOptions);
            map.setStreetView(panorama);
        });
        google.maps.event.addDomListener(window, 'load', initialize);


    </script>
</body>
</html>