/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function() {
	var	$ =	jQuery;
	
	
	// Remove empty P tags created by WP inside of Accordion and Orbit
	$('.accordion p:empty, .orbit p:empty').remove();

	// Adds Flex Video to YouTube and Vimeo Embeds
	$('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(i, n) {
		var	$this =	$(n);
		
		if (($this.innerWidth() / $this.innerHeight()) > 1.5) {
			$this.wrap('<div class="widescreen responsive-embed"/>');
		} else {
			$this.wrap('<div class="responsive-embed"/>');
		}
	});

	var	$menuButton =	$('#menuButton');

	$menuButton.on('click', function(e) {
		e.preventDefault();
		
		$menuButton.addClass('is-active');
	});
	// Removes the x on the burger menu when off canvas is closed
	$('#off-canvas').on('closed.zf.offcanvas', function() {
		$menuButton.removeClass('is-active');
		// getInspectionTalk.removeClass('close-out');
	});

});