<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>
<?php include(physical_path_to('common/nav.php')); ?>

<div id="content" class="span3">
    <?php $elements = item_type_elements(); ?>
	<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>
	<h3><?php echo $elements['Self-Given Occupation']; ?></h3>
	<h3>
	   <?php echo __('Conducted by'); ?> 
	   <?php echo metadata('item', array('Dublin Core', 'Creator')); ?> 
	   <?php echo __('on'); ?> 
	   <?php echo metadata('item', array('Dublin Core', 'Date')); ?> 
	   <?php echo __('at the'); ?> 
	   <?php echo metadata('item', array('Dublin Core', 'Coverage')); ?>
    </h3>
	
	<div class="description">
		<?php echo metadata('item', array('Dublin Core', 'Description')); ?>
	</div>
	
	<?php if (metadata('item', 'has tags')): ?>
		<div class="tag-list">
		    <?php echo __('Tags: '); ?><?php echo tag_string('item'); ?>
		</div>
	<?php endif; ?>
	<hr/>
	
	<div class="interview">
		<?php echo $elements['Interview']; ?>
	</div>
	
	<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
</div>
<div id="download" class="span1">
	<!-- The following returns all of the files associated with an item. -->
	<?php if (metadata('item', 'has files')): ?>
	<div class="download">
	   <?php echo files_for_item(); ?>
	</div>

	<?php endif; ?>
</div>
<?php echo foot(); ?>
