<?php
get_header();
?>
<div class="titre-top">
    <h1>LES GRANDS TITRES</h1>
    <div class="separation"></div>
</div>
<div class="main">
    <?php 
        //------------------------------------------------------plus recents articles
        $nouveauxArticles = new WP_Query(array(
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
        ));
        ?>
        <div class="main-section">
        <?php
        while($nouveauxArticles->have_posts()){
            $nouveauxArticles->the_post();
            ?>
            <article>
                <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                <div class="the-content">
                    <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                    <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                    <div class = "extrait">
                    <?php
                        echo wp_trim_words(get_the_content(), 25);
                    ?>
                    </div>
                    <p class="temps"> <?php the_time('j F Y',) ?> </p>
                </div>
            </article>
            <?php
        }
        ?>
        </div>
        <?php
        //-----------------------------------------------------------plus recents articles international
        $articlesInternational = new WP_Query(array(
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'INTERNATIONAL'
        ));
        $internationalLink;
        ?>
        <h1>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('INTERNATIONAL'))); ?>">INTERNATIONAL</a>
        </h1>
        <div class="separation"></div>
        <div class="section-secondaire">
        <?php
        while($articlesInternational->have_posts()){
            $articlesInternational->the_post();
            ?>
            <article>
                <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                <div class="the-content">
                    <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
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
            </article>
            <?php
        }
        ?>
        <div class="cat-page <?php echo get_cat_name(get_cat_ID('INTERNATIONAL')) ?>">
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('INTERNATIONAL'))); ?>"></a>
        </div>
        </div>
        <?php
        //-----------------------------------------------------------plus recents chroniques
        $articlesChroniques = new WP_Query(array(
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'CHRONIQUES'
        ));
        ?>

        <h1>
            <a href="<?php echo esc_url(get_category_link(get_cat_ID('CHRONIQUES'))); ?>">CHRONIQUES</a>
        </h1>
        <div class="separation"></div>
        <div class="section-secondaire">
            <?php
            while($articlesChroniques->have_posts()){
                $articlesChroniques->the_post();
                ?>
                <article>
                    <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                    <div class="the-content">
                        <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
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
                </article>
                <?php
            }
            ?>
            <div class="cat-page <?php echo get_cat_name(get_cat_ID('CHRONIQUES')) ?>">
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('CHRONIQUES'))); ?>">.</a>
            </div>
        </div>
        <?php

        //-----------------------------------------------------------plus recents arcticles environnement
        $articlesEnvironnement = new WP_Query(array(
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'ENVIRONNEMENT'
        ));
        ?>
        <div class="section-tertiaire">

            <div class="sous-section">
                <h1>
                    <a href="<?php echo esc_url(get_category_link(get_cat_ID('ENVIRONNEMENT'))); ?>">ENVIRONNEMENT</a>
                </h1>
                <div class="separation"></div>
                <?php
                while($articlesEnvironnement->have_posts()){
                    $articlesEnvironnement->the_post();
                    ?>
                    <article>
                        <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                        <div class="the-content">
                            <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                            <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                            <div class = "extrait">
                            <?php
                                echo wp_trim_words(get_the_content(), 25);
                            ?>
                            </div>
                            <p class="temps"> <?php the_time('j F Y',) ?> </p>
                        </div>
                    </article>
                    <?php
                } 
                ?>
            </div>
            <?php
            //-----------------------------------------------------------plus recents articles affaires
            $articlesAffaires = new WP_Query(array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'category_name' => 'AFFAIRES'
            ));
            ?>
            <div class="sous-section">
                <h1>
                    <a href="<?php echo esc_url(get_category_link(get_cat_ID('AFFAIRES'))); ?>">AFFAIRES</a>
                </h1>
                <div class="separation"></div>
                <?php
                while($articlesAffaires->have_posts()){
                    $articlesAffaires->the_post();
                    ?>
                    <article>
                        <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                        <div class="the-content">
                            <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                            <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                            <div class = "extrait">
                            <?php
                                echo wp_trim_words(get_the_content(), 25);
                            ?>
                            </div>
                            <p class="temps"> <?php the_time('j F Y',) ?> </p>
                        </div>
                    </article>
                    <?php
                }
                ?>
            </div>
            <?php
            //-----------------------------------------------------------plus recents articles santé
            $articlesSante = new WP_Query(array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'category_name' => 'SANTÉ'
            ));
            ?>
            <div class="sous-section">

                <h1>
                    <a href="<?php echo esc_url(get_category_link(get_cat_ID('SANTÉ'))); ?>">SANTÉ</a>
                </h1>
                <div class="separation"></div>
                <?php
                while($articlesSante->have_posts()){
                    $articlesSante->the_post();
                    ?>
                    <article>
                        <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('medium'); ?></a>
                        <div class="the-content">
                            <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?> </div>
                            <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
                            <div class = "extrait">
                            <?php
                                echo wp_trim_words(get_the_content(), 25);
                            ?>
                            </div>
                            <p class="temps"> <?php the_time('j F Y',) ?> </p>
                        </div>
                    </article>
                    <?php
                }
                ?>
            </div>
        </div>
</div>
<?php 
get_footer();
?>