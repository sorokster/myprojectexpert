<?php

/* Setup Admin Landing */
if ( ! function_exists( 'myprojectxpert_setup' ) ) :
	function myprojectxpert_setup() {
		load_theme_textdomain( 'myprojectxpert' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );
		register_nav_menus( array(
			'primary' => __( 'Primary Menu',      'project' ),
			'social'  => __( 'Social Links Menu', 'project' ),
		) );

		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );

		add_theme_support( 'custom-logo', array(
			'height'      => 248,
			'width'       => 248,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'myprojectxpert_setup' );

/* Add jQuery */
function my_scripts_method(){
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
/* Add scripts & css */
function myprojectxpert_scripts() {

    // CSS
    //wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
	//wp_enqueue_style( 'bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'font-Lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900' );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_enqueue_style( 'reset_styles', get_template_directory_uri() . '/assets/stylesheet/reset.css', array(), '1.0.0' );
    wp_enqueue_style( 'main_styles', get_template_directory_uri() . '/assets/stylesheet/style.css', array(), '1.0.9' );
    wp_enqueue_style( 'owl_styles', get_template_directory_uri() . '/assets/stylesheet/owl.carousel.min.css', array(), '1.0.0' );
    
    // JS
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/lib/main.min.js', array(), null, true );
    wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/assets/lib/owl.carousel.min.js', array(), null, true );

    //Ajax
    wp_localize_script( 'ajax-js', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'myprojectxpert_scripts' );

// Add SVG Format
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
	

// Creates Writers Custom Post Type
function writers_init() {
    $args = array(
      'label' => 'Writers',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'writers'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array( 'title' )
        );
    register_post_type( 'writers', $args );
}
add_action( 'init', 'writers_init' );


// Creates Testimonials Custom Post Type
function testimonials_init() {
    $args = array(
      'label' => 'Testimonials',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonials'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array( 'title' )
        );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_init' );

// Add widgets
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer Info',
		'id'   => 'footer-info',
		'description'   => 'This is a footer info HTML Code.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer Copyright',
		'id'   => 'footer-copyright',
		'description'   => 'This is a footer copyright.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}

//Customizer
function myprojectxpert_customizer( $wp_customize ) {
    // Add Panel
    $wp_customize->add_panel( 'myprojectxpert_panel_page', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'title'          => 'Site data',
        'description'    => '',
    ));
    
    // Add Section Info
    $wp_customize->add_section(
        'myprojectxpert_section_info',
        array(
            'title'         => 'Contacts',
            'description'   => '',
            'priority'      => 10,
            'panel'         => 'myprojectxpert_panel_page'
        )
    );
    
    // Add Phone
    $wp_customize->add_setting( 'setting_info_phone' , array(
        'transport'     => 'postMessage'
    ));
    $wp_customize->add_control( 'setting_info_phone', array(
        'label'         => 'Phone',
        'section'       => 'myprojectxpert_section_info',
        'type'          => 'text'
    ));

    // Add Email
    $wp_customize->add_setting( 'setting_info_email' , array(
        'transport'     => 'postMessage'
    ));
    $wp_customize->add_control( 'setting_info_email', array(
        'label'         => 'Email',
        'section'       => 'myprojectxpert_section_info',
        'type'          => 'text'
    ));	
}

add_action( 'customize_register', 'myprojectxpert_customizer' );