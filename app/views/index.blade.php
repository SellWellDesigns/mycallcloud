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
				MyCallCloud is a full-service software consulting firm.  We empower your business with expertise and technological solutions that revolutionize how contact centers connect with customers and how managers connect with employees.
			</p>
			<p>
				Our team was raised in the communications and technology industries; this is our professional passion.  Our constant pursuit of knowledge ensures that we can optimize the cost structure and increase the performance level of your existing technologies.
			</p>
			<p>
				By applying our knowledge of the industry into our own technology we have built an immensely robust system of intelligent technologies.  These powerful capabilities create reports with the accuracy and reliability you need to take action.
			</p>
			<p>
				MyCallCloud technologies ensure that every employee in your business, whether sitting in front of a desktop or relying on their smartphone, will always have the information they need in order to perform at the highest level.
			</p>
		</div>
	</div>

	<div id="solutions" class="homepage-section container">
		<div class="row">
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/cloud-call-center.png') }}" />
				<h3>Call Center</h3>
				<p>
					The MyCallCloud Call Center is an amazingly robust customizable suite of features, which incorporates blended dialing alongside CRM integration. Personalized dashboards derived from tested analytics create actionable reports for workers at any level of your company.
				</p>
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/voip-icon.png') }}" />
				<h3>VoIP</h3>
				<p>
					Our experience working with VoIP is as old as VoIP itself!  The reach of our seven national carrier networks, combined with our Localize technology, allows you to stay in contact with your customers with a local number, regardless of the originating region.
				</p>
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/hosted-pbx-icon.png') }}" />
				<h3>PBX</h3>
				<p>
					MyCallCloud Private Branch Exchange is the most powerful PBX available in the cloud.  Inbound and outbound dialing, mobile integration, video capabilities, SMS, and Click to Call technology are just a sampling of the available features Private Branch Exchange offers.
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/consulting-icon.png') }}" />
				<h3>Consulting</h3>
				<p>
					MyCallCloud knows that our success is fully dependent on providing our customers with the tools and solutions necessary to resolve even the most complex of problems. Our team will help you find the answers needed to optimize your cost and performance structures.
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
				<form class="form-horizontal" action="{{ route('contact.submit') }}" method="post">
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
					3459 Ringsby Ct<br />
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