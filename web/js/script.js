$(document).ready(function() { //Start up our Featured Project Carosuel
	$('#featured ul').roundabout({
		easing: 'easeOutInCirc',
		duration: 600
	});

	$('ul#folio_scroller').roundabout({
		easing: 'easeOutInCirc',
		shape: 'waterWheel',
		duration: 600
	});
});
