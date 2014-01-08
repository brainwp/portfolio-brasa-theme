// JavaScript Document

jQuery(function() {
    jQuery('#foo2').carouFredSel({
        prev: '#prev2',
        next: '#next2',       
		items: 1,
		circular: true,
		fx: 'fade',
		auto: {
			delay: 3000,
		},
		scroll		: {
			fx: "directscroll",
			easing: "swing",
			duration: 1200,
		}
    });
});
