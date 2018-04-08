<?php

	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('animate', get_parent_theme_file_uri('assets/css/lib/animate.css'), null, null, null);
		wp_register_style('bootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', null, null, null);
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), null, null, null);

		/* Enqueue Scripts */
		wp_enqueue_style('animate');
		wp_enqueue_style('bootstrapmin');
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>
