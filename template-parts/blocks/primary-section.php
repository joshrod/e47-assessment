<?php
/**
 * Primary Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$title = get_field('primary_section_title') ?: 'Your title here...';
$list = get_field('primary_section_list') ?: 'Enter your list here...';
$image = get_field('primary_section_image');
?>

<section class="primary-section">
    <div class="secondary-container primary-section-container">
        <div class="primary-section-content">
            <h1 class="primary-section-content-title"><?php echo $title; ?></h1>
            <div class="primary-section-custom-list"><?php echo $list; ?></div>
        </div>
        <div class="primary-section-image-container">
            <img src="<?php echo $image; ?>" alt="">
        </div>
    </div>
</section>