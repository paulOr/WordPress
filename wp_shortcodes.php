<?php
	## CREATE CUSTOM SHORTCODES
	## [foobar param1="like this" param2="etc"]
	add_shortcode('foobar', function($atts) {
		$atts = shortcode_atts(
			array(
			'param1' => '',
			'param2' => '',
			'param3' => '',
			'blah....' => ''
		), $atts);
     
		// Print it
		echo '<div class="whatever"><h1>foobar</h1><p>'.$atts['param1'].'</p></div>';
	}
?>
