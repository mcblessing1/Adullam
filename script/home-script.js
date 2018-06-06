$(document).ready(function () {
	console.log("DOM is ready");
	//When menu button is clicked, hide menu links
	$('#menu-button').click(function () {
		console.log("#menu-button is clicked");
		$(".menu-links").toggleClass("is-hidden");
	});
});

//.toggle( effect [, options ] [, duration ] [, complete ] )