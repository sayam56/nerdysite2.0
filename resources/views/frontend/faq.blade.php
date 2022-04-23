@extends('frontend.layouts.main')

@section('main-container')
	<!-- Page Title Section -->
    <section class="page-title" style="background-image: url(images/background/pattern-16.webp)">
		<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.webp)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-17.webp)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-18.webp)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/cross-icon.webp)"></div>
		<div class="auto-container">
            <h2>FAQs</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
				<li>FAQs</li>
			</ul>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Faq Page Section -->
	<section class="faq-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Some FAQs</div>
				<h2>Wondering Something?</h2>
				<div class="text">Check out our compilation of Frequently Asked Questions down below!</div>
			</div>
			<div class="row clearfix">
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					
					<ul class="accordion-box">
						<!--Block-->
						<li class="accordion block active-block">
							<div class="acc-btn active">How do I avail your service? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content current">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">If you want to avail yourself of any of our services, you can reach out to us via our <a href="https://www.facebook.com/nerdevolution.tech/" target="_blank">Facebook</a> or <a href="https://instagram.com/nerdevolution.tech" target="_blank"> Instagram</a> page. You can also <a href="mailto:admin@nerdevolution.tech"> e-mail</a> us regarding any queries. Our expert team will respond to you as soon as they can.</div>
								</div>
							</div>
						</li>

						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">Will you publish my identity or other information if I avail of your service? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">We respect your privacy. We will neither use nor publish any of your information without your permission. Your identity will be kept private. Have a look at our <a href="./privacy.html"> Privacy Policy </a>to learn more.</div>
								</div>
							</div>
						</li>

						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">How do you guarantee your product quality? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">
										We have an expert team for each of our services. They are experienced in their respective fields and know what they are doing. Each of our products has to pass our QA team’s test. Once it gets the green signal, we deliver it to you. Again, we have a scope of revisions and provide every correction that you ask for. Delivering quality service is our prime target.
									</div>
								</div>
							</div>
						</li>
						
						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">Why should I choose you and not hire myself a team? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">
										Hiring your team is a great idea unless you have enough time to recruit them thoroughly and are capable of bearing the cost of having an in-house team.
										On the other hand, we deliver whatever you ask for. This is why we arrange client sessions for every service where we have a thorough discussion regarding your requirements. We also have an after-sales service where we provide revisions and corrections as per your demand.
									</div>
								</div>
							</div>
						</li>
						
					</ul>
					
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					
					<ul class="accordion-box">
						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">Are there any testimonials from any of your satisfied customers? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">Of course, we do. We understand your concern and so, we are happy to earn your trust by showing you what our satisfied customers think about us. Take a look at our client reviews.</div>
								</div>
							</div>
						</li>

						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">What are your services? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">We provide a variety of services which include <a href="./software-solutions.html" target="_blank" rel="noopener noreferrer">Software Solutions</a>, <a href="./graphics-design.html" target="_blank" rel="noopener noreferrer">Graphics Design</a>, and <a href="./functional-resume.html" target="_blank" rel="noopener noreferrer">Functional CV</a> services. To learn more, check out our <a href="./services.html" target="_blank" rel="noopener noreferrer">Services</a> section.</div>
								</div>
							</div>
						</li>

						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">Do you arrange client sessions? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">Yes, we arrange client sessions before all the services that require it. We try to deliver the product as per your requirements. Having that in mind, we arrange such sessions where we talk to our clients and clarify all the queries from both sides.</div>
								</div>
							</div>
						</li>
						
						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">Are SEO meta tags important? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text" style="text-align: justify; text-justify: inter-word;">Google has said for years that the most important single factor to them is high quality content. Now more than ever, they have the ability. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers.</div>
								</div>
							</div>
						</li>
						
						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">I don’t have any clear idea about application development, but I need an application. Can I still avail your services? <div class="icon flaticon-right-arrow-1"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text">It’s a big YES! We welcome your experience if you have any, but we will be delighted to guide you through the whole workflow and working process. All you need to do is tell us your requirements and needs, and we will be there with your desired product.</div>
								</div>
							</div>
						</li>
						
					</ul>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Faq Page Section -->
	
	<!-- Faq's Form Section -->
    <section class="faq-form-section">
        <div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Your Questions</div>
							<h2>Ask The Nerds Any Question </h2>
							<div class="text">We appreciate you clearing out your queries. Ask us without hesitation.</div>
						</div>
						
						<!-- Faq's Form -->
                        <div class="faq-form">
                            <form method="post" action="sendQuestion.php">
                                <div class="form-group">
                                    <input type="text" name="username" value="" placeholder="Name" required>
                                </div>
                                    
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Email" required>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="Query"></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-three"><span class="txt">Send Question</span></button>
								</div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image titlt" data-tilt data-tilt-max="3">
							<img src="images/resource/faq.webp" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Faq's Form Section -->
@endsection