<?php
/**
 * Dual Color Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$title = get_field('dual_color_title') ?: 'Your title here...';
$content = get_field('dual_section_content') ?: 'Enter your content here...';
$image = get_field('dual_section_image');
?>
<section class="dual-color-section">
    <div class="dual-color-cyan-bg"></div>
    <div class="secondary-container dual-color-section-container">
        <div class="dual-color-section-content">
            <h1 class="dual-color-section-content-title"><?php echo $title; ?></h1>
            <p class="dual-color-section-content-paragraph"><?php echo $content; ?></p>
        </div>
        <div class="dual-color-section-image-container">
            <img src="<?php echo $image; ?>" alt="">
        </div>
    </div>
</section>