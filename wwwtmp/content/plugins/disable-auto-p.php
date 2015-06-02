<?php
/**
	* Plugin Name: Disable AutoP
	* Author: David Walsh
	* Author URI: http://davidwalsh.name/
	* Plugin URI: http://davidwalsh.name/disable-autop
	* Version: 0.1
	* Description: Disable WordPress' horrible automatic formatting
*/

remove_filter('the_content', 'wpautop');
