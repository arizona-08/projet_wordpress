<?php
/*
Template Name: About Us
*/
get_header();
get_template_part('template-parts/about-us');
?>
<div class="team-section">
    <h2>Our Team</h2>
    <div class="team-members">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="team-member">
                <img src="<?php echo get_theme_mod("team_image_$i", get_template_directory_uri() . "/images/png/team$i.png"); ?>" alt="Team Member <?php echo $i; ?>">
                <h3><?php echo get_theme_mod("about_us_role_$i", "Role $i"); ?></h3>
                <p class="phone"><?php echo get_theme_mod("about_us_phone_$i", "+33 1 53 31 25 23"); ?></p>
                <p class="email"><?php echo get_theme_mod("about_us_email_$i", "email$i@example.com"); ?></p>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php get_footer(); ?>
