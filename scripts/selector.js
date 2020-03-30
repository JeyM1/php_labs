$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
		$('#mob-menu').toggleClass('open');
		$('.back-layer').fadeToggle('fast');
	});
});

$(window).resize(function(){
	const vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	if(vw && vw >= 992) {
		$('#nav-icon1').removeClass('open');
		$('#mob-menu').removeClass('open');
		$('.back-layer').fadeOut();
	}
})