<?php 


function la_presse_files(){
    wp_enqueue_script('script-menuBurger', get_template_directory_uri() . '/scripts/menuBurger.js', array(), Null, true);
    wp_enqueue_script('script-header', get_template_directory_uri() . '/scripts/header.js', array(), Null, true);
    wp_enqueue_style("la_presse_main_style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "la_presse_files");

function la_presse_features(){
    register_nav_menu("menuDuHeader", "Menu du header");
    add_theme_support( 'post-thumbnails', array( 
        'post', 
        'page', 
        'service'
        ) 
    );
}

add_action("after_setup_theme", "la_presse_features");

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

?>