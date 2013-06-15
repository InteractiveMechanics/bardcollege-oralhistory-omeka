<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

<div class="banner banner-interviews">
	<a href="<?php echo url('items'); ?>">
		<h2></h2>
	    <?php if (get_theme_option('Main Header Background')) : ?>
			<img src="<?php echo get_theme_option('Main Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>
<div class="banner banner-about">
	<a href="<?php echo url('about_the_project'); ?>">
		<h2></h2>
	    <?php if (get_theme_option('Main Header Background')) : ?>
			<img src="<?php echo get_theme_option('Main Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>

<?php echo foot(); ?>
