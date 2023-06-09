<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="menu-burger"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg></div>
        <h1><a href=<?php echo site_url(); ?>>La Presse</a></h1>
        <div class="navigation menu-inactif">  
            <div class="background-menu">
                <div class="section-recherche">
                    <input class="barre-recherche" type="search" placeholder = "Rechercher un article">
                </div>
                <div class="section-principale">
                    <h3>SECTIONS PRINCIPALES</h3>
                    <?php 
                        wp_nav_menu(array(
                            "theme_location" => "menuDuHeader"
                        ));
                    ?>
                </div>

            </div>
        </div>
        
    </header>