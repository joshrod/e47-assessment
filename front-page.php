<?php
/**
 * Template Name: Front Page
 */
get_header(); ?>
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

    <?php the_content(); ?>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php 
        endif; 
        
        get_template_part( 'template-parts/cta', 'section' ); 
    ?>

</main>
<?php get_footer();
