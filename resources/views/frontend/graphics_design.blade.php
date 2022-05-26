@extends('frontend.layouts.main')

@section('main-container')
	<!-- Page Title Section -->
    <section class="page-title" style="background-image: url({{url('frontend/images/background/pattern-16.webp')}})">
		<div class="pattern-layer-one" style="background-image: url({{url('frontend/images/main-slider/pattern-1.webp')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{url('frontend/images/background/pattern-17.webp')}})"></div>
		<div class="pattern-layer-three" style="background-image: url({{url('frontend/images/background/pattern-18.webp')}})"></div>
		<div class="pattern-layer-four" style="background-image: url({{url('frontend/images/icons/cross-icon.webp')}})"></div>
		<div class="auto-container">
            <h2>Graphics Design</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Graphics Design</li>
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
								<img src="{{url('frontend/images/Services/design.webp')}}" alt="" />
							</div>
							<div class="lower-content">
								<h3>Why Graphical Illustrations Are Important?</h3>
								<p style="text-align: justify; text-justify: inter-word;">
									People believe what they see. Thus, having some alluring illustrations attract more and more clients.
									For example, customers look at the logo to get an idea about the business, because logos reflect your story and represent your business. Furthermore, when someone visits a website or uses an application, they judge it based on its UI and UX.
								</p>
								<h4>Features</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									The first part of our graphics design service holds the brand designing part.
									Our creative designers will arrange sessions with our clients to know the story and requirements of the client. Based on that, we will deliver ten sketches along with a color board from where you can choose the logo that you love the most. <br>
									In addition, we offer several bonus services such as invoices, business cards, banners, etc. which can be availed of as add-ons to the logo service.
									Another part of the graphics design service is the UI/UX design part. You can get your UI designed for your website or mobile application. We will have a client session here as well to have a clear idea about your brand.
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="{{url('frontend/images/Services/service-sub-illustration/Brand Design.webp')}}" alt="" />
											</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h4>Brand Design</h4>
											<p style="text-align: justify; text-justify: inter-word;">
												We will arrange a client session where we will discuss your requirements in order to reflect your story on the logo. Keeping your requirements in mind, we will provide ten sketches and a color board.
											 	NerdEvolution will also provide essential services that a new business require e.g.: invoices, business cards, banners, etc. as add-ons.
											</p>
										</div>
									</div>
								</div>
								<h4>UI/UX Design</h4>
								<p style="text-align: justify; text-justify: inter-word;">
									The primary goal of any application is to attract clients to that brand. And to do so, a great UI/UX is a must to enhance the growth of the brand.
								</p>
								<div class="two-columns">
									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<p style="text-align: justify; text-justify: inter-word;">
												We have an expert team with vast experience in the UI/UX sector. We provide user-friendly UI/UX that enables users to navigate through the application smoothly. Our designs will guarantee an improved ROI and will increase customer satisfaction. Hence, we will help you build your brand.
											</p>
											<p style="text-align: justify; text-justify: inter-word;">
												The experience that our team has lets us understand the market, and therefore, we know what people need. We share our views with our customers during the client session and merge them with their requirements, which allows us to create an incredible product! Undoubtedly, it will be a journey worth remembering.
											</p>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<div class="image">
												<img src="{{url('frontend/images/Services/service-sub-illustration/Ui Ux Design.webp')}}" alt="" />
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
