<?php get_header(); ?>
<section class="category container animated fadeIn">
    <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>" class="category_wrap">
            <div class="category_wrap_content">
                <?php echo get_the_post_thumbnail($page=null, array( 400, 400)); ?>
                <h1 class="category_wrap_content--title"><?php the_title(); ?></h1>
                <div class="category_wrap_content_wrapper">
                    <span class="category_wrap_content_wrapper--txt">Por: <b><?php the_author(); ?></b></span>
                    <span class="category_wrap_content_wrapper--txt"><?php echo get_the_date('F j, Y'); ?></span>
                </div>
                <?php wp_trim_excerpt(the_excerpt()); ?>
                <button class="category_wrap_content--readmore">Leer Más ></button>
            </div>
        </a>
    <?php endwhile;
    ?>
</section>
<?php get_footer(); ?>