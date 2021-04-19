<?php get_header(); ?>
<section class="singlePost container animated fadeIn">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="singlePost__content">
                <h1 class="singlePost__content-title"><?php the_title() ?></h1>
                <div class="singlePost__content-info">
                    <span class="singlePost__content-info-txt">Por: <b><?php the_author() ?></b></span>
                    <span class="singlePost__content-info-txt"><?php echo get_the_date('F j, Y') ?></span>
                </div>
                <div class="singlePost__content-all"><?php the_content() ?></div>
                <?php comments_template(); ?> 
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="singlePost__sideBar">
        <div class="singlePost__sideBar-recent-post singlePost__sideBar--style">
            <?php wp_reset_postdata(); ?>
            <?php $query = new WP_Query(
                array(
                    'posts_type' => array('post'),
                    'posts_per_page' => 10
                )
            ); ?>
            <?php if ($query->have_posts()) : ?>
                <h4 class="singlePost__sideBar--style-title">Publicaciones Recientes</h4>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="singlePost__sideBar--style-links"><?php the_title() ?></a>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="singlePost__sideBar-share singlePost__sideBar--style">
                    <h4 class="singlePost__sideBar--style-title">Comparte esta publicación</h4>
                    <div class="singlePost__sideBar-share-content">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="singlePost__sideBar-share-content-social" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_grey_icon.png" alt="Facebook" class="singlePost__sideBar-share-content-social-icon">
                        </a>
                    </div>
                </div>
                <div class="singlePost__sideBar-share singlePost__sideBar--style">
                    <h4 class="singlePost__sideBar--style-title">Categorías</h4>
                    <div class="singlePost__sideBar-share-content">
                        <?php wp_list_categories('title_li='); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>