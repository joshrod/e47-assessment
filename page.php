<?php
/**
 * Template Name: Page
 */
get_header();
?>
    <section class="page-hero" style="background-image: url('<?php 
        if (has_post_thumbnail()) {
            echo the_post_thumbnail_url(); 
        } else {
            echo '/wp-content/uploads/2022/06/page-hero-img.png';
        }
    ?>');">
        <div class="page-hero-title-container">
            <h1 class="page-hero-title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="main">

        <div class="primary-container">
            
            <?php if(have_posts()): ?>

                <?php while ( have_posts() ) : ?>

                    <?php the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>


<?php
get_footer();
