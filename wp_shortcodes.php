<?php
	##
	## CUSTOM SHORTCODES
	##
	
	function foo_func($atts) {
		extract(shortcode_atts(array(
			'name' => '',
			'show' => ''
		), $atts));
		return '<p>whatever '.$atts['name'].'</p>';
	}
	add_shortcode('foobar', 'foo_func');

?>
