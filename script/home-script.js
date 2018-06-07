$(document).ready(function () {
	console.log("DOM is ready");
	//When menu button is clicked, hide menu links
	$('#menu-button').click(function () {
		console.log("#menu-button is clicked");
		$(".menu-links").toggleClass("is-hidden");
	});
	
//	$('.fa-bell').click(function () {
//		$('.notifs-box').toggleClass('notifs-is-hidden');
//	});
});