<footer>
    <h1>D'AUTRES ARTICLES POUVANT VOUS INTÉRESSER</h1>
    <div class="separation"></div>
    <div class="section-footer">
        <?php 
        $articlesFooter = new WP_Query(array(
            "posts_per_page" => "4",
            "orderby" => "rand"
        ));
        while($articlesFooter->have_posts()){
            $articlesFooter -> the_post();
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
    <div class="footer">
        <p>Refonte du site officiel de <a href="https://www.lapresse.ca/" target="_blank">la press</a> fait par Olivier Paradis-Tardif</p>
    </div>  
</footer>
<?php wp_footer()?>
</body>
</html>