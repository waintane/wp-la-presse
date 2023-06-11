<?php 
get_header();
?>
<?php 
    ?>
    <div class="single-article">
        <?php 
        while(have_posts()){
            the_post();
            ?>
            <div class="categorie <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"> <?php echo get_the_category_list(', ') ?></div>
            <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            <div class="the-content">
                <h2><?php the_title(); ?></h2>
                <span class="temps"><?php the_time('j F Y',); ?></span>
                <?php
                the_content();
                ?>
            </div>
            <?php
        }
        ?>
    </div>
    <?php 
?>

<?php 
get_footer();
?>