<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
    $page_intro = types_render_field("page_intro", array("raw" => true));
    $bg_img = types_render_field("bg_img", array("raw" => true));
?>
<section class="page-header <?php echo $bg_img; ?>">
    <?php if ( is_front_page() ) { ?>
        <h1><?php the_title(); ?></h1>
    <?php } else { ?>
        <h1><?php the_title(); ?></h1>
    <?php } ?>
    <?php if ($page_intro) : ?>
        <p><?php echo $page_intro; ?></p>
    <?php endif; ?>
</section>
<section class="main-content">
    <article role="main" class="primary-content type-page" id="post-<?php the_ID(); ?>">

        <?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>

        <?php endwhile; ?>
    </article>

    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
