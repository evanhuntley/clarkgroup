<?php //get_sidebar(); ?>

<footer role="contentinfo">
	<div class="copyright">
		<p>&copy;<?php echo date("Y"); ?> Clark Group | Office: 910-392-5555 | 4918 Wrightsville Ave, Wilmington, NC 28403-5287</p>
	</div>
	<div class="contact">
		<a href="#">Contact Us Today</a>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Scripts -->
    <!--
    Please be sure you need jQuery for your project, if you don't, remove it
    If lt IE9 support is needed, use jQuery 1.x.x, v2 doesn't support it -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.min.js"%3E%3C/script%3E'))</script>

    <!--
    Scripts.min.js is a file for storing sitewide bits and pieces of Javascript,
    if you don't need it, simply delete it.
    <script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/scripts.min.js"></script>
    -->

<!-- Scripts -->

<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>
