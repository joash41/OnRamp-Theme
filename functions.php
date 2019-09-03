<?php
	include_once('functions/wp-functions.php');
	function header_bc_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'hi-style',  get_template_directory_uri() .'/css/theme-style.css');
		wp_enqueue_style( 'fa-style',  get_template_directory_uri() .'/css/all.min.css');
		wp_enqueue_style( 'flickity-style',  get_template_directory_uri() .'/css/flickity.min.css');
		wp_enqueue_style( 'menu-icon-transition',  get_template_directory_uri() .'/css/menu-icon-transition.css');
		wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	}
	add_action( 'get_header', 'header_bc_scripts' );
	function footer_bc_scripts() {
		wp_enqueue_script( 'flickity', get_template_directory_uri() .'/js/flickity.pkgd.min.js');
		wp_enqueue_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal@4');
		wp_enqueue_script( 'google-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js');
		
	}
	add_action( 'get_footer', 'footer_bc_scripts' );
	
// Custom login screen for wp-admin
	function custom_loginlogo() {
		echo '<style type="text/css">
		h1 a {
			background-image: url('.get_template_directory_uri().'/images/logo.png) !important;
			background-size: 75% !important;
			height: 90px !important;
			width: 100% !important; }
		body{
			background: #fff !important;
			color: #fff !important;}
		.login form{
			background: #373a46 !important;
			border: 2px solid;}
		.login #login_error, .login .message, .login .success{
			color: #373a46 !important;}
		.login form label{
				color: #fff;}
		.login #login_error, .login .message, .login .success{
				background-color: transparent;}
		</style>';
	}
	add_action('login_head', 'custom_loginlogo');

//Registering Gutenberg Block Category
function jkg_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'onramp-blocks',
				'title' => __( 'OnRamp Blocks', 'onramp-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'jkg_block_category', 60, 2);

//Registering Gutenberg Blocks
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {
    // check function exists
    if( function_exists('acf_register_block') ) {
        // Info Blocks
		acf_register_block(array(
            'name'              => 'home_deets',
            'title'             => __('Home Details'),
			'description'       => __('Home Details'),
			'render_template'   => 'templates/parts/homepage/home-deets.php',
            'category'          => 'onramp-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'custom', 'block' ),
		));
		//  Home Solutions
		acf_register_block(array(
            'name'              => 'home_solutions',
            'title'             => __('Home Solutions'),
			'description'       => __('Home Solutions'),
			'render_template'   => 'templates/parts/homepage/home-solutions.php',
            'category'          => 'onramp-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'custom', 'block' ),
		));
		// Featured Post
		acf_register_block(array(
			'name'              => 'featured_post_block',
			'title'             => __('Featured Post'),
			'description'       => __('Featured Post'),
			'render_template'   => 'templates/parts/general/featured-post.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
		//  Home Logos
		acf_register_block(array(
			'name'              => 'home_logos',
			'title'             => __('Home Logos'),
			'description'       => __('Home Logos'),
			'render_template'   => 'templates/parts/homepage/home-logos.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
		//  Info and Screencast Block
		acf_register_block(array(
			'name'              => 'info-screencast',
			'title'             => __('Info and Screencast'),
			'description'       => __('Info and Screencast'),
			'render_template'   => 'templates/parts/info-screencast.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
		//  Row of Icons Block
		acf_register_block(array(
			'name'              => 'row-of-icons',
			'title'             => __('Row of Icons'),
			'description'       => __('Row of Icons'),
			'render_template'   => 'templates/parts/general/row-of-icons.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
		//  Systems Page Block
		acf_register_block(array(
			'name'              => 'system-accordians',
			'title'             => __('Image with Accordians'),
			'description'       => __('Image with Accordians'),
			'render_template'   => 'templates/parts/image-with-icons.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
        ));
        //  Content Slider Block
		acf_register_block(array(
			'name'              => 'content-slider',
			'title'             => __('Content Slider'),
			'description'       => __('Content Slider'),
			'render_template'   => 'templates/parts/solutions/content-slider.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
        //  Solution Content
		acf_register_block(array(
			'name'              => 'solution-content',
			'title'             => __('Solution Content'),
			'description'       => __('Solution Content'),
			'render_template'   => 'templates/parts/solutions/solution-content.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
        //  Solution Sub Content
		acf_register_block(array(
			'name'              => 'solution-sub-content',
			'title'             => __('Solution Sub Content'),
			'description'       => __('Solution Sub Content'),
			'render_template'   => 'templates/parts/solutions/solution-sub-content.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
        //  Solution Video
		acf_register_block(array(
			'name'              => 'solution-video',
			'title'             => __('Solution Video'),
			'description'       => __('Solution Video'),
			'render_template'   => 'templates/parts/solutions/solution-video.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
        //  Solution News
		acf_register_block(array(
			'name'              => 'solution-news',
			'title'             => __('Solution News'),
			'description'       => __('Solution News'),
			'render_template'   => 'templates/parts/solutions/solution-news.php',
			'category'          => 'onramp-blocks',
			'icon'              => 'admin-comments',
			'mode'              => 'edit',
			'keywords'          => array( 'custom', 'block' ),
		));
	}
}
//Excerpt Read More
    function wpdocs_excerpt_more( $more ) {
        if ( ! is_single() ) {
            $more = '';
        }
    
        return $more;
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// BC Theme Options
if( function_exists('acf_add_options_page') ) {
	$option_page = acf_add_options_page(array(
	'page_title'    => 'Theme Settings',
	'menu_title'    => 'Theme Settings',
	'menu_slug'     => 'Theme-settings',
	'capability'    => 'edit_posts',
	'icon_url' => get_template_directory_uri(). '/images/admin/bc-theme.png' ,
	'redirect'  => false,
	'position' => 2
	));
}