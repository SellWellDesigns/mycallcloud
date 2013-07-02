@extends('layouts.site')

@section('header')
	@parent

	<div id="header-image">
		<img src="{{ asset('img/carousel-back.jpg') }}" />
	</div>
@stop

@section('content')
	<div id="about" class="homepage-section white-content">
		<div class="container">
			<h1>About Us</h1>
			<p class="lead">
				Telephony with Integrity
			</p>
			<p>
				MyCallCloud is a full-service software-consulting firm that empowers your business with the knowledge, technology and services to reach your customers with the right message at the right time.
			</p>
			<p>
				Our team was raised in the communications and technology industries; this has been and will be our professional passion.				
			</p>
			<p>
				By applying our knowledge of the industry into our own technology we have built an immensely robust system that is responsive across devices and was designed with the everyday user in mind.  Every employee in your business; from the C-Suites to the call center operator will find enormous functionality, powerful analytics, and actionable reports.  Simplifying workflow, increasing efficiency.
			</p>
		</div>
	</div>

	<div id="services" class="homepage-section container">
		<div class="row">
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/cloud-call-center.png') }}" />
				<h3>Call Center</h3>
				<p>
					The MyCallCloud Call Center is an amazingly robust customizable suite of features. Incorporating blended dialing along side CRM integration through an open API. Personalized dashboards derived from tested analytics create actionable reports from the operator to the manager, and Direct to the C Suite. 
				</p>
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/voip-icon.png') }}" />
				<h3>VoIP</h3>
				<p>
					Our experience working with VoIP is as old as VoIP itself, we’ve paid our dues and have the connections to back it up!  Our seven national carrier networks reach when combined with our LocalTouch technology allows you to stay in contact with your customers regardless of region and with a local number.
				</p>
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/hosted-pbx-icon.png') }}" />
				<h3>PBX</h3>
				<p>
					MyCallCloud Private Branch Exchange contains the capabilities to be the most powerful Private Branch Exchange in the cloud.  Inbound/Outbound dialing, mobile integration, video capabilities, SMS, and Click to Call are just a handful of features you’ll find in our proprietary technology.
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/consulting-icon.png') }}" />
				<h3>Consulting</h3>
				<p>
					MyCallCloud knows that our success is fully dependent on providing our customers with the tools and practices to resolve even your most complex problems.  Our team was raised in this field and understands the issues at hand.  Working in conjunction with our technology products the MyCallCloud team will find the answer you need.
				</p>
				<hr class="visible-sm" />
			</div>
		</div>
	</div>	
@stop



@section('footer')
	<div id="contact" class="container homepage-section">
		<h1>Contact Us</h1>

		<div class="row">

			<div class="col col-lg-6">
				<form class="form-horizontal" action="/contact" method="post">
					<fieldset>

						<div class="control-group">
							<label class="control-label">Name</label>
							<div class="controls">
								<input type="text" name="name" placeholder="Your Name" />
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input type="text" name="email" placeholder="Email Address" />
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Phone</label>
							<div class="controls">
								<input type="text" name="phone" placeholder="Phone Number (optional)" />
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Message</label>
							<div class="controls">
								<textarea name="comment" rows="8" placeholder="What's Up?"></textarea>
							</div>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-info btn-large">
								<span class="glyphicon glyphicon-envelope"></span>
								Send
							</button>
						</div>

					</fieldset>
				</form>
			</div>

			<div class="contact-info col col-lg-6">
				<address>
					<strong>MyCallCloud</strong><br />
					3511 Ringsby Ct Unit 105<br />
					Denver, CO 80216<br />
					<abbr title="Phone">P:</abbr> 888-663-0760<br />
					<abbr title="Email">E:</abbr> <a href="mailto:sales@mycallcloud.com">sales@mycallcloud.com</a>
				</address>

				<div id="map-canvas" class="hidden-sm"></div>
			</div>

		</div>
	</div>

	@parent
@stop