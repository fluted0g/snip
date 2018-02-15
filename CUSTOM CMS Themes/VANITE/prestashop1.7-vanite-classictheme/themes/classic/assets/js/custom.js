/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

$(document).ready( function() {
	
	var $isHome, $triggers;
	$isHome = $.find(".page-home");
	$triggers = $.find(".js-show-home");

	if ($isHome.length <= 0) {
		$($triggers).hide();
	} else {
		$($triggers).show();
	}
	
});
  
  