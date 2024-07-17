<?php
get_header();

global $wp_query;
$search_query = get_search_query();
?>

<main>
    <footer >
        <h1>
            <?php printf( esc_html__( 'Résultats de la recherche pour : %s', 'esgi-theme' ), '<span>' . esc_html( $search_query ) . '</span>' ); ?>
        </h1>
    </footer>
    
    <div>
        <?php if ( have_posts() ) : ?>
            <?php
            $post_types = array();
            while ( have_posts() ) : the_post();
                $post_types[get_post_type()][] = get_the_ID();
            endwhile;

            foreach ( $post_types as $post_type => $post_ids ) :
                $post_type_object = get_post_type_object( $post_type );
                $count = count( $post_ids );
                ?>
                <section >
                    <h2><?php printf( esc_html__( '%1$s : %2$d trouvé(s)', 'esgi-theme' ), esc_html( $post_type_object->labels->name ), $count ); ?></h2>
                    <ul>
                        <?php
                        foreach ( $post_ids as $post_id ) :
                            ?>
                            <li><a href="<?php echo get_permalink( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a></li>
                            <?php
                        endforeach;
                        ?>
                    </ul>
                </section>
            <?php endforeach; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Aucun résultat trouvé.', 'esgi-theme' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
?>
	