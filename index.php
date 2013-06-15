<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

<div class="banner banner-interviews">
	<a href="<?php echo url('items'); ?>">
		<h2>Interviews</h2>
	    <?php if (get_theme_option('Interviews Header Background')) : ?>
			<img src="./files/theme_uploads/<?php echo get_theme_option('Interviews Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>
<div class="banner banner-about">
	<a href="<?php echo url('about_the_project'); ?>">
		<h2>About the Project</h2>
	    <?php if (get_theme_option('About Header Background')) : ?>
			<img src="./files/theme_uploads/<?php echo get_theme_option('About Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>
<div class="banner banner-about">
	<a href="<?php echo url('the_course'); ?>">
		<h2>The Course</h2>
	    <?php if (get_theme_option('Course Header Background')) : ?>
			<img src="./files/theme_uploads/<?php echo get_theme_option('Course Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>
<div class="banner banner-about">
	<a href="<?php echo url('resources'); ?>">
		<h2>Resources</h2>
	    <?php if (get_theme_option('Resources Header Background')) : ?>
			<img src="./files/theme_uploads/<?php echo get_theme_option('Resources Header Background'); ?>" alt="<?php echo theme_logo(); ?>" />
	    <?php else : ?>
	    	<img src="http://placehold.it/952x124" alt="Placeholder" />
	    <?php endif; ?>
    </a>
</div>

<?php echo foot(); ?>
