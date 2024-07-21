<?php
/*
Template Name: Services Page
*/
get_header();
?>

<div class="services-content">
    <h1>Our <?php the_title(); ?>.</h1>
</div>

<div class="sections">
    <div class="service-row">
        <div class="service-section">
            <?php if (get_theme_mod('service_1_image')) : ?>
                <img src="<?php echo get_theme_mod('service_1_image'); ?>" alt="Service Image 1" class="service-image-1">
            <?php endif; ?>
        </div>
        <div class="service-section">
            <?php if (get_theme_mod('service_2_image')) : ?>
                <img src="<?php echo get_theme_mod('service_2_image'); ?>" alt="Service Image 2" class="service-image-2">
            <?php endif; ?>
        </div>
        <div class="service-section">
            <?php if (get_theme_mod('service_3_image')) : ?>
                <img src="<?php echo get_theme_mod('service_3_image'); ?>" alt="Service Image 3" class="service-image-3">
            <?php endif; ?>
            <?php if (get_theme_mod('service_2_subtitle')) : ?>
                <h3 class="service-subtitle"><?php echo get_theme_mod('service_2_subtitle'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="service-row">
        <div class="service-text">
            <?php if (get_theme_mod('service_text_title')) : ?>
                <h2><?php echo get_theme_mod('service_text_title'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('service_text_content')) : ?>
                <p><?php echo get_theme_mod('service_text_content'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="service-row">
        <div class="service-section-full">
            <?php if (get_theme_mod('service_4_image')) : ?>
                <img src="<?php echo get_theme_mod('service_4_image'); ?>" alt="Service Image 4" class="service-image-full">
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
