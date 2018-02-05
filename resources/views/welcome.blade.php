<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Referral Pilot | Get Organic Leads</title>

        <link href="{{ asset('/oxygen/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/oxygen/css/animate.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/oxygen/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/oxygen/css/lightbox.css') }}" rel="stylesheet">
        <link href="{{ asset('/oxygen/css/main.css') }}" rel="stylesheet">
        <link id="css-preset" href="{{ asset('/oxygen/css/presets/preset1.css') }}" rel="stylesheet">
        <link href="{{ asset('/oxygen/css/responsive.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="{{ asset('/oxygen/js/html5shiv.js') }}"></script>
            <script src="{{ asset('/oxygen/js/respond.min.js') }}"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="{{ asset('/oxygen/images/favicon.ico') }}">
        
        <style>
            .carousel-inner {
                background: #000;
            }            
            .register {
                width: 100%;
                height: 40px;
            }
        </style>
        
    </head>
    <body>
        <!--.preloader-->
        <div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->

        <header id="home">
            <div id="home-slider" class="carousel slide  carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(/oxygen/images/slider/1.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig"><span>BET</span> ON YO<span>U</span></h1>
                            <p class="animated fadeInRightBig">Track Your Progress All The Way To Success</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact">Start now</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(/oxygen/images/slider/2.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig">It's time to <span>Grow</span></h1>
                            <p class="animated fadeInRightBig">Analyze Fitness, Finances, Education and Smash Goals</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact">Start now</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(/oxygen/images/slider/3.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig">Easy To Use <span>Tools</span></h1>
                            <p class="animated fadeInRightBig">Sign Up Today And Start Tracking Your Success Instantly</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact">Start now</a>
                        </div>
                    </div>
                </div>
                <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

            </div><!--/#home-slider-->
            
            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img id="img-logo" src="{{ asset('/oxygen/images/betu.png') }}" alt="logo">
                        <a class="navbar-brand" href="index.html">
                            <h1 id="logo"><span>BET</span> ON YO<span>U</span></h1>                            
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#services">Service</a></li> 
                            <li class="scroll"><a href="#about-us">About Us</a></li>                     
                            <li class="scroll"><a href="#pricing">Pricing</a></li>                            
                            <li class="scroll"><a href="#contact">Sign Up</a></li>
                            <li class=""><a href="{{ URL('/login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->
      
        <section id="services">
            <div class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h2>Grow Your Brand</h2>
                            <p>The Word of Mouth Marketing Association reports that every day in the United States, there are approximately 2.4 billion brand-related conversations. People frequently talk about the products and services they enjoy, and the companies who offer them.</p>
                        </div>
                    </div> 
                </div>
                <div class="text-center our-services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="fa fa-flask"></i>
                            </div>
                            <div class="service-info">
                                <h3>More Referrals</h3>
                                <p>People are 4 times more likely to buy when referred by a friend.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                            <div class="service-icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="service-info">
                                <h3>Quality Candidates</h3>
                                <p>92% of consumers trust referrals from people they know.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                            <div class="service-icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <div class="service-info">
                                <h3>Reliable Marketing</h3>
                                <p>Consumers rely on word-of-mouth 2x to 10x more than paid media.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                            <div class="service-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="service-info">
                                <h3>FREE Advertising</h3>
                                <p>55% of consumers share their purchases socially on Facebook, Twitter, Pinterest and other social sites.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                            <div class="service-icon">
                                <i class="fa fa-bitbucket"></i>
                            </div>
                            <div class="service-info">
                                <h3>Brand Awareness</h3>
                                <p>49% of U.S. consumers say friends and family are their top sources of brand awareness.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                            <div class="service-icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="service-info">
                                <h3>Increase Revenue</h3>
                                <p>74% of consumers identify word-of-mouth as a key influencer in their purchasing decision.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#services-->
      
        <section id="about-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>About us</h2>
                            <p>At Referral Pilot, we provide you with a set of tools that enable you to launch referral campaigns and track their progress.</p>
                            <p>Our mission is simple, get you more quality referrals. Referral Pilot is easy to use and FREE to create an account.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p class="lead">Facebook Fans Likely To Recommend</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <p class="lead">Likely To Share Positive Experience</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="58">58%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <p class="lead">Likely To Purchase Based On Social Media</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="71">71%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <p class="lead">Likely To Try Brand That Gives Rewards</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="69">69%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#about-us-->
        
        <section id="pricing">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                        <h2>Pricing Table</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="pricing-table">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h3>Basic</h3>
                                <div class="price">
                                    $9<span>/Month</span>                          
                                </div>
                                <ul>
                                    <li>Free Setup</li>
                                    <li>10GB Storage</li>
                                    <li>100GB Bandwith</li>
                                    <li>5 Products</li>
                                </ul>
                                <a href="#contact" class="btn btn-lg btn-primary">Sign up</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <h3>Standard</h3>
                                <div class="price">
                                    $19<span>/Month</span>                                
                                </div>
                                <ul>
                                    <li>Free Setup</li>
                                    <li>10GB Storage</li>
                                    <li>100GB Bandwith</li>
                                    <li>5 Products</li>
                                </ul>
                              <a href="#contact" class="btn btn-lg btn-primary">Sign up</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
                                <h3>Featured</h3>
                                <div class="price">
                                    $29<span>/Month</span>                                
                                </div>
                                <ul>
                                    <li>Free Setup</li>
                                    <li>10GB Storage</li>
                                    <li>100GB Bandwith</li>
                                    <li>5 Products</li>
                                </ul>
                                <a href="#contact" class="btn btn-lg btn-primary">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#pricing-->

        <section id="contact">
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Sign Up Now</h2>
                            <p>Register an account and get started building your first campaign. You'll be able to reach more customers, increase revenue, and do it all through your immediate network.</p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-md-3"></div> 
                            <div class="col-md-6">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Enter your first name" required autofocus>

                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Enter your last name" required autofocus>

                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter a password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="checkBox" type="checkbox" class="" name="terms_conditons" required> I have read and agree with the <a href="{!! URL::to('terms') !!}">Terms &amp; Conditions</a>.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="checkBox" type="checkbox" class="" name="terms_conditons" required> I have read and agree with the <a href="{!! URL::to('policy') !!}">Privacy Policy</a>.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary register">Register</button>
                                        </div>
                                    </div>
                                </form>   
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>        
        </section><!--/#contact-->
        
        <footer id="footer">
            <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container text-center">
                    <div class="footer-logo">
                        <img id="img-logo" src="{{ asset('/oxygen/images/betu.png') }}" alt="logo">
                        <a class="navbar-brand" href="index.html">
                            <h1 id="logo"><span>BET</span> ON YO<span>U</span></h1>                            
                        </a> 
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; {{ date("Y") }} BETU - <a href="{{ URL::to('terms') }}">Terms &amp; Conditions</a> - <a href="{{ URL::to('policy') }}">Privacy Policy</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="pull-right"></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="{{ asset('/oxygen/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/jquery.inview.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/mousescroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/smoothscroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/jquery.countTo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/lightbox.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/oxygen/js/main.js') }}"></script>

        @if ($errors->has('firstname') || $errors->has('lastname') || $errors->has('email') || $errors->has('password'))
        {
            <script>
                $('html, body').animate({
                    scrollTop: $("#contact").offset().top
                }, 0);
            </script>
        }
        @endif
        
    </body>
</html>