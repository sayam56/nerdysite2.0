@extends('frontend.layouts.main')

@section('main-container')
	<!-- Page Title Section -->
    <section class="page-title" style="background-image: url(images/background/pattern-16.webp)">
		<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.webp)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-17.webp)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-18.webp)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/cross-icon.webp)"></div>
		<div class="auto-container">
            <h2>Functional CV</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">home</a></li>
				<li>Functional CV</li>
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
						
						<!-- Services -->
                        <div class="sidebar-widget">
                            <ul class="service-list">
                                <li><a href="services.html"><span class="color-layer"></span>All Services</a></li>
                                <li ><a href="software-solutions.html"><span class="color-layer"></span>Software Solutions</a></li>
                                <li><a href="graphics-design.html"><span class="color-layer"></span>Graphics Design</a></li>
                                <li class="current"><a href="functional-resume.html"><span class="color-layer"></span>Functional CV</a></li>
								<li><a href="brand_identity.html"><span class="color-layer"></span>Brand Identity</a></li>
								<li  ><a href="ui_ux_design.html"><span class="color-layer"></span>UI/UX Design</a></li>
								<li><a href="social_media_marketing.html"><span class="color-layer"></span>Social Media Marketing</a></li>
							
                            </ul>
                        </div>
						
						<!-- Broucher Widget -->
                        <div class="broucher-widget">
                            <div class="widget-content" style="background-image: url(images/background/pattern-19.jpg)">
								<h3>Download <br> Our Brochures</h3>
								<div class="icon flaticon-pdf-1"></div>
								<div class="text">Business is a marketing discipline focused on growing visibility in organic (non-paid) technic required.</div>
								<a href="#" class="download">Click here to download</a>
							</div>
						</div>
						
						<!-- Help Widget -->
                        <div class="help-widget">
							<div class="widget-content">
							<h4>Want to see more ?</h4>
							<a class="see-work-wrap" href="projects.html">
								<div class="see-work">
                                    <div class="see-arrow"><i class="fa fa-arrow-right"></i></div>
									<div class="see-work-link">View Our Work</div>
								</div>
							</a>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                	<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="./images/Services/resume.webp" alt="" />
							</div>
							<div class="lower-content">
								<h3>Why Functional CV Is Important?</h3>
								<p>
									First impressions matter. The resume you submit is what speaks about you. The recruiters don’t know who you are unless they have your CV in their hands. That resume reflects who you are, and that’s what creates your very first impression. Make it count.
								</p>
								<h4>Features</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									NerdEvolution can help you nail your CV. We offer a Functional CV service, which includes both PDF and HTML resumes.
									We provide an inventory full of unique templates made by our creative design team. You can choose from those marvelous templates and have your CV ready. <br>
									Want to have your own design? No worries, because you will get the chance to make your unique CV. Our expert team will discuss your demands and deliver whatever you ask for.
									We care for our customers even after delivering our product. You will have the chance to make multiple revisions and keep it updated. <br>
									
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="images/Services/service-sub-illustration/PDF CV.webp" alt="" />
											</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4>PDF Functional CV</h4>
											<p style="text-align: justify; text-justify: inter-word;">
												Interestingly, you will find several companies offering you the same designs! But the templates that NerdEvolution offers are designed by our team.
												You also have the mobility to make a custom designed CV made just for you. We will listen to your requirements and provide you <em>ten</em> sketches to choose from.
											</p>
										</div>
									</div>
								</div>
								<h4>HTML Resume</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									If you are from a creative or technical background, you certainly need an HTML resume. You might have lots of projects or other activities and certifications to show your recruiters. You will not be able to flaunt those in a PDF resume. 
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<p style="text-align: justify; text-justify: inter-word;">
												On the other hand, if you create an HTML CV, you will have hyperlinks that will contain all the details of that specific project. You will have your entire portfolio in just a page along with attractive hover animations to make sure the important bits catch the recruiter's eyes.
											</p>
											<p style="text-align: justify; text-justify: inter-word;">
												Just like the PDF CV service, we will provide both single-column and double-column CV templates to choose from. You can also have us create an exclusive design just for you.
											</p>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="images/Services/service-sub-illustration/HTML CV.webp" alt="" />
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
	<!-- End Sidebar Page Container -->
@endsection