$(document).ready(function(){
	$('.download-file').html('<i class="download-icon"></i> Download a PDF version of this interview.');
	$('.item-file:not(.application-pdf)').remove();
	
	$('#advanced-form > p > a').text('Advanced Search');
	whiteList = [
        'Title',
        'Description',
        'Creator',
        'Date',
        'Rights',
        'Format',
        'Type',
        'Coverage'
    ];
	
	jQuery.each($("[id='advanced-0-element_id-optgroup-Dublin Core'] option"), function(index, option) {
        if (jQuery.inArray(option.label,whiteList) == -1) {
            jQuery(option).remove();
        }
    });
});