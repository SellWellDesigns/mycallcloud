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
				
			</p>
			<p>
				
			</p>
		</div>
	</div>

	<div id="services" class="homepage-section container">
		<div class="row">
			<div class="col col-lg-4 text-center">
				<i class="glyphicon glyphicon-refresh"></i>
				<h3>Responsive Design</h3>
				<p>
					Our website is an example of a responsive design; try resizing the browser to watch how the website responds to a different viewport size. Responsive design ensures that your website will provide the best viewing experience, regardless of what type of device it is viewed from: Desktop, laptop, tablet, or mobile.
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-4 text-center">
				<i class="glyphicon glyphicon-globe"></i>
				<h3>Usability</h3>
				<p>
					When powerful functionality meets intelligent design a product becomes truly usable. We consider ourselves students of usability; our love lays in the never-ending chase of its perfection. Usability ensures that regardless if it is the CEO or the first time visitor, their experience with the product is natural and effective.
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-4 text-center">
				<i class="glyphicon glyphicon-retweet"></i>
				<h3>Agile Workflow</h3>
				<p>
					A house is not built in a single step, nor should a website! Construction of a house is done one phase at a time, followed by an inspection to ensure quality. Construction of a premium website is analogous; by breaking the development process down into several phases with each being followed up by an inspection by the client.
				</p>
			</div>
		</div>
	</div>	

	<div id="team" class="homepage-section container">
		<h1>Meet Our Team</h1>

		<div class="row">
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/conar.jpg') }}" class="img-circle" />
				<p class="lead">
					Conar Welsh
					<small>
						Founder<br />
						Director of Web Development
					</small>
				</p>
				<p>
					Conar has experience designing custom web solutions for Fortune 500 companies, 
					as well as start-ups and small businesses.  It is his passion for web development, 
					the agile workflow model, and lean startup principles that led him to a single conclusion: 
					that we could build better products, with better processes, and love doing it at every stage.  
					Conar is an open-source evangelist and is a regular contributor to open-source projects.
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/barrett.jpg') }}" class="img-circle" />
				<p class="lead">
					Barrett Seller
					<small>
						Co-Founder<br />
						Director of Marketing
					</small>
				</p>
				<p>
					Barrett was raised in Evergreen and Boulder County. 
					His Degrees in Political Science and Psychology from the University 
					of Colorado Denver naturally landed a position in marketing.  Pursuing 
					this new field with passion he quickly advanced to Director of 
					Marketing responsible for several medicinal brands.   Family and friends 
					come first on his priority list but right on their heels are Broncos Football 
					and Music at Red Rocks!
				</p>
				<hr class="visible-sm" />
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/evan.jpg') }}" class="img-circle" />
				<p class="lead">
					Evan Dubicki
					<small>
						Partner<br />
						Director of Sales
					</small>
				</p>
				<p>
					Evan grew up in the suburbs of Philadelphia.  
					From a young age and thanks to one horrible boss, he knew 
					he wanted to run his own business.  After receiving a Small 
					Business Management degree he successfully started and sold 
					two companies working with some of the world’s largest automakers.  
					After moving to Colorado, a new challenge was needed; he is excited 
					to utilize his skill set in the ever-changing world of web development.
				</p>
			</div>
			<div class="col col-lg-3 text-center">
				<img src="{{ asset('img/meaghan.jpg') }}" class="img-circle" />
				<p class="lead">
					Meaghan Mulcahy
					<small>
						Project Manager
						<br />
						&nbsp;
					</small>
				</p>
				<p>
					Meaghan was raised in Aurora, Colorado, 
					but her roots and heart are in Honolulu, Hawai&#699;i.  
					She earned her bachelors degree from Colorado State University, 
					and is currently earning her masters degree at the University 
					of Colorado.  Past project management experience in the web 
					technology and development areas led her to join Sell Well Designs, LLC.  
					Meaghan enjoys traveling the world, sleeping in late, and avoiding large crowds.
				</p>
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
					3459 Ringsby Ct #114<br />
					Denver, CO 80216<br />
					<abbr title="Phone">P:</abbr> (303) 586-1456<br />
					<abbr title="Email">E:</abbr> <a href="mailto:info@mycallcloud.com">info@mycallcloud.com</a>
				</address>

				<div id="map-canvas" class="hidden-sm"></div>
			</div>

		</div>
	</div>

	@parent
@stop