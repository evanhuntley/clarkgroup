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
<?php get_footer(); ?>
