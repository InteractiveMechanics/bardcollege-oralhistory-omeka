<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
    	<meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
	    if (isset($title)) {
	        $titleParts[] = strip_formatting($title);
	    }
	    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>
    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugins -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php 
    	queue_css_file('app');
    	queue_css_file('bootstrap'); 
   		echo head_css(); ?>

    <!-- Scripts -->
    <?php 
	    queue_js_file('vendor/modernizr');
	    queue_js_file('vendor/bootstrap.min');
	    queue_js_file('app');
	    echo head_js(); ?>
	    
	<script type="text/javascript" src="//use.typekit.net/wht1oxi.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div class="container">
    	<?php if (is_current_url('')) : ?>
    		<header class="banner banner-home" style="background: url(<?php echo url('/'); ?>files/theme_uploads/<?php echo get_theme_option('Main Header Background'); ?>)">
    	<?php elseif (is_current_url('/items')) : ?>
    		<header class="banner banner-home" style="background: url(<?php echo url('/'); ?>files/theme_uploads/<?php echo get_theme_option('Interviews Header Background'); ?>)">
    	<?php elseif (is_current_url('/about_the_project') || is_current_url('/about')) : ?>
    		<header class="banner banner-home" style="background: url(<?php echo url('/'); ?>files/theme_uploads/<?php echo get_theme_option('About Header Background'); ?>)">
    	<?php elseif (is_current_url('/the_course') || is_current_url('/students')) : ?>
    		<header class="banner banner-home" style="background: url(<?php echo url('/'); ?>files/theme_uploads/<?php echo get_theme_option('Course Header Background'); ?>)">
    	<?php elseif (is_current_url('/resources')) : ?>
    		<header class="banner banner-home" style="background: url(<?php echo url('/'); ?>files/theme_uploads/<?php echo get_theme_option('Resources Header Background'); ?>)">
    	<?php else : ?>
    		<header class="banner banner-home">
    	<?php endif; ?>
        	<a href="<?php echo url(''); ?>">	            
	            <h1><?php echo option('site_title'); ?></h1>
			</a>
        </header>