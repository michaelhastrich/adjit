(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		/* Toggle class 'active' voor hoofdmenu */
        $('.icon-menu').click(function (e) {
            $('#menu-mainmenu').toggleClass('active');
        e.preventDefault();
    });
		
	});
	
})(jQuery, this);
