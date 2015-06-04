<?php
/*
    Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php
    $hero_title = types_render_field("hero_title", array("raw" => true));
    $hero_text = types_render_field("hero_text", array("raw" => true));
    $hero_button = types_render_field("hero_button_url", array("raw" => true));
    $hero_button_text = types_render_field("hero_button_text", array("raw" => true));

    $sc_title = types_render_field("site_control_title", array("raw" => true));
    $sc_text = types_render_field("site_control_text", array("raw" => true));
    $sc_button_title = types_render_field("site_control_button_title", array("raw" => true));
    $sc_button_url = types_render_field("site_control_button_url", array("raw" => true));

    $mission_title = types_render_field("mission_title", array("raw" => true));
    $mission_subhead = types_render_field("mission_subhead", array("raw" => true));
    $mission_button_title = types_render_field("mission_button_title", array("raw" => true));
    $mission_button_url = types_render_field("mission_button_url", array("raw" => true));

    $projects_title = types_render_field("projects_title", array("raw" => true));
    $projects_text = types_render_field("projects_text", array("raw" => true));
    $projects_button_text = types_render_field("projects_button_text", array("raw" => true));
    $projects_button_url = types_render_field("projects_button_url", array("raw" => true));

?>

<section class="main page-header">
    <h1><?php echo $hero_title; ?></h1>
    <p><?php echo $hero_text; ?></p>
    <a class="button" href="<?php echo $hero_button; ?>"><?php echo $hero_button_text; ?></a>
</section>

<section class="about">
  <div class="about-feature">
    <div class="subhead"><?php echo $mission_subhead; ?></div>
    <h2><?php echo $mission_title; ?></h2>
    <a class="button" href="<?php echo $mission_button_url; ?>"><?php echo $mission_button_title; ?></a>
  </div>
  <div class="about-small">
    <h3><?php echo $sc_title; ?></h3>
    <p><?php echo $sc_text; ?></p>
    <a class="button" href="<?php echo $sc_button_url; ?>"><?php echo $sc_button_title; ?></a>
  </div>
  <div class="about-small">
    <h3><?php echo $projects_title; ?></h3>
    <p><?php echo $projects_text; ?></p>
    <a class="button" href="<?php echo $projects_button_url; ?>"><?php echo $projects_button_text; ?></a>
  </div>
</section>

<?php
    $args = array(
        'post_type' => 'page',
        'orderby' => 'menu_order',
    	'tax_query' => array(
    		array(
    			'taxonomy' => 'page-categories',
    			'field'    => 'slug',
    			'terms'    => 'services',
    		),
    	),
    );
    $subpages = new WP_Query( $args);
    while ( $subpages->have_posts() ) : $subpages->the_post();

    $intro = types_render_field("page_intro", array("raw" => true));
    $subhead = types_render_field("subhead", array("raw" => true));
    $bg_img = types_render_field("bg_img", array("raw" => true));
?>

<section class="feature-block <?php echo $bg_img; ?>">
  <?php if ( $subhead ) : ?>
      <div class="subhead"><?php echo $subhead; ?></div>
  <?php endif; ?>
  <h1><?php the_title(); ?></h1>
  <?php if ( $intro ) : ?>
      <p><?php echo $intro; ?></p>
  <?php endif; ?>
  <ul class="links">
    <li><a href="<?php echo get_the_permalink(); ?>">Learn More</a></li>
  </ul>
</section>

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
