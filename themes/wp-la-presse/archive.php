<?php 
get_header();
?>

<h1><?php the_archive_title(); ?></h1>
<p><?php the_archive_description(); ?></p>

<?php 
    while(have_posts()){
        the_post();
        ?>
        <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
        <div>
            <p> Publié par <?php the_author_posts_link(); ?>, <?php the_time('j F Y'); ?></p>
            <?php if(has_excerpt()){
                the_excerpt();
                }else{
                echo wp_trim_words(get_the_content(), 25);
                } ?>
        </div>
        <?php
    }
?>

<?php 
get_footer();
?>