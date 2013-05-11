jQuery(function() {
    var menuNavCollapse = jQuery('#menu .nav-collapse');
    var toolbarNavCollapse = jQuery('#toolbar .nav-collapse');

    function navPositionMobile() {
        var heightHeader = jQuery('#header').height();
        var heightToolbar = jQuery('#toolbar').height();
        menuNavCollapse.css('top',heightHeader);
        toolbarNavCollapse.css('top',heightToolbar);
    }
    function navPosition(){
        if (jQuery(window).width() <= 979){
            navPositionMobile();
        }else{
            menuNavCollapse.css('top','auto');
            toolbarNavCollapse.css('top','auto');
        }
    }
    navPosition();
     function footerWidth(){
        var wrapperFooter = jQuery('.wrapper-footer');
        var wyliaFooter = jQuery('#footer');
        var wrapperFooterWidth = wrapperFooter.width();
        wyliaFooter.css('width',wrapperFooterWidth);
    }
    footerWidth();
    jQuery(window).resize(function() {
        navPosition();
        footerWidth();
    });


    jQuery('.wylia-popover').each(function() {
        var wContent = jQuery(this).children('.wylia-content').html();
        if (wContent) {
            jQuery(this).append('<div class="wylia-plus">+</div>');
            jQuery(this).click(function() {
                if (jQuery(this).parent().children('.wylia-popover-content').length) {
                    jQuery(this).children('.wylia-plus').html('+');
                    jQuery(this).parent().children('.wylia-popover-content').remove();
                }
                else {
                    jQuery(this).children('.wylia-plus').html('-');
                    jQuery(this).parent().append('<div class="wylia-popover-content">' + wContent + '</div>');
                }
            });
        }
    })

});