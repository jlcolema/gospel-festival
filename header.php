<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title('-', true, 'right'); }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home() || is_front_page()) {
				bloginfo('name'); echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged; }
		?>
	</title>

	<meta name="title" content="<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title('-', true, 'right'); }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home() || is_front_page()) {
				bloginfo('name'); echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged; }
		?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="google-site-verification" content="">

	<meta name="author" content="">
	<meta name="Copyright" content="Copyright 2012 Southside Neighborhood Gospel Festival. All Rights Reserved.">

	<meta name="DC.title" content="Southside Neighborhood Gospel Festival">
	<meta name="DC.subject" content="">
	<meta name="DC.creator" content="">

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/-/media/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/-/media/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_directory'); ?>/-/js/modernizr.js"></script>

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/-/js/selectivizr.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page">

		<header id="header">

			<div id="presenting"><?php bloginfo('description'); ?></div>

			<div id="gallery-wrapper">

				<h1 id="site-title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

				<?php echo do_shortcode('[nivoslider slug="home"]'); ?>

			</div>

		</header>

		<div id="body" class="group">
