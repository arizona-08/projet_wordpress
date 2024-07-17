<?php
get_header();
?>

<main id="site-content">
    <section>
        <header>
            <h1>
                <?php esc_html_e('Page introuvable', 'esgi-theme'); ?>
            </h1>
        </header>

        <div class="container">
            <p>
                <?php esc_html_e('Essayez de faire une recherche', 'esgi-theme'); ?>
            </p>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>