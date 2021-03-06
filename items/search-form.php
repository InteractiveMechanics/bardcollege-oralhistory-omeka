<?php
if (!empty($formActionUri)):
    $formAttributes['action'] = $formActionUri;
else:
    $formAttributes['action'] = url(array('controller'=>'items',
                                          'action'=>'browse'));
endif;
$formAttributes['method'] = 'GET';
?>

<form <?php echo tag_attributes($formAttributes); ?>>
    <div id="search-keywords" class="field">
        <?php echo $this->formLabel('keyword-search', __('Search for Keywords')); ?>
        <div class="inputs">
        <?php
            echo $this->formText(
                'search',
                @$_REQUEST['search'],
                array('id' => 'keyword-search', 'size' => '40')
            );
        ?>
        </div>
    </div>
    <div id="search-narrow-by-fields" class="field">
        <?php echo $this->formLabel('advanced-0-terms', __('Narrow by Specific Fields')); ?>
        <div class="inputs">
        <?php
        // If the form has been submitted, retain the number of search
        // fields used and rebuild the form
        if (!empty($_GET['advanced'])) {
            $search = $_GET['advanced'];
        } else {
            $search = array(array('field'=>'','type'=>'','value'=>''));
        }

        //Here is where we actually build the search form
        foreach ($search as $i => $rows): ?>
            <div class="search-entry">
                <label>
                    <?php
                    //The POST looks like =>
                    // advanced[0] =>
                    //[field] = 'description'
                    //[type] = 'contains'
                    //[terms] = 'foobar'
                    //etc
                    echo $this->formSelect(
                        "advanced[$i][element_id]",
                        @$rows['element_id'],
                        array(),
                        get_table_options('Element', null, array(
                            'record_types' => array('Item', 'All'),
                            'sort' => 'alphaBySet')
                        )
                    ); ?>
                </label>
                <label>
                    <?php
                    echo $this->formSelect(
                        "advanced[$i][type]",
                        @$rows['type'],
                        array(),
                        label_table_options(array(
                            'contains' => __('contains'),
                            'does not contain' => __('does not contain'),
                            'is exactly' => __('is exactly'),
                            'is empty' => __('is empty'),
                            'is not empty' => __('is not empty'))
                        )
                    ); ?>
                </label>
                <?php
                echo $this->formText(
                    "advanced[$i][terms]",
                    @$rows['terms'],
                    array('size' => '20')
                );
                ?>
                <button type="button" class="remove_search" disabled="disabled" style="display: none;">-</button>
            </div>
        <?php endforeach; ?>
        </div>
        <button type="button" class="add_search"><?php echo __('Add a Field'); ?></button>
    </div>

    <div class="field">
        <?php echo $this->formLabel('tag-search', __('Search By Tags')); ?>
        <div class="inputs">
        <?php
            echo $this->formText('tags', @$_REQUEST['tags'],
                array('size' => '40', 'id' => 'tag-search')
            );
        ?>
        </div>
    </div>

    <?php fire_plugin_hook('public_items_search', array('view' => $this)); ?>
    <div>
        <input type="submit" class="submit" name="submit_search" id="submit_search_advanced" value="<?php echo __('Search'); ?>" />
    </div>
</form>

<?php echo js_tag('items-search'); ?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.Search.activateSearchButtons();
    });
</script>
