    </div>
	<div id="footer-text">
	    <p><?php echo get_theme_option('Footer Text'); ?> &copy; <?php echo date('Y'); ?></p>
	</div>
	<?php fire_plugin_hook('public_footer'); ?>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();        
        Omeka.moveNavOnResize();        
        Omeka.mobileMenu();        
    });
</script>
</body>
</html>
