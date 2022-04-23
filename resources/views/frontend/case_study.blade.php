@extends('frontend.layouts.main')

@section('main-container')
	<!-- Page Title Section -->
    <section class="page-title" style="background-image: url(images/background/pattern-16.png)">
		<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-17.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-18.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/cross-icon.png)"></div>
		<div class="auto-container">
            <h2>Case Study</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>case study</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						
						<!-- Search -->
						<!-- <div class="sidebar-widget search-box">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Search Here" required>
									<button type="submit"><span class="icon fa fa-search"></span></button>
								</div>
							</form>
						</div> -->
						
						<!-- Categories Widget -->
						<!-- <div class="sidebar-widget categories-widget">
							<div class="sidebar-title">
								<h4>Categories</h4>
							</div>
							<div class="widget-content">
								<ul class="blog-cat">
									<li><a href="#">Content Marketing <span>( 01 )</span></a></li>
									<li><a href="#">Social Marketing  <span>( 25 )</span></a></li>
									<li><a href="#">App Development <span>( 66 )</span></a></li>
									<li><a href="#">SEO Optimization <span>( 12 )</span></a></li>
									<li><a href="#">Web Development <span>( 11 )</span></a></li>
									<li><a href="#">PPC Advertising <span>( 02 )</span></a></li>
								</ul>
							</div>
						</div> -->
						
						<!-- Categories Widget -->
						<!-- <div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
								<h4>Recent Post</h4>
							</div>
							<div class="widget-content">
								<article class="post">
									<figure class="post-thumb"><img src="images/resource/resource/post-thumb-1.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<div class="text"><a href="news-detail.html">Google now disregards overlooks all links.</a></div>
									<div class="post-info">November 21, 2021</div>
								</article>
								<article class="post">
									<figure class="post-thumb"><img src="images/resource/resource/post-thumb-2.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<div class="text"><a href="news-detail.html">How to increase your ROI through scientific SEM?</a></div>
									<div class="post-info">November 28, 2021</div>
								</article>
								<article class="post">
									<figure class="post-thumb"><img src="images/resource/resource/post-thumb-3.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<div class="text"><a href="news-detail.html">A Guide to Google SEO <br> Algorithm Updates</a></div>
									<div class="post-info">December 04, 2021</div>
								</article>
							</div>
						</div> -->
						
						<!-- Author Widget -->
						<div class="sidebar-widget author-widget">
							<div class="widget-content" style="background-image: url(images/background/author-bg.jpg)">
								<div class="image">
									<img src="images/resource/resource/author-7.jpg" alt="" />
								</div>
								<div class="name">Pablo Villalpando</div>
								<div class="text">I got lucky because I never gave up the search. Are you quitting too soon? Or, are you willing to pursue luck with a vengeance?</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li><a href="#" class="fa fa-facebook-f"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-google"></a></li>
								</ul>
							</div>
						</div>
						
						<!-- Instagram Widget -->
						<div class="sidebar-widget instagram-widget">
							<div class="sidebar-title">
								<h4>Instagram</h4>
							</div>
							<div class="widget-content">
								<div class="clearfix">
									<figure class="post-thumb"><img src="images/resource/resource/instagram-1.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="images/resource/resource/instagram-2.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="images/resource/resource/instagram-3.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="images/resource/resource/instagram-4.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="images/resource/resource/instagram-5.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="images/resource/resource/instagram-6.jpg" alt=""><a href="news-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								</div>
							</div>
						</div>
						
						<!-- Popular Posts -->
						<div class="sidebar-widget popular-tags">
							<div class="sidebar-title">
								<h4>Tags</h4>
							</div>
							<div class="widget-content">
								<a href="#">Business</a>
								<a href="#">Marketing</a>
								<a href="#">SEO</a>
								<a href="#">SEO</a>
								<a href="#">SMM</a>
								<a href="#">Solution</a>
								<a href="#">Tips</a>
								<a href="#">Startup</a>
								<a href="#">Strategy</a>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
				
					<div class="row clearfix">
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-1.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="application_case_study.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="application_case_study.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="application_case_study.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="application_case_study.html">Google now disregards or overlooks all reciprocal links</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-2.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="application_case_study.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="application_case_study.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="application_case_study.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="application_case_study.html">Absolute Links vs. Relative Links – SEO Intrinsic Value</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-3.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="application_case_study.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="application_case_study.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="application_case_study.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="application_case_study.html">How to increase your ROI through scientific SEM?</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-1.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="application_case_study.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="application_case_study.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="application_case_study.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="application_case_study.html">Google now disregards or overlooks all reciprocal links</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-2.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="application_case_study.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="application_case_study.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="application_case_study.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="application_case_study.html">Absolute Links vs. Relative Links – SEO Intrinsic Value</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-3.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">How to increase your ROI through scientific SEM?</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-1.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">Google now disregards or overlooks all reciprocal links</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-2.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">Absolute Links vs. Relative Links – SEO Intrinsic Value</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-3.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">How to increase your ROI through scientific SEM?</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-1.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">Google now disregards or overlooks all reciprocal links</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-2.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">Absolute Links vs. Relative Links – SEO Intrinsic Value</a></h5>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="images/resource/resource/news-3.jpg" alt="" />
									<!-- Overlay Box -->
									<div class="overlay-box">
										<div class="overlay-inner">
											<div class="content">
												<a href="ui_ux_detail.html" class="icon flaticon-unlink"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-user"></span> Pablo Villalpando</a></li>
										<li><a href="ui_ux_detail.html"><span class="icon fa fa-calendar"></span> November 21, 2021</a></li>
									</ul>
									<h5><a href="ui_ux_detail.html">How to increase your ROI through scientific SEM?</a></h5>
								</div>
							</div>
						</div>
						
					</div>
					
					<!-- Post Share Options -->
					<!-- <div class="styled-pagination text-center">
						<ul class="clearfix">
							<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
							<li><a href="#">01</a></li>
							<li class="active"><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
						</ul>
					</div> -->
					
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Clients Section -->
    <section class="clients-section style-two">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Clients Section -->
@endsection