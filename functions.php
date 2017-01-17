<?php

	register_nav_menu( 
		'primary', __( 'Primary Menu', 'new-age' ) 
	);


	add_action('after_setup_theme', 'remove_admin_bar');

	function remove_admin_bar() {
		//if (!current_user_can('administrator') && !is_admin()) {
		  show_admin_bar(false);
		//}
	}


	// Include files

	require_once 'inc/wp_bootstrap_navwalker.php';
?>