<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><a href=<?php echo site_url(); ?>>La Presse</a></h1>
        
        <?php 
        wp_nav_menu(array(
            "theme_location" => "menuDuHeader"
        ));
        ?>
        
    </header>