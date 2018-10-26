<?php 
/**
 * [including_stylesheet connecting with the stylesheet]
 * @return [type] [stylesheet urls]
 */
function including_stylesheet(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action ('wp_enqueue_scripts','including_stylesheet');

add_action ( 'after_setup_theme', 'register_my_menu' );

add_theme_support ( 'post-thumbnails' ); 

/**
 * [register_my_menu to register the menu]
 * @return [type] [nav menu]
 */
function register_my_menu () {
	register_nav_menu( 'primary', __( 'Primary Menu', 'wordpresslearn' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'wordpresslearn' ) );

}

/**
 * [add_custom_post_type :to add custom field type footer] 
 */
function add_custom_post_type () {
	$label = array(
		'name'				=>	'Footer',
		'singular-name'		=>	'Footer'
	);

	$args = array(
		'labels'			=>	$label,
		'public'			=>	true,
		'has_archive'		=>	true,
		'publicly_querable'	=>	true,
		'query_var'			=>	true,
		'rewrite'			=>	true,
		'capability_type'	=>	'post',
		'hierarchical'		=>	false,
	);
	//register_post_type('Footer',$args); //this helps to show the name in the dashboard
}

add_action ('init','add_custom_post_type');

/**
 * [add_banner_title_meta_box :to add meta box] 
 */
function add_banner_title_meta_box () {
	add_meta_box( 'banner_title', 'Banner Title', 'banner_title_callback','page' ,'side','high');
	add_meta_box( 'button_name', 'Button Name', 'button_name_callback','post' ,'side','high');
}

/**
 * [banner_title_callback :to print the field name with value in backend]
 * @param  [type] $post [to print the field name with value in backend
 * @return [type]       [HTML]
 */
function banner_title_callback ($post) {
	wp_nonce_field('save_banner_title_data','banner_title_nonce');

	$value=get_post_meta($post->ID,'banner_title_key',true);

	echo '<input type="text" name="banner-title-field" id=banner-title-field value="' . $value . '" />';
}
add_action ( 'add_meta_boxes','add_banner_title_meta_box' );

/**
 * [save_banner_title_data description]
 * @param  [type] $post_id [to save in the database]
 * @return [type]          [boolean]
 */
function save_banner_title_data($post_id){
	if (isset ( $_POST['banner-title-field'] ) ) {
		$data=$_POST['banner-title-field'];

		update_post_meta ($post_id,'banner_title_key',$data);
	}
}

add_action ('save_post','save_banner_title_data');

function add_button_meta_box () {
	add_meta_box ( 'button_name', 'Button Name', 'button_name_callback','post' ,'side','high');
}

function button_name_callback ($post) {
	wp_nonce_field ('save_button_name_data','button_name_nonce');

	$value = get_post_meta($post->ID,'button_name_key',true);

	echo '<input type="text" name="button-name-field" id=button-name-field value="' . $value . '" />';
}
add_action ( 'add_meta_boxes','add_button_meta_box' );
 
/**
 * [save_banner_title_data description]
 * @param  [type] $post_id [to save in the database]
 * @return [type]          [boolean]
 */
function save_button_name_data ($post_id) {
	if(isset($_POST['button-name-field'])){
		$data=$_POST['button-name-field'];

		update_post_meta($post_id,'button_name_key',$data);
	}
}

add_action('save_post','save_button_name_data');

/**
	 * [vr_dump var_dump function]
	 * @param  [type] $data [variables]
	 * @return [type]       [arrays]
	 */
function vr_dump ($data){
	echo "<pre>";
	var_dump($data); // or var_dump($data);
	echo "</pre>";
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mytheme_widgets_init () {
	register_sidebar ( array(
		'name'          => __( 'Left Sidebar', 'mytheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'mytheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar ( array(
		'name'          => __( 'Footer', 'mytheme' ),
		'id'            => 'footer-1',
		'description'   => __( 'footer text widget.', 'mytheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

add_image_size('img-260X190',260,190,true);

add_image_size('img-280X350',280,350,true);