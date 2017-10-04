<?php
/*
Plugin Name: Google Analytics Plugin 
Plugin URI: https://ecell.org.in
Description: Adds a Google analytics tracking code to the theme, by hooking to wp_head.
Author: Alabhya Vaibhav
Version: 1.0.1
 */
?>
<?php
function google_analytics() { ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=XXXXXX"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments)};
	gtag('js', new Date());
	gtag('config', 'XXXXXX');
</script>
<?php }
add_action( 'wp_head', 'google_analytics', 10 );

