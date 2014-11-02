jQuery(document).ready(function($) {
	jQuery('div.tt-popup-admin-content').hide();
	jQuery('div#tt-popup-admin-li-1').show();
	jQuery('#tt-popup-admin-nav li').removeClass('active');
	jQuery('#tt-popup-admin-nav li#tt-popup-admin-li1').addClass('active');
	jQuery('#tt-popup-admin-nav li').click(function() {
		var id = jQuery(this).attr('id').substr(17);
			jQuery('div.tt-popup-admin-content').hide();
			jQuery('#tt-popup-admin-nav li').removeClass('active');
			jQuery('#tt-popup-admin-nav li#tt-popup-admin-li'+id).addClass('active');
			jQuery('div.tt-popup-admin-content#tt-popup-admin-li-'+id).show();
	});
	
});