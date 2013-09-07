<?php echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => 'page simple-page',
    'bodyid' => metadata('simple_pages_page', 'slug')
)); ?>
<?php include(physical_path_to('common/nav.php')); ?>
<div id="content" class="span4">
    <h1><?php echo metadata('simple_pages_page', 'title'); ?></h1>
    <div class="cols">
	    <?php
	    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
	    if (metadata('simple_pages_page', 'use_tiny_mce')) {
	        echo $text;
	    } else {
	        echo eval('?>' . $text);
	    }
	    ?>
    </div>
    <div id="recent-items">
        <b>Recent Interviews</b>
        <?php 
            set_loop_records('items', get_recent_items(10));
            if (has_loop_records('items')): 
        ?>
            <?php foreach (loop('items') as $item): ?>
                <?php $elements = item_type_elements(); ?>
                <?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <p class="view-items-link"><?php echo link_to_items_browse(__('All Interviews')); ?></p>
    </div>
</div>

<?php echo foot(); ?>
