<?php
/*
Plugin Name: LinkedIn Perfect Share
Plugin URI: http://www.mircobabini.com/project/linkedin-perfect-share-plugin-for-wordpress/
Description: Provides precise Open Graph data to <b>LinkedIn for perfect sharing</b>
Author: Mirco Babini
Author URI: http://www.mircobabini.com/
Version: 1.0.0
*/

// Redirect to a preferred template.
function lin_share_template_redirect() {

	// detect linkedinbot
	if( stripos( $_SERVER['HTTP_USER_AGENT'], 'LinkedInBot' ) !== false ){

		// only for single pages - i love bloggers
		if( is_single() ){

			// get the simplified template
			$template_path = plugin_dir_path( __FILE__ ) . '/templates/' . "linkedin_template.php";
			if(file_exists($template_path)){
				include($template_path);
				exit;
			}

		}

	}

}
add_action('template_redirect', 'lin_share_template_redirect');
