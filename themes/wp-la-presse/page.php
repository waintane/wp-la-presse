<?php
get_header();
?>
<h1>Page</h1>

<?php 
    while(have_posts()){
        the_post();
        ?>
        <div> <?php echo get_the_category_list(', ') ?> </div>
        <h2><a href=<?php the_permalink(); ?>> <?php the_title(); ?> </a></h2>
        <?php
        if(has_excerpt()){
            the_excerpt();
        }else{
            echo wp_trim_words(get_the_content(), 25);
        }
        ?>
        <p> <?php the_time('j F Y',) ?> </p>
        <?php
    }
?>

<?php 
get_footer();