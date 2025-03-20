<?php

function add_scripts() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri() );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], '3.6.0', true );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

function custom_post_types() {

    register_post_type('news', [
        'labels' => [
            'name' => 'Новости',
            'singular_name' => 'Новость'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
    
    register_post_type('events', [
        'labels' => [
            'name' => 'События',
            'singular_name' => 'Событие'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

}

add_action('init', 'custom_post_types');

function ajax_data(){
	$data = [
		'url' => admin_url( 'admin-ajax.php' ),
	];
	?>
	<script id="ajax_data">
		window.ajax = <?= wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) ?>
	</script>
	<?php
}

add_action( 'wp_head', 'ajax_data');

require_once(get_template_directory() . '/ajax/registration.php');

add_action('wp_ajax_registration', 'ajax_registration');
add_action('wp_ajax_nopriv_registration', 'ajax_registration');

require_once(get_template_directory() . '/ajax/authorization.php');

add_action('wp_ajax_authorization', 'ajax_authorization');
add_action('wp_ajax_nopriv_authorization', 'ajax_authorization');

require_once(get_template_directory() . '/ajax/search.php');

add_action('wp_ajax_search', 'ajax_search');
add_action('wp_ajax_nopriv_search', 'ajax_search');