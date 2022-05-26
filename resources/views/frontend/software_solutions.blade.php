@extends('frontend.layouts.main')

@section('main-container')
	<!-- Page Title Section -->
    <section class="page-title" style="background-image: url({{url('frontend/images/background/pattern-16.webp')}})">
		<div class="pattern-layer-one" style="background-image: url({{url('frontend/images/main-slider/pattern-1.webp')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{url('frontend/images/background/pattern-17.webp')}})"></div>
		<div class="pattern-layer-three" style="background-image: url({{url('frontend/images/background/pattern-18.webp')}})"></div>
		<div class="pattern-layer-four" style="background-image: url({{url('frontend/images/icons/cross-icon.webp')}})"></div>
		<div class="auto-container">
            <h2>Software Solutions</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Software Solutions</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title Section -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!-- Sidebar Side -->
                @include('frontend.layouts.sidebar')

				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                	<div class="service-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{url('frontend/images/Services/development.webp')}}" alt="" />

							</div>
							<div class="lower-content">
								<h3>Why Do You Need An Application?</h3>
								<p style="text-align: justify; text-justify: inter-word;">
									Convenience matters. Customers nowadays search for either a web or mobile application while searching for any service provider company Applications are essential to establish credibility and build trust. They contain all the ins and outs of the business, and customers find it convenient. As it’s all about the experience that people seek, having an application is mandatory.
								</p>
								<h4>Student-Friendly Features</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									NerdEvolution is offering various packages of web application and mobile application services. You will have the flexibility of customizing your package based on how many pages you want for your application.
									We provide a UI-UX design service. We offer mobile applications compatible with both <b>IOS</b> and <b>Android</b>. You can also get a web version of the app if you want to. <br>
									Our expert teams will have sessions with you and note all your requirements. We will deliver whatever you ask.
									Most importantly, we render amazing maintenance service. Even after we deliver the product, you can come back to us if there is any issue. It surely will be an experience to remember.
									NerdEvolution also provides student-friendly source codes. Students can use these source-codes in order to complete their personal as well as academic works.
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="{{url('frontend/images/Services/service-sub-illustration/APP Dev.webp')}}" alt="" />
											</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4>Mobile Applications</h4>
											<p style="text-align: justify; text-justify: inter-word;">
												We provide cross-platform mobile applications which are optimized for both <b>IOS</b> and <b>Android</b> devices. We always try to ensure the convenience factor. You will get a very efficient UX and an outstanding UI, thanks to our creative design team.
												Most importantly, we will ensure robust security for the product delivered.
											</p>
										</div>
									</div>
								</div>
								<h4>Web Applications</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									People seek convenience and experience, and you can ensure it by having a website. NerdEvolution is here to render web application services.
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<p style="text-align: justify; text-justify: inter-word;">
												We provide mobile responsive web applications. We will optimize the web app for both computers and mobile phones. It will be self-navigating, and thus, the experience will be worth remembering. Great server uptime along with fast speed for the website is our goal.
											</p>
											<p style="text-align: justify; text-justify: inter-word;">
												Our expert team is good at error handling. We also provide a robust security system to protect the application. We do not stop there, we also provide a month of free maintenance after the product is delivered. Our customers will also have the option to extend the service with some additional cost.
											</p>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="{{url('frontend/images/Services/service-sub-illustration/Web Dev.webp')}}" alt="" />
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

	<!-- Clients Section -->
	<!-- Comment BY MOHAMMAD ALI HERA -->
    <!-- <section class="clients-section style-two">
        <div class="auto-container">

            <div class="sponsors-outer">

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
    </section> -->
    <!-- End Clients Section -->
@endsection
