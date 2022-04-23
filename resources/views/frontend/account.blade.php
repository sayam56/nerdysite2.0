@extends('frontend.layouts.main')

@section('main-container')
<!-- Page Title Section -->
    <section class="page-title" style="background-image: url(images/background/pattern-16.webp)">
		<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.webp)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-17.webp)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-18.webp)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/cross-icon.webp)"></div>
		<div class="auto-container">
            <h2>Login / Register</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Account</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="form-title">
                        <h2>Login Now</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="/">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Enter Mail id *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-two"><span class="txt">login</span></button>
                                </div>
                                <div class="form-group social-links-two pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                                </div>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="form-title">
                        <h2>Register Here</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post" action="/">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-two"><span class="txt">Register here</span></button>
                                </div>
                                <div class="form-group submit-text pull-right">
                                	* You must be a free registered to submit content.
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--End Register Section-->
@endsection