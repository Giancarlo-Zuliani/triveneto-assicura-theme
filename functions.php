<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

function script_custom(){
    wp_register_script( 'popper',  'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '', true );
    wp_enqueue_script( 'popper' );
    wp_enqueue_script( 'bootstrap' );  
}

function custom_style(){
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );   
    wp_enqueue_style('slick'  ,"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array() ); 
}

function get_reading_time($txt){
    
    $length = strlen($txt);
            if($length > 500 && $length < 1000 ){
                return '3 minuti';
            }elseif ($length < 500){
                return '2 minuti';
            }else{
                return '5 minuti';
            };
}

add_action('wp_enqueue_scripts' , 'script_custom' , 10);
add_action('wp_enqueue_scripts' , 'custom_style');

function api_function_load_more($data){
    $page = $data['page'];
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => '3',
        'paged' => $page
    );
    $news = new WP_Query($args);
       
    foreach($news -> posts as $post){
        $post -> category = get_the_category($post -> ID);
        $post -> imageUrl = get_the_post_thumbnail_url($post -> ID , 'full');
    };
    return $news -> posts;
};

add_action('rest_api_init'  , function(){
    register_rest_route('/wp/v2' , '/load-more/(?P<page>\d+)' ,  array(
        'methods' => 'GET',
        'callback' => 'api_function_load_more'
    ));
});

function mail_sender(WP_REST_Request $request){
    $mymail = 'slaigox@gmail.com';
    $ext = mail($mymail ,$request['mail_from'] ,$request['mail_body']);
    return $ext;
};


add_action('rest_api_init' , function(){
    register_rest_route('/wp/v2' , '/send-mail' , array(
      'methods' => 'POST',
      'callback' => 'mail_sender'  
    ));
});