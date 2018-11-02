<?php 
/**
 * [including_stylesheet connecting with the stylesheet]
 * @return [type] [stylesheet urls]
 */
function including_stylesheet(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_script( 'comment-reply' );
}

add_action ('wp_enqueue_scripts','including_stylesheet');

add_action ( 'after_setup_theme', 'register_my_menu' );

add_theme_support ( 'post-thumbnails' );

function including_assets_backend() {
	wp_enqueue_style('admin-style',  get_template_directory_uri().'/assets/css/admin-style.css');
	wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js');
}

add_action('admin_init', 'including_assets_backend'); 

/**
 * [register_my_menu to register the menu]
 * @return [type] [nav menu]
 */
function register_my_menu () {
	register_nav_menu( 'primary', __( 'Primary Menu', 'wordpresslearn' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'wordpresslearn' ) );

}

/**
 * [add_custom_post_type :to add custom field type gallery] 
 */
function add_custom_post_type () {
	$label = array(
		'name'					=>	'Gallery',
		'singular-name'			=>	'Gallery',
		'set_featured_image'	=>	'Add Image',
		'remove_featured_image'	=>	'Remove Image',
		'all_items' 			=>	'All Images',
		'add_new' 				=>	'Add New Image',
		'search_items'			=>	'Search Images',
		'not_found'				=> 	'No Images'
	);

	$args = array(
		'labels'				=>	$label,
		'public'				=>	true,
		'has_archive'			=>	true,
		'publicly_queriable'	=>	true,
		'query_var'				=>	true,
		'rewrite'				=>	true,
		'capability_type'		=>	'post',
		'hierarchical'			=>	false,
		'exclude_from_search'	=>	true,
		'supports'				=> array(
			'title',
			'editor',
			'thumbnail'),
	);
	register_post_type('Gallery',$args); //this helps to show the name in the dashboard
}

add_action ('init','add_custom_post_type');

/**
 * [add_banner_title_meta_box :to add meta box] 
 */
function adding_meta_box () {
	add_meta_box( 'banner_title', 'Banner Title', 'banner_title_callback','page' ,'side','high');
	add_meta_box( 'button_name', 'Button Name', 'button_name_callback','post' ,'side','high');
	//add_meta_box ( 'caption', 'Caption', 'caption_callback','Gallery' ,'side');
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

function button_name_callback ($post) {
	wp_nonce_field ('save_button_name_data','button_name_nonce');

	$value = get_post_meta($post->ID,'button_name_key',true);

	echo '<input type="text" name="button-name-field" id=button-name-field value="' . $value . '" />';
}
add_action ( 'add_meta_boxes','adding_meta_box' );

/**
 * [save_button_title_data description]
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
function vr($data){
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
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

/**
 * adding image thumbnail
 */
add_image_size('img-260X190',260,190,true);

add_image_size('img-280X350',280,350,true);

function the_excerpt_modify() {
	return "";
}
//add_filter('the_excerpt', 'the_excerpt_modify' );

// create custom plugin settings menu
add_action('admin_menu','my_theme_options_plugin_menu');

 //call register settings function
add_action( 'admin_init', 'register_theme_option_settings' );


function my_theme_options_plugin_menu(){

	// add_menu_page('Theme Option', 'Theme Option','administrator', 'theme_option_setting_page');

	add_menu_page('Theme Option', 'Theme Option', 'administrator', __FILE__, 'theme_option_setting_page'  );
}

function register_theme_option_settings() {
	register_setting( 'my-theme-options-group', 'theme_logo' ); 
	
}

function theme_option_setting_page () {?>
	<div class="wrap">
		<h2>Theme Option</h2>
		<?php settings_errors(); ?>
		<form method="post" action="options.php">
			<?php settings_fields( 'my-theme-options-group' ); ?>
			<?php do_settings_sections( 'my-theme-options-group' ); ?>
			<div class="form-group">
				<label for="theme_logo">Logo Image : </label>
				<input type="file" id="testfile" name="theme_logo" id="Uploadfile" value="<?php echo esc_url( get_option('theme_logo') ); ?>">
				<label id="button">Choose File</label>
				<span id="val">
					<?php
					if(get_option('theme_logo')==""){
						echo 'No File Selected.';
					}else{ 
						echo esc_attr( get_option('theme_logo'));  
					} ?>
				</span>
			</div>
			<div class="form-group">
				<?php submit_button(); ?>
			</div>
<!-- 
			<input type="hidden" id="logo_url" name="theme_wptuts_options[logo]" value="<?php echo esc_url( $get_option('theme_logo')); ?>" />
			<input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'wptuts' ); ?>" />
			<?php if ( '' != $wptuts_options['logo'] ): ?>
				<input id="delete_logo_button" name="theme_wptuts_options[delete_logo]" type="submit" class="button" value="<?php _e( 'Delete Logo', 'wptuts' ); ?>" />
			<?php endif; ?>
			<span class="description"><?php _e('Upload an image for the banner.', 'wptuts' ); ?></span> -->
		</form>
	</div>
	<?php
}

/**
 * [set_post_per_page to change default setting]
 * @param [type] $query [description]
 */
function custom_pre_get_posts( $query ) {
	// print_r( $query );
	if ( ! is_admin() && is_post_type_archive( 'gallery' ) ) {
		$query->set( 'posts_per_page',10 );
	}
	if (! is_admin() && $query->is_search ) {
		$query->set('post_type', 'post');
	}
}
add_action( 'pre_get_posts', 'custom_pre_get_posts' );
?>

