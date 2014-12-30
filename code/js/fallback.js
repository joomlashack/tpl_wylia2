jQuery(document).ready(function($) {

	function setImages(img,parent,attr){
		jQuery(img).each(function (i){
			jQuery(this).hide();
			var newWidth = jQuery(parent).width() - 20;
			jQuery(this).show();
			jQuery(this).css(attr , newWidth + 'px');
		});
	}

	jQuery(window).load(function(){
		if (jQuery(".is_internet.v_8").length) {
			setImages('#sidebar1 img', '#sidebar1', 'width');
			setImages('#sidebar2 img', '#sidebar2', 'width');
		}
		if (jQuery(".is_internet.v_9").length) {
			setImages('#sidebar1 img', '#sidebar1', 'max-width');
			setImages('#sidebar2 img', '#sidebar2', 'max-width');
		}
	});
	jQuery(window).resize(function(){
		if (jQuery(".is_internet.v_9").length) {
			setImages('#sidebar1 img', '#sidebar1', 'max-width');
			setImages('#sidebar2 img', '#sidebar2', 'max-width');
		}
	});

});