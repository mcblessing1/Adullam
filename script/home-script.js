$(document).ready(function () {
	//When menu button is clicked, hide menu links
	$('#menu-button').click(function () {
		$("#book").slideUp("slow", function () {});
	});

});
