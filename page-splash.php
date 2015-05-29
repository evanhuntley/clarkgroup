<?php
/*
    Template Name: Splash Page
*/
?>

<?php get_header(); ?>

<section class="page-header">
    <?php if ( is_front_page() ) { ?>
        <h1><?php the_title(); ?></h1>
    <?php } else { ?>
        <h1><?php the_title(); ?></h1>
    <?php } ?>
    <p>This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors.
    </p>
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
    Slider here
</div>
<section class="main-content">
    <div class="content-block">
        <h2>An Overview of Our Services</h2>
        <div class="content">
            <p>Duiass sed odiosdfdf kjgphj  sit amet nibh orem Ipsum. Proin cem nibh id ell gravida niamevel velit arqsdfuet. Aeneasollicitudin, loruis bibendum aip sum, necem nibh id ed odiometate cursus i am necem nibh id elltsdf el tincidng fdum auctoron  sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus oddf dfg io tincictor a ornare od</p>
            <p>Duiass sed odiosdfdf kjgphj  sit amet nibh orem Ipsum. Proin cem nibh id ell gravida niamevel velit arqsdfuet. Aeneasollicitudin, loruis bibendum aip sum, necem nibh id ed odiometate cursus i am necem nibh id elltsdf el tincidng fdum auctoron  sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus oddf dfg io tincictor a ornare od</p>
        </div>
    </div>
</section>
<div class="service-feature">
    <div class="content">
        <h3>This is What a Heading Looks Like</h3>
        <p>Duiass sed odiosdfdf kjhjt amet nibh oremumroin cem nibh id ell gravida niamvel velnean sollicitudin, lorem quis bibendum aipsum, necem nibh id elluis sed odio sit amet nibhulputate cursus i am nec cem nibh id elltellus a om aurlit co aptent taciti sociosqu ad litora torquent per conub</p>
    </div>
    <img src="<?php echo bloginfo('template_directory'); ?>/assets/img/bg_mission.jpg" />
</div>
<div class="service-feature">
    <div class="content flip">
        <h3>This is What a Heading Looks Like</h3>
        <p>Duiass sed odiosdfdf kjhjt amet nibh oremumroin cem nibh id ell gravida niamvel velnean sollicitudin, lorem quis bibendum aipsum, necem nibh id elluis sed odio sit amet nibhulputate cursus i am nec cem nibh id elltellus a om aurlit co aptent taciti sociosqu ad litora torquent per conub</p>
    </div>
    <img class="flip" src="<?php echo bloginfo('template_directory'); ?>/assets/img/bg_mission.jpg" />
</div>
<section class="main-content">
    <div class="content-block">
        <h2>An Overview of Our Services</h2>
        <div class="content">
            <p>Duiass sed odiosdfdf kjgphj  sit amet nibh orem Ipsum. Proin cem nibh id ell gravida niamevel velit arqsdfuet. Aeneasollicitudin, loruis bibendum aip sum, necem nibh id ed odiometate cursus i am necem nibh id elltsdf el tincidng fdum auctoron  sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus oddf dfg io tincictor a ornare od</p>
            <p>Duiass sed odiosdfdf kjgphj  sit amet nibh orem Ipsum. Proin cem nibh id ell gravida niamevel velit arqsdfuet. Aeneasollicitudin, loruis bibendum aip sum, necem nibh id ed odiometate cursus i am necem nibh id elltsdf el tincidng fdum auctoron  sequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus oddf dfg io tincictor a ornare od</p>
        </div>
    </div>
</section>
<?php get_footer(); ?>
