<?php
	$pageTitle = __('Browse Interviews');
	echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>
<?php include(physical_path_to('common/nav.php')); ?>
<div id="content" class="span4">
	<h1>Interviews</h1>
	<h3><?php echo get_theme_option('Interview Text'); ?></h3>
	<hr/>

	<ul class="nav nav-pills">
		<li class="active"><a href="#browse-by-name" data-toggle="tab">Browse by name</a></li>
		<li><a href="#browse-by-tags" data-toggle="tab">Browse by tags</a></li>
	</ul>	
	
	<div class="tab-content">
		<div class="tab-pane active" id="browse-by-name">
			<?php echo pagination_links(); ?>
			
			<?php if ($total_results > 0): ?>
				<div class="row">
				<?php $items = loop('items'); ?>
				<?php foreach ($items as $item): ?>
					<?php $elements = item_type_elements(); ?>
					<div class="item span1 columns" data-ordering-name="<?php echo $elements['Ordering Name']; ?>">
					    <h2><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h2>
					    <h4><?php echo $elements['Display Occupation']; ?>, <?php echo $elements['Display Coverage']; ?></h4>
					    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
					</div>
				<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php echo pagination_links(); ?>
		</div>
		<div class="tab-pane" id="browse-by-tags">
			<?php echo tag_cloud(get_recent_tags(999),'items/browse'); ?>
		</div>
	</div>
	
	<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
</div>
<?php echo foot(); ?>
