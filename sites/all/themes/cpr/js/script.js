/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {
	
	jQuery(document).ready(function($) {

		$('#search-btn').click(function() {
		  $('#search-section').slideToggle( "fast" );
		});

		$('#tablet-btn').click(function() {
		  $('#tablet-nav').slideToggle( "fast" );
		});

		$('#mobile-btn').click(function() {
		  $('#mobile-nav').slideToggle( "fast" );
		});

		$('#firstTab').click(function() {
		  $('#firstTab').css({ "color": "#0094BF", "border-top": "1px solid #0094BF" });
		  $('#secondTab').css({ "color": "#333333", "border-top": "1px solid #333333" });
		  $('#main-left-column').show();
		  $('#main-right-column').hide();
		});

		$('#secondTab').click(function() {
		  $('#secondTab').css({ "color": "#0094BF", "border-top": "1px solid #0094BF" });
		  $('#firstTab').css({ "color": "#333333", "border-top": "1px solid #333333" });
		  $('#main-right-column').show();
		  $('#main-left-column').hide();
		});

		$.simpleWeather({
		    location: 'Prince Rupert, BC',
		    woeid: '9395',
		    unit: 'c',
		    success: function(weather) {
		   	  html = '<a href="http://weather.princerupert.ca"><span class=icon-'+weather.code+'></span> '+weather.temp+'&deg;'+weather.units.temp+'</a>';
		      $("#weather").html(html);
		    },
		    error: function(error) {
		      $("#weather").html('<p>'+error+'</p>');
		    }
		});

		$("a[class=video-link]").click(function() {
		   	var $url = $(this).attr("rel");
		   
		   	jwplayer("video").setup({
		   		file: $url,
		        width: "100%",
		        aspectratio: "16:9"
		   	});
		});
	});

})(jQuery, Drupal, this, this.document);
