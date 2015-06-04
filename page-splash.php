<?php
/*
    Template Name: Splash Page
*/
?>

<?php get_header(); ?>

<?php
    $page_intro = types_render_field("page_intro", array("raw" => true));
    $bg_img = types_render_field("bg_img", array("raw" => true));

    $cb1_title = types_render_field("cb1_title", array("raw" => true));
    $cb1_content = types_render_field("cb1_content_block", array("raw" => false));

    $cb2_title = types_render_field("cb2_title", array("raw" => true));
    $cb2_content = types_render_field("cb2_content_block", array("raw" => false));

    $sf1_title = types_render_field("sf1_title", array("raw" => true));
    $sf1_content = types_render_field("sf1_content", array("raw" => false));
    $sf1_image = types_render_field("sf1_image", array("raw" => true));

    $sf2_title = types_render_field("sf2_title", array("raw" => true));
    $sf2_content = types_render_field("sf2_content", array("raw" => false));
    $sf2_image = types_render_field("sf2_image", array("raw" => true));

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
<section class="main-content service-page">
    <div class="service-list">
        <h2>Take a Look at Our Services</h2>
        <ul>
            <li>
                <h3>Sedimentation and Erosion Control Plans</h3>
                <p>Fermentum feugiat velit mauriyoiuben im esgestas quam totiun aliquam massa nisl quis nthoehud</p>
                <a href="#">Learn More</a>
            </li>
            <li>
                <h3>Sedimentation and Erosion Control Plans</h3>
                <p>Fermentum feugiat velit mauriyoiuben im esgestas quam totiun aliquam massa nisl quis nthoehud</p>
                <a href="#">Learn More</a>
            </li>
            <li>
                <h3>Sedimentation and Erosion Control Plans</h3>
                <p>Fermentum feugiat velit mauriyoiuben im esgestas quam totiun aliquam massa nisl quis nthoehud</p>
                <a href="#">Learn More</a>
            </li>
            <li>
                <h3>Sedimentation and Erosion Control Plans</h3>
                <p>Fermentum feugiat velit mauriyoiuben im esgestas quam totiun aliquam massa nisl quis nthoehud</p>
                <a href="#">Learn More</a>
            </li>
        </ul>
    </div>
</section>
<div class="slider flexslider">
    <ul class="slides">
        <li>
            <div class="content">
                <div class="subhead">Something Here</div>
                <h2>Large Marketing Heading Here</h2>
                <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollitudi orem quis bibendum auctor, nisi elit consequat ipsuc agitt isnibh iduis sedte cursuu. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
        </li>
        <li>
            <div class="content">
                <div class="subhead">Something Here</div>
                <h2>Another Great Comment</h2>
                <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollitudi orem quis bibendum auctor, nisi elit consequat ipsuc agitt isnibh iduis sedte cursuu. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
        </li>
        <li>
            <div class="content">
                <div class="subhead">Little Heading</div>
                <h2>Clark Group is the Best</h2>
                <p> Proin gravida nibh vel velit auctor aliquet. Aenean sollitudi orem quis bibendum auctor, nisi elit consequat ipsuc agitt isnibh iduis sedte cursuu. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
        </li>
    </ul>
</div>
<?php if ( $cb1_title && $cb1_content) : ?>
<section class="main-content">
    <div class="content-block">
        <h2><?php echo $cb1_title; ?></h2>
        <div class="content">
            <?php echo $cb1_content; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( $sf1_title && $sf1_content && $sf1_image) : ?>
<div class="service-feature">
    <div class="content">
        <h3><?php echo $sf1_title; ?></h3>
        <p><?php echo $sf1_content; ?></p>
    </div>
    <img src="<?php echo $sf1_image; ?>" />
</div>
<?php endif; ?>

<?php if ( $sf2_title && $sf2_content && $sf2_image) : ?>
<div class="service-feature">
    <div class="content flip">
        <h3><?php echo $sf2_title; ?></h3>
        <p><?php echo $sf2_content; ?></p>
    </div>
    <img src="<?php echo $sf2_image; ?>" />
</div>
<?php endif; ?>

<?php if ( $cb2_title && $cb2_content) : ?>
<section class="main-content">
    <div class="content-block">
        <h2><?php echo $cb2_title; ?></h2>
        <div class="content">
            <?php echo $cb2_content; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
