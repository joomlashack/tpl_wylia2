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

    // Standout the second word for headings
    jQuery('.page-header > h1, .page-header > h2, [class*="module"] > h1, [class*="module"] > h2, [class*="module"] > h3, [class*="module"] > h4, [class*="module"] > h5, [class*="module"] > h6').each(function(){
        var text = jQuery(this).text().split(' ');
        var n = 1;
        var t = 'span';
        if(n>=text.length){
            return;
        }
        text[n] = '<'+t+'>'+text[n]+' </'+t+'>';
        jQuery(this).html( text.join(' ') );
    });
});