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
?>

<section class="main page-header">
    <h1><?php echo $hero_title; ?></h1>
    <p><?php echo $hero_text; ?></p>
    <a class="button" href="<?php echo $hero_button; ?>"><?php echo $hero_button_text; ?></a>
</section>

<section class="about">
  <div class="about-feature">
    <div class="subhead">Our Mission</div>
    <h2>Our Mission to Better the World</h2>
    <a class="button" href="#">Read About Our Mission</a>
  </div>
  <div class="about-small">
    <h3><?php echo $sc_title; ?></h3>
    <p><?php echo $sc_text; ?></p>
    <a class="button" href="<?php echo $sc_button_url; ?>"><?php echo $sc_button_title; ?></a>
  </div>
  <div class="about-small">
    <h3>Our Projects</h3>
    <p>Proin gravida nibh vel velit auctor enean soludi orem quis bibendum auctor, nisi elit consequat ipsuc agitt isnibh iduis sedte corbi accumsan ipsum velit.</p>
    <a class="button" href="#">View Our Projects</a>
  </div>
</section>

<section class="feature-block">
  <div class="subhead">Something Here</div>
  <h1>Geo-Environmental/Earth Science</h1>
  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollitudi orem quis bibendum auctor, nisi elit consequat ipsuc agitt isnibh iduis sedte cursuu. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
  <ul class="links">
    <li><a href="#">Learn More</a></li>
    <li><a href="#">View All Services</a></li>
  </ul>
</section>

<?php get_footer(); ?>
