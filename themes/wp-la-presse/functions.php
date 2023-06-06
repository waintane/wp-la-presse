<?php 

function la_presse_files(){
    wp_enqueue_style("la_presse_main_style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "la_presse_files");

function la_presse_features(){
    register_nav_menu("menuDuHeader", "Menu du header");

}

add_action("after_setup_theme", "la_presse_features");
?>