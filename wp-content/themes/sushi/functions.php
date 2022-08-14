<?php
/**
 * sushi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sushi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sushi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sushi, use a find and replace
		* to change 'sushi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sushi', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'sushi' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sushi_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sushi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sushi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sushi_content_width', 640 );
}
add_action( 'after_setup_theme', 'sushi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sushi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sushi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sushi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sushi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sushi_scripts() {
	wp_enqueue_style( 'sushi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sushi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sushi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sushi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// chienHD

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 255, 154, true ); // default Post Thumbnail dimensions (cropped)
}


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



// Add Meta Box to post
add_action( 'add_meta_boxes', 'woo_add_title_meta_box' );

function woo_add_title_meta_box() {
    add_meta_box( 'my-title-box', 'Tiêu đề nhỏ', 'my_title_box_func', array('product'), 'normal', 'high' );
}

function my_title_box_func($post) {
	$wooSubtitle = get_post_meta($post->ID, 'woo_my_subtitle', true);
	?>
	<input type="text" name="woo_my_subtitle" value="<?php echo $wooSubtitle; ?>" style="width:100%;">
	<?php
}

// Save Meta Box values.
add_action( 'save_post', 'woo_title_meta_box_save' );

function woo_title_meta_box_save( $post_id ) {
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return; 
    }
    if( !current_user_can( 'edit_post' ) ){
        return; 
    }

    if(isset($_POST['woo_my_subtitle'])) {
        $wooSubtitle = $_POST['woo_my_subtitle'];
    }

    update_post_meta( $post_id, 'woo_my_subtitle', $wooSubtitle);
}

/*mon an ngon tab sushi*/
add_action( 'wp_ajax_get_monanngon_content', 'get_monanngon_content' );
add_action( 'wp_ajax_nopriv_get_monanngon_content', 'get_monanngon_content' );

function get_monanngon_content() {
  	$paged = intval( $_POST['page'] );
  	$terms = $_POST['terms'];
 	$args = array(
 		'posts_per_page' => 9,
 		'post_type' => 'product',
 		'paged' => $paged,
 		'tax_query' => array(
 			array(
 				'taxonomy' => 'product_cat',
 				'field' => 'slug',
 				'terms' => $terms,
 			)
 		)
 	);

 	$query = new WP_Query($args);
 	if ($query->have_posts()) {
 		$i = 0;
 		while ($query->have_posts()) {
 			$query->the_post();
 			if($i == 8) {
 				get_template_part( 'template-parts/content', 'monanngon-style-2' );
 			} else {
 				get_template_part( 'template-parts/content', 'monanngon-style-1' );
 			}
 			$i++;
 		}
 	}
    wp_reset_postdata();
  die();
}

/*end on an ngon tab sushi*/


// Our custom post type function
function customer_reviews_posttype() {
  
    register_post_type( 'customer_reviews',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cảm nhận khách hàng' ),
                'singular_name' => __( 'Cảm nhận khách hàng' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'customer_reviews'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'customer_reviews_posttype' );

// Add Meta Box customer reviews
add_action( 'add_meta_boxes', 'customer_review_meta_box' );

function customer_review_meta_box() {
    add_meta_box( 'customer_review_metabox_star', 'Khách hàng đánh giá', 'customer_review_metabox_star_func', array('customer_reviews'), 'normal', 'high' );
}

function customer_review_metabox_star_func($post) {
	$star = get_post_meta($post->ID, 'customer_star', true);
	$name = get_post_meta($post->ID, 'customer_name', true);
	?>
	<label>
		Tên khách hàng: 
		<input type="text" name="customer_star" value="<?php echo $star; ?>" style="width:100%;">
	</label>
	<label>
		Sao đánh giá: 
		<input type="text" name="customer_name" value="<?php echo $star; ?>" style="width:100%;">
	</label>
	
	
	<?php
}

// Save Meta Box values.
add_action( 'save_post', 'customer_review_meta_box_save' );

function customer_review_meta_box_save( $post_id ) {
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return; 
    }
    if( !current_user_can( 'edit_post' ) ){
        return; 
    }

    if(isset($_POST['customer_star'])) {
        $postStar = $_POST['customer_star'];
        update_post_meta( $post_id, 'customer_star', $postStar);
    }
    if(isset($_POST['customer_name'])) {
        $postName = $_POST['customer_name'];
        update_post_meta( $post_id, 'customer_name', $postName);
    }
}

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = '<img src="'.esc_url(get_template_directory_uri()).'/assets/images/next-arrow.png">';
	return $defaults;
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10, 0);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper_end', 10, 0);


add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'More Information 111' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Ratings 111' );				// Rename the reviews tab
	$tabs['additional_information']['title'] = __( 'Product Data 11' );	// Rename the additional information tab

	return $tabs;

}

/**
 * Change a currency symbol
 */
// add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

// function change_existing_currency_symbol( $currency_symbol, $currency ) {
//      switch( $currency ) {
//           case 'VND': $currency_symbol = 'đ/1ps'; break;
//      }
//      return $currency_symbol;
// }

// mini cart

function custom_override_checkout_fields( $fields )    
{
	unset($fields['billing']['billing_email']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_last_name']);
	unset($fields['shipping']['shipping_company']);
	unset($fields['shipping']['shipping_country']);
	unset($fields['shipping']['shipping_company']);
	unset($fields['shipping']['shipping_address_2']);
	unset($fields['shipping']['shipping_postcode']);
	unset($fields['shipping']['shipping_last_name']);
	unset($fields['shipping']['shipping_city']);
	return $fields;
}
add_filter('woocommerce_checkout_fields','custom_override_checkout_fields');