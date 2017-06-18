@extends('layouts.app')
@section('title', 'Ninjer')
@section('content')
<div class="site">
            <header class="noo-header" id="noo-header">
                <div class="navbar-wrapper">
                    <div class="navbar navbar-default fixed-top shrinkable">
                        <div class="container-boxed max">
                            <div class="navbar-header">
                                <h1 class="sr-only">Ninjer</h1>
                                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
                                    <span class="sr-only">Navigation</span>
                                    <i class="fa fa-bars"></i>
                                </a>
                                <a class="navbar-toggle member-navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-user-navbar-collapse">
                                    <i class="fa fa-user"></i>
                                </a>
                                <a href="./" class="navbar-brand">
                                    <img class="noo-logo-img noo-logo-normal" src="images/logo-jobmonster.png" alt="">
                                    <img class="noo-logo-mobile-img noo-logo-normal" src="images/logo-mobile.png" alt="">
                                </a>
                            </div>
                            <nav class="collapse navbar-collapse noo-user-navbar-collapse">
                                <ul class="navbar-nav sf-menu">
                                    <li> <a href="#" class="member-links member-login-link" data-rel="loginModal"><i class="fa fa-sign-in"></i>Login</a> </li>
                                    <li> <a class="member-links member-register-link" href="#" data-rel="registerModal"><i class="fa fa-key"></i>Register</a></li>
                                </ul>
                            </nav>
                            <nav class="collapse navbar-collapse noo-navbar-collapse">
                                <ul class="navbar-nav sf-menu">
                                    <li class="current-menu-item align-left"> <a href="./">Home</a> </li>
                                    <li class="nav-item-member-profile login-link align-center">
                                        <a href="#" class="member-links member-login-link" data-rel="loginModal"> <i class="fa fa-sign-in"></i>&nbsp;Login </a>
                                    </li>
                                    <li class="nav-item-member-profile register-link">
                                        <a class="member-links member-register-link" href="#" data-rel="registerModal"> <i class="fa fa-key"></i>&nbsp;Register </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-wrap">
                <div class="main-content container-fullwidth">
                    <div class="row">
                        <div class="noo-main col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="noo-job-search-wrapper">
                                        <div class="job-search-bg-image"></div>
                                        <div class="job-advanced-search column-4">
                                            <div class="job-search-info text-center">
                                                <h2 class="search-main-title">Join us &amp; Explore Thousands of Missions Jobs</h2>
                                            </div>
                                            <div class="job-advanced-search-wrap" id="subscribe-form-handler">
                                                <form class="form-inline"> 
                                                    <div class="job-advanced-search-form">
                                                        <div class="form-group">
                                                            <label class="sr-only">Name</label>
                                                            <input type="text" class="form-control"   name="name"          id="name"       placeholder="Name"  required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="search-keyword">Email</label>
                                                            <input type="email"     class="form-control"   name="email"         id="email"      placeholder="Email Address" required>
                                                        </div>
                                                        <div class="form-group form-action">                            
                                                            <button type="submit" class="btn btn-primary btn-search-submit" style="text-align: center; color:white; font-size:16px">Subscribe</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-primary">
                                <div class="col-md-12">
                                    <div class="noo-step-icon clearfix">
                                        <ul class="noo-step-icon-3">
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-key noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title"><strong>1.Register an Account to Start</strong></span>
                                                    </a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-search-plus noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title"><strong>2. Specify and Search Desired Jobs</strong></span>
                                                    </a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="noo-step-icon-item">
                                                    <a href="#">
                                                        <span class="fa fa-comments noo-step-icon-class"></span>
                                                        <span class="noo-step-icon-title"><strong>3. Direct Contact Employers to Book Slots</strong></span>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-gray pt-10 pb-10">
                                <div class="col-md-12">
                                    <div class="noo-text-block">
                                        <h3 class="text-center" style="color:#1f2220">Who are ninjers</h3>
                                        <p class="text-center text-italic" style="padding: 0px 30px">
                                            You will be in our clan of ninjers once you have signed up. Then, you can browse mission jobs on our cart list. <br/> Choose prefer mission and contact directly with employers for assigned roles. The rest will be yours.
                                        </p>
                                    </div>
                                    <div class="container-boxed max" style="padding: 0px 30px">
                                        <div class="row pt-5 pb-2">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="noo-text-block">
                                                    <p>
                                                        <span class="text-primary pr-2">
                                                            <span class="noo-icon features-icon icon-circle">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                        </span>
                                                        <strong style="font-size: 17px">Direct Contact</strong><br/>
                                                        You can directly contact with employers within a minute and choose timeslots.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="noo-text-block">
                                                    <p>
                                                        <span class="text-primary pr-2">
                                                            <span class="noo-icon features-icon icon-circle">
                                                                <i class="fa fa-money"></i>
                                                            </span>
                                                        </span>
                                                        <strong style="font-size: 17px">Cash on spot</strong><br/>
                                                        No more waiting weeks to be paid. Employers will pay you in cash as soon as the job is done.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="noo-text-block">
                                                    <p>
                                                        <span class="text-primary pr-2">
                                                            <span class="noo-icon features-icon icon-circle"><i class="fa fa-star"></i></span>
                                                        </span>
                                                        <strong style="font-size: 17px">Awesome Jobs</strong><br/>We have a list of flexible jobs from hotels, bars, restaurants and many more.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
                    <!-- Job Posts -->
            <div class="row pt-10 pb-10 bg-white">
                <div class="container-boxed max">
                    <div class="col-md-12">
                        <div class="noo-tabs">
                            <div class="tab-control tab-control-right clearfix">
                                <ul class="nav nav-tabs" role="tablist" id="noo-tabs-2">
                                    <li><a role="tab" data-toggle="tab" href="#tab-1">Recent Jobs</a></li>
                                </ul>
                            </div>
                            <div class="tab-content clearfix">
                                <div class="tab-pane" id="tab-1">
                                    <div class="jobs posts-loop">
                                        <div class="posts-loop-title">
                                            <h3>
                                                We found <span class="text-primary">18</span> available job(s) for you
                                            </h3>
                                        </div>
                                        <div class="posts-loop-content">
                                            @foreach($recent_jobs as $job)
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Villa Senang"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">{{$job->job_role}}</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">{{$job->venue}}</a>
                                                            </span>
                                                            <span class="job-type contract">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Contract
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>{{$job->venue}}</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Aug 18, 2015 - Aug 31, 2015
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="/job/{{$job->id}}">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                           @endforeach
                                        </div>
                                        <div class="pagination list-center">
                                            <a href="#" class="prev page-numbers">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <a href="#" class="next page-numbers">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <div class="jobs posts-loop jobs-shortcode">
                                        <div class="posts-loop-title">
                                            <h3>
                                                We found <span class="text-primary">2</span> available job(s) for you
                                            </h3>
                                        </div>
                                        <div class="posts-loop-content">
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Wild West Company"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">Developer</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Wild West Company</a>
                                                            </span>
                                                            <span class="job-type part-time">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Part Time
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Amsterdam</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Aug 10, 2015 - Aug 24, 2015
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="noo_job hentry">
                                                <div class="loop-item-wrap">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="50" height="50" src="images/company/company_50x50.jpg" alt="Vincom Group"/>
                                                        </a>
                                                    </div>
                                                    <div class="loop-item-content">
                                                        <h2 class="loop-item-title">
                                                            <a href="#">Product Designer</a>
                                                        </h2>
                                                        <p class="content-meta">
                                                            <span class="job-company">
                                                                <a href="#">Vincom Group</a>
                                                            </span>
                                                            <span class="job-type full-time">
                                                                <a href="#">
                                                                    <i class="fa fa-bookmark"></i>Full Time
                                                                </a>
                                                            </span>
                                                            <span class="job-location">
                                                                <i class="fa fa-map-marker"></i>
                                                                <a href="#"><em>Berlin</em></a>
                                                            </span>
                                                            <span>
                                                                <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                    <i class="fa fa-calendar"></i>
                                                                    Jan 22, 2015 - Mar 17, 2016
                                                                </time>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="show-view-more">
                                                        <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                    </div>
                                                </div>
                                            </article>                                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Job Posts End -->
            <div class="colophon wigetized">
                <div class="container-boxed max">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="widget widget_text">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="textwidget">
                                    <p>
                                        Ninjer.Co<br/>
                                        Singapore<br/>
                                        http://www.ninjer.co<br/>
                                        <a href="mailto:email@ninjer.com">email@ninjer.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget widget_text">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="textwidget">
                                    <p>
                                        Ninjer.Co<br/>
                                        Singapore<br/>
                                        http://www.ninjer.co<br/>
                                        <a href="mailto:email@ninjer.com">email@ninjer.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget mailchimp-widget">
                                <h4 class="widget-title">NEWSLETTER</h4>
                                <form class="mc-subscribe-form">
                                    <label for="email">To know every new update from Ninjer, please subscribe and give us email address.</label>
                                    <div class="mc-email-wrap">
                                        <input type="email" id="email" name="mc_email" class="form-control mc-email" value="" placeholder="Enter email here..."/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="colophon site-info">
                <div class="container-full">
                    <div class="footer-more">
                        <div class="container-boxed">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="noo-bottom-bar-content">
                                        © 2017 Ninjer.co
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

        <script type='text/javascript' src='js/jmjs/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='js/jmjs/modernizr-2.7.1.min.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.cookie.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.blockUI.min.js'></script>
        <script type='text/javascript' src='js/jmjs/imagesloaded.pkgd.min.js'></script>
        <script type='text/javascript' src='js/jmjs/isotope-2.0.0.min.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jmjs/bootstrap.min.js'></script>
        <script type='text/javascript' src='js/jmjs/hoverIntent-r7.min.js'></script>
        <script type='text/javascript' src='js/jmjs/superfish-1.7.4.min.js'></script>
        <script type='text/javascript' src='js/jmjs/script.js'></script>
        <script type='text/javascript' src='js/jmjs/chosen.jquery.min.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.datetimepicker.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.parallax-1.1.3.js'></script>
        <script type='text/javascript' src='js/jmjs/jquery.carouFredSel-6.2.1-packed.js'></script>
        <script type='text/javascript' src='js/jmjs/custom.js'></script>
        <script>
            jQuery('document').ready(function ($) {
                $('#noo-slider-3 .sliders').carouFredSel({
                    infinite: true,
                    circular: true,
                    responsive: true,
                    debug : false,
                    items: { start: 0 },
                    scroll: {
                      items: 1,
                      duration: 400,
                      fx: "scroll"
                    },
                    auto: {
                      timeoutDuration: 3000,
                      play: true
                    },
                    pagination: {
                      container: "#noo-slider-3-pagination"
                    },
                    swipe: {
                      onTouch: true,
                      onMouse: true
                    }
                });
                $('#noo-tabs-2 a:eq(0)').tab('show');
            });
        </script>
        <div class="memberModalLogin modal fade" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-member">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body" id="login-form-handler">
                         
                            
                        <form method="POST" action="/auth">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h6>E-mail:</h6>
                            <input type="email" name="email" class="form-control" required placeholder="Email">
                            <h6>Password:</h6>
                            <input type="password" name="password" class="form-control" required placeholder="Password">
                            <br/>
                            <div class="form-actions form-group text-center">
                                <button type="submit" class="btn btn-default" style="text-align: center; color:white; font-size:16px">Login</button>
                            </div>
                            <!--
                            <div class="login-form-links">
                                    <span><a href="#"><i class="fa fa-question-circle"></i> Forgot Password?</a></span>
                                    <!--<span>
                                        Don't have an account yet? 
                                        <a href="#" class="member-register-link" data-rel="registerModal">
                                            Register Now <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </span>
                            </div>
                            -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="memberModalRegister modal fade" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-member">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body" id="sign-up-form-handler">
                        <form>
                            <h6>Name:</h6>
                            <input type="text" class="form-control" name="name"  id="name" placeholder="Name" required>
                            <h6>Age:<h6>
                            <input type="number" class="form-control" name="age"  id="age"  placeholder="Age" required>
                            <!--<h6>Birth Date:<h6>
                            <input type="Date"    class="form-control"   name="birthdate"           id="birthdate"      placeholder="Birth Date"    v-model="birthdate" required>-->
                            <h6>E-mail:</h6>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            <h6>NRIC:</h6>
                            <input type="text" class="form-control" name="nric" id="nric" placeholder="NRC Number" required>
                            <h6>Mobile:</h6>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                            <h6>Password:</h6>
                            <input type="password" class="form-control" name="password"  id="password" placeholder="Password" required>
                            <br/>
                            <div class="form-actions form-group text-center">                           
                                <button type="submit" class="btn btn-default" style="text-align: center; color:white; font-size:16px">Register</button>
                            </div>
                            <!--
                            <div class="login-form-links">
                                <span>By clicking this button, you agree to Ninjer's Policy & Terms of Use.</span>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection