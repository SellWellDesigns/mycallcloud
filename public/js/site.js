(function(exports, $){

	//document ready
	$(function(){

		/**
		 ***************************************
		 * Cached Globals
		 ***************************************
		 */
		var $window, $body, $document;

		$window   = $(window);
		$document = $(document);
		$body     = $('body');

		/**
		 * Tooltips
		 **/
		$('[title]').tooltip();

		/**
		 * Carousel
		 **/
		$('#carousel').carousel();

		//hack to get navbar-toggle working??
		$('.navbar-toggle').on('click', function(){  });

		/**
		 * Testimonial Slideshow
		 */
		// var 
		// 	i = 0,
		// 	quotes = $('#testimonials blockquote')
		// ;
		// quotes.not(quotes.eq(0)).hide().removeClass('hide');
		// setInterval(function(){
		// 	$(quotes[i]).fadeOut(function()
		// 	{
		// 		i++;
		// 		if(i >= quotes.length) i = 0;
		// 		$(quotes[i]).fadeIn();
		// 	});
		// }, 5000);

		/**
		 * Contact Form
		 */
		$('#contact form').on('submit', function(e)
		{
			e.preventDefault();

			var
				self   = $(this),
				data   = self.serialize(),
				action = self.attr('action')
			;

			self.fadeOut();
			
			var sending = $('<div class="alert text-center" style="margin-top: 50px;" />').html('<i class="glyphicon glyphicon-envelope"></i><br />sending message...');

			sending.insertAfter(self);

			$.post(action, data, function(response)
			{
				sending
					.fadeOut()
					.addClass('alert-success')
					.html('<i class="glyphicon glyphicon-ok"></i><br />message sent!')
					.fadeIn();
			});

			return false;
		});

		/**
		 * Google Map
		 */
		var map;
		var ringsbyct = new google.maps.LatLng(39.772131,-104.981948);

		var MY_MAPTYPE_ID = 'custom_style';

		function initialize() {

		  var featureOpts = [
		    {
		      stylers: [
		        { hue: '#58cdf8' },
		        { visibility: 'simplified' },
		        { gamma: 0.5 },
		        { weight: 0.5 }
		      ]
		    },
		    {
		      elementType: 'labels',
		      stylers: [
		        { visibility: 'on' }
		      ]
		    },
		    {
		      featureType: 'water',
		      stylers: [
		        { color: '#58cdf8' }
		      ]
		    }
		  ];

		  var mapOptions = {
		    zoom: 15,
		    center: ringsbyct,
		    mapTypeControlOptions: {
		      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		    },
		    mapTypeId: MY_MAPTYPE_ID
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);

		  var styledMapOptions = {
		    name: 'Custom Style'
		  };

		  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

		  var image = '/img/MCC_app_logo_button.png';
		  var myLatLng = new google.maps.LatLng(39.772131,-104.981948);
		  var beachMarker = new google.maps.Marker({
		      position: myLatLng,
		      map: map,
		      icon: image
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);

	});//end document ready

}(this, jQuery));