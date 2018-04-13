<?php

	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		wp_deregister_script('jquery-migrate');

		if (is_page('blog')) {
			/* Register Scripts */
			wp_register_script('jquery3','https://code.jquery.com/jquery-3.3.1.min.js', null, null, true);
			// wp_register_script('jquery-migrate', get_theme_file_uri('assets/js/lib/jquery-migrate.min.js'), array('jquery3'), null, true);
			wp_register_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', null, null, true);
			wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, true);
			wp_register_script('bootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, true);
			wp_register_script('menub', get_theme_file_uri('assets/js/scriptmenub.js'), null, null, true);
			wp_register_script('mainJS', get_theme_file_uri('assets/js/script.js'), null, null, true);
		}

		/* Register Scripts */
		//wp_register_script('jquery2', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', null, null, true);
		wp_register_script('jquery3','https://code.jquery.com/jquery-3.3.1.min.js', null, null, true);
		wp_register_script('jquery-migrate', get_theme_file_uri('assets/js/lib/jquery-migrate.min.js'), array('jquery3'), null, true);
		wp_register_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', null, null, true);
		wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, true);
		wp_register_script('bootstrapmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, true);
		wp_register_script('menui', get_theme_file_uri('assets/js/scriptmenui.js'), null, null, true);
		wp_register_script('mainJS', get_theme_file_uri('assets/js/script.js'), null, null, true);



		// if (is_page('blog')) {
		// 	wp_enqueue_script('menub');
		//
		// } else {
		// 	wp_enqueue_script('menui');
		//
		// }


		/* Enqueue Scripts */
    wp_enqueue_script('jquery3');
		wp_enqueue_script('fontawesome');
		wp_enqueue_script('popper');
		wp_enqueue_script('bootstrapmin');
		wp_enqueue_script('mainJS');
		wp_enqueue_script('menui');
		wp_enqueue_script('menub');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>
