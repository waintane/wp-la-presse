<?php 


function la_presse_files(){
    wp_enqueue_script('script-menuBurger', get_template_directory_uri() . '/scripts/menuBurger.js', array(), Null, true);
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
?>