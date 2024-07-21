<?php
/*
Template Name: Partner Page
*/
get_header();
?>

<div class="partners-content">
    <h1><?php the_title(); ?>.</h1>
</div>

<div class="sections">
    <div class="partners-images">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            $partner_image = get_theme_mod("partner_image_$i");
            if ($partner_image) {
                echo "<img src='{$partner_image}' alt='Partner $i' class='partner-image' />";
            }
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
