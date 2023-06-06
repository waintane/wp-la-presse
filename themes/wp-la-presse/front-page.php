<?php
get_header();
?>
<h1>Front-page</h1>

<?php 
    while(have_posts()){
        the_post();
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
                <p> <?php the_time('j F Y',) ?> </p>
            </div>
        </div>
        <?php
    }
?>

<?php 
get_footer();
?>