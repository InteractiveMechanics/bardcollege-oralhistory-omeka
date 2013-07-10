<?php
	$pageTitle = __('Browse Interviews');
	echo head(array('title'=>$pageTitle, 'bodyclass'=>'items tags'));
?>
<?php include(physical_path_to('common/nav.php')); ?>
<div id="content" class="span4">
	<h1><?php echo $pageTitle; ?></h1>
	<?php echo tag_cloud($tags, 'items/browse'); ?>
</div>

<?php echo foot(); ?>
