<?php
/*
Plugin Name: WordPress Toolbar Collapse
Plugin URI: https://github.com/Arty2/wp-toolbar-collapse
Description: A tiny WordPress plugin that collapses the Toolbar (previously known as Admin Bar) with pure CSS. Once installed, hover with the mouse or tap on top of your website to view it. The static Toolbar also works as a reminder that you’re logged-in, so don’t forget to *Log Out* on public computers.
Author: Heracles Papatheodorou
License: MIT License
GitHub Plugin URI: https://github.com/Arty2/wp-toolbar-collapse
Version: 1.0.1
*/

	function wp_toolbar_collapse() {
		echo '<style type="text/css" media="screen">html{margin-top:0!important}#wpadminbar{top:-32px;border-bottom:32px solid transparent;-moz-background-clip:padding;-webkit-background-clip:padding;background-clip:padding-box;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-transition:top .3s;-moz-transition:top .3s;transition:top .3s;-webkit-transition-delay: 1s;-moz-transition-delay: 1s;transition-delay: 1s;} #wpadminbar:hover{top:0;-webkit-transition-delay: 0.1s;-moz-transition-delay: 0.1s;transition-delay: 0.1s;}</style>
		<style type="text/css" media="screen and (max-width: 782px)">#wpadminbar{top:-46px;border-bottom-width:46px;}</style>';
	}
	add_action( 'wp_head', 'wp_toolbar_collapse', 9999 );

?>