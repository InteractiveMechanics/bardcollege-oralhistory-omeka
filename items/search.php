<?php
$pageTitle = __('Search Items');
echo head(array('title' => $pageTitle,
           'bodyclass' => 'items advanced-search'));
?>
<?php include(physical_path_to('common/nav.php')); ?>
<div id="content" class="span4">
	<h1><?php echo __('Advanced Search'); ?></h1>
	<?php echo $this->partial('items/search-form.php', array('formAttributes' => array('id'=>'advanced-search-form'))); ?>
</div>
<?php echo foot(); ?>
