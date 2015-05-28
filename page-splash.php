<?php
/*
    Template Name: Splash Page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article role="main" class="primary-content type-page" id="post-<?php the_ID(); ?>">
        <?php if ( is_front_page() ) { ?>
            <h1><?php the_title(); ?></h1> This is the splash page
        <?php } else { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

        <?php endwhile; ?>
    </article>

<?php get_footer(); ?>
