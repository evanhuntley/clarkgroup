<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section class="page-header">
    <?php if ( is_front_page() ) { ?>
        <h1><?php the_title(); ?></h1>
    <?php } else { ?>
        <h1><?php the_title(); ?></h1>
    <?php } ?>
    <p>This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors.
    </p>
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
