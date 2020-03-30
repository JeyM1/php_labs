$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
		$("#mob-menu").toggleClass("open");
		$(".back-layer").fadeToggle('fast')
	});

});