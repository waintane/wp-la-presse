<?php
get_header();
?>
<h1>LES GRANDS TITRES</h1>

<?php 
    //------------------------------------------------------plus recents articles
    $nouveauxArticles = new WP_Query(array(
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
    ));

    while($nouveauxArticles->have_posts()){
        $nouveauxArticles->the_post();
        ?>
        <div class="article">
            <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
            <div class="the-content">
                <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                <div class = "extrait">
                <?php
                    if(has_excerpt()){
                        the_excerpt();
                    }else{
                        echo wp_trim_words(get_the_content(), 25);
                    }
                ?>
                </div>
                <p class="temps"> <?php the_time('j F Y',) ?> </p>
            </div>
        </div>
        <?php
    }
    //-----------------------------------------------------------plus recents articles international
    $articlesInternational = new WP_Query(array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'INTERNATIONAL'
    ));
    ?>
    <h1>INTERNATIONAL</h1>
    <?php
    while($articlesInternational->have_posts()){
        $articlesInternational->the_post();
        ?>
        <div class="article">
            <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
            <div class="the-content">
                <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                <div class = "extrait">
                <?php
                    if(has_excerpt()){
                        the_excerpt();
                    }else{
                        echo wp_trim_words(get_the_content(), 25);
                    }
                ?>
                </div>
                <p class="temps"> <?php the_time('j F Y',) ?> </p>
            </div>
        </div>
        <?php
    }
    //-----------------------------------------------------------plus recents chroniques
    $articlesChroniques = new WP_Query(array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'CHRONIQUES'
    ));
    ?>
    <h1>CHRONIQUES</h1>
    <?php
    while($articlesChroniques->have_posts()){
        $articlesChroniques->the_post();
        ?>
        <div class="article">
            <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
            <div class="the-content">
                <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                <div class = "extrait">
                <?php
                    if(has_excerpt()){
                        the_excerpt();
                    }else{
                        echo wp_trim_words(get_the_content(), 25);
                    }
                ?>
                </div>
                <p class="temps"> <?php the_time('j F Y',) ?> </p>
            </div>
        </div>
        <?php
    }
      //-----------------------------------------------------------plus recents arcticles environnement
      $articlesEnvironnement = new WP_Query(array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'ENVIRONNEMENT'
    ));
    ?>
    <h1>ENVIRONNEMENT</h1>
    <?php
    while($articlesEnvironnement->have_posts()){
        $articlesEnvironnement->the_post();
        ?>
        <div class="article">
            <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
            <div class="the-content">
                <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                <div class = "extrait">
                <?php
                    if(has_excerpt()){
                        the_excerpt();
                    }else{
                        echo wp_trim_words(get_the_content(), 25);
                    }
                ?>
                </div>
                <p class="temps"> <?php the_time('j F Y',) ?> </p>
            </div>
        </div>
        <?php
    } 
          //-----------------------------------------------------------plus recents articles affaires
          $articlesAffaires = new WP_Query(array(
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'AFFAIRES'
        ));
        ?>
        <h1>AFFAIRES</h1>
        <?php
        while($articlesAffaires->have_posts()){
            $articlesAffaires->the_post();
            ?>
            <div class="article">
                <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                <div class="the-content">
                    <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                    <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                    <div class = "extrait">
                    <?php
                        if(has_excerpt()){
                            the_excerpt();
                        }else{
                            echo wp_trim_words(get_the_content(), 25);
                        }
                    ?>
                    </div>
                    <p class="temps"> <?php the_time('j F Y',) ?> </p>
                </div>
            </div>
            <?php
        }
             //-----------------------------------------------------------plus recents articles santé
             $articlesSante = new WP_Query(array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'category_name' => 'SANTÉ'
            ));
            ?>
            <h1>SANTÉ</h1>
            <?php
            while($articlesSante->have_posts()){
                $articlesSante->the_post();
                ?>
                <div class="article">
                    <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                    <div class="the-content">
                        <div class="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                        <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                        <div class = "extrait">
                        <?php
                            if(has_excerpt()){
                                the_excerpt();
                            }else{
                                echo wp_trim_words(get_the_content(), 25);
                            }
                        ?>
                        </div>
                        <p class="temps"> <?php the_time('j F Y',) ?> </p>
                    </div>
                </div>
                <?php
            }
?>

<?php 
get_footer();
?>