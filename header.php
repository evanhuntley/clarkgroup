<?php ?>
<!DOCTYPE html>
<html>
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true);
	} else {
	bloginfo('name'); echo " - "; bloginfo('description');
	}
?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1" />
<meta http-equiv="ClearType" content="true" />

<!-- The little things -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon-precomposed.png"/>
<!-- The little things -->

<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/vendor/flexslider/flexslider.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/style.css" />
<!-- Stylesheets -->

<!-- Load scripts quick smart -->

<!-- Load scripts quick smart -->

	<?php wp_deregister_script('jquery');wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
		<header>
		    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/l_clark-group.png" /> <span><?php bloginfo( 'name' ); ?><span></a></h1>
		    <button class="nav-toggle"><span>Navigation</span></button>
				<nav role="navigation">
						<?php
								$args = array(
										'container' => 'false',
										'items_wrap' => '<ul>%3$s</ul>',
										);
								wp_nav_menu($args);
						?>
						<button class="close-nav">Close</button>
				</nav>
		</header>
