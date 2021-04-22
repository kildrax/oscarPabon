<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<div class="container animated fadeIn">
    <section class="top">
        <div class="top__big-horizontal">
            <?php
                $args = array( 'category_name' => 'principal', 'post_type' =>  'post', 'posts_per_page' => 1 ); 
                $queryArgs = new WP_Query($args);
                if ( $queryArgs->have_posts() ) : while ( $queryArgs->have_posts() ) : $queryArgs->the_post();
            ?>
            <picture class="top__big-horizontal-picture">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium_large'); ?>
                    <?php endif; ?>
                </a>
            </picture>
            <div class="top__big-horizontal-info">
                <h3 class="top__big-horizontal-info-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <?php the_excerpt(); ?>
                <p class="top__big-horizontal-info-extra">
                    <span><?php echo get_the_date('F j, Y'); ?></span> | <span><?php echo get_the_author(); ?></span>
                </p>
            </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
    <section class="sub_top">
        <h2 class="sub_top-title">Investigación Historica y Cultural</h2>
        <div class="wrapper">
            <?php
                $args = array( 'category_name' => 'historica_cultural', 'post_type' =>  'post', 'posts_per_page' => 2 ); 
                $queryArgs = new WP_Query($args);
                if ( $queryArgs->have_posts() ) : while ( $queryArgs->have_posts() ) : $queryArgs->the_post();
            ?>
            <div class="sub_top__vertical">
                <picture class="sub_top__vertical-picture">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>
                    </a>
                </picture>
                <div class="sub_top__vertical-info">
                    <h3 class="sub_top__vertical-info-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <p class="sub_top__vertical-info-extra">
                        <span><?php echo get_the_date('F j, Y'); ?></span> | <span><?php echo get_the_author(); ?></span>
                    </p>
                </div>
            </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
    <section class="sub_top">
        <h2 class="sub_top-title">Medio Ambiente</h2>
        <div class="wrapper">
            <?php
                $args = array( 'category_name' => 'medio_ambiente', 'post_type' =>  'post', 'posts_per_page' => 2 ); 
                $queryArgs = new WP_Query($args);
                if ( $queryArgs->have_posts() ) : while ( $queryArgs->have_posts() ) : $queryArgs->the_post();
            ?>
            <div class="sub_top__vertical">
                <picture class="sub_top__vertical-picture">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>
                    </a>
                </picture>
                <div class="sub_top__vertical-info">
                    <h3 class="sub_top__vertical-info-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <p class="sub_top__vertical-info-extra">
                        <span><?php echo get_the_date('F j, Y'); ?></span> | <span><?php echo get_the_author(); ?></span>
                    </p>
                </div>
            </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
    <section class="sub_top">
        <h2 class="sub_top-title">Otros Autores</h2>
        <div class="wrapper horizontal">
            <?php
                $args = array( 'category_name' => 'otros_autores', 'post_type' =>  'post', 'posts_per_page' => 4 ); 
                $queryArgs = new WP_Query($args);
                if ( $queryArgs->have_posts() ) : while ( $queryArgs->have_posts() ) : $queryArgs->the_post();
            ?>
            <div class="sub_top__vertical horizontal">
                <picture class="sub_top__vertical-picture">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>
                    </a>
                </picture>
                <div class="sub_top__vertical-info">
                    <h3 class="sub_top__vertical-info-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <p class="sub_top__vertical-info-extra">
                        <span><?php echo get_the_date('F j, Y'); ?></span>
                    </p>
                </div>
            </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Lo sentimos, ninguna publicación está disponible en el momento.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>