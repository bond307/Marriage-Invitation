
(function ($) {
	'use strict';

	jQuery(document).ready(function ($) {

		// Video Init
		$(document).ready(function() {
		    if (!($("html").hasClass("mobile"))) {
		        $(".player").mb_YTPlayer();
		    }
		});

	});

})(jQuery);