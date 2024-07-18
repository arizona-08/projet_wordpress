<?php
/*
Template Name: About Us
*/
get_header();
?>

<div class="about-us-content">
    <h1><?php the_title(); ?>.</h1>
    
    <div class="intro-section">
        <?php if (get_theme_mod('intro_image')) : ?>
            <img src="<?php echo get_theme_mod('intro_image'); ?>" alt="Intro Image" class="intro-image">
        <?php endif; ?>
        <div class="intro-text">
            <?php if (get_theme_mod('intro_title')) : ?>
                <h2><?php echo get_theme_mod('intro_title'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('intro_description')) : ?>
                <p><?php echo get_theme_mod('intro_description'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="sections">
        <?php if (get_theme_mod('about_us_image')) : ?>
            <img src="<?php echo get_theme_mod('about_us_image'); ?>" alt="About Us Image" class="about-us-image">
        <?php endif; ?>
        <div class="sections-text">
            <?php
            $sections = ['who_we_are', 'our_vision', 'our_mission'];
            foreach ($sections as $section) {
                $title = get_theme_mod("about_us_{$section}_title");
                $content = get_theme_mod("about_us_{$section}_content");
                if ($title && $content) {
                    echo "<div class='section'>
                            <h3>{$title}</h3>
                            <p>{$content}</p>
                          </div>";
                }
            }
            ?>
        </div>
    </div>

    <div class="team-section">
        <h2>Our Team</h2>
        <div class="team-members">
            <?php
            for ($i = 1; $i <= 4; $i++) {
                $role = get_theme_mod("team_member_{$i}_role");
                $phone = get_theme_mod("team_member_{$i}_phone");
                $email = get_theme_mod("team_member_{$i}_email");
                $photo = get_theme_mod("team_member_{$i}_photo");
                if ($role && $phone && $email && $photo) {
                    echo "<div class='team-member'>
                            <img src='{$photo}' alt='{$role}' />
                            <h3>{$role}</h3>
                            <p>{$phone}</p>
                            <p><a href='mailto:{$email}'>{$email}</a></p>
                          </div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
