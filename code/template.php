<?php
/**
 * @copyright   Copyright (C) 2005 - 2012 Joomlashack / Meritage Assets
 * @author      Joomlashack
 * @package     Wright
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}

$bodyclass = "";
if ($this->countModules('toolbar')) {
    $bodyclass = "toolbarpadding";
}
$responsivePage = $this->params->get('responsive','1');
$responsive = ' responsive';
if ($responsivePage == 0) {
    $responsive = ' no-responsive';
}

?>
<doctype>
<html>
<head>
    
<w:head />
</head>
<body<?php if ($bodyclass != "") :?> class="<?php echo $bodyclass .  $responsive?>"<?php endif; ?>>
    <div class="bgGradient"></div>
    <?php if ($this->countModules('toolbar')) : ?>
        <!-- menu -->
        <div class="wrappToolbar">
            <w:logo name="toolbar" menuWrapClass="navbar-fixed-top navbar-inverse" containerClass="container-fluid" rowClass="<?php echo $gridMode ?>" />
        </div>
        <?php if ($this->countModules('menu')) : ?>
                <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-inverse" name="menu" />
        <?php endif; ?>
    <?php endif; ?>
    <div class="<?php echo $containerClass ?> container-showtime">
        <!-- header -->
        <header id="header">
            <div class="<?php echo $gridMode; ?> clearfix">
                <w:logo name="menu" />
                <div class="clear"></div>
            </div>
        </header>
   
        <!-- featured -->
        <?php if ($this->countModules('featured')) : ?>
        <div id="featured" class="featured-position">
            <w:module type="none" name="featured" chrome="xhtml" />
        </div>
        <?php endif; ?>
        <!-- grid-top -->
        <?php if ($this->countModules('grid-top')) : ?>
        <div id="grid-top" class="hero-unit grid-top">
            <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('grid-top2')) : ?>
        <!-- grid-top2 -->
        <div id="grid-top2">
            <w:module type="<?php echo $gridMode; ?>" name="grid-top2" chrome="wrightflexgrid" />
        </div>
        <?php endif; ?>
        <div id="main-content" class="<?php echo $gridMode; ?>">
            <!-- sidebar1 -->
            <aside id="sidebar1">
                <w:module name="sidebar1" chrome="xhtml" />
            </aside>
            <!-- main -->
            <section id="main">
                <?php if ($this->countModules('above-content')) : ?>
                <!-- above-content -->
                <div id="above-content">
                    <w:module type="none" name="above-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
                <?php if ($this->countModules('breadcrumbs')) : ?>
                <!-- breadcrumbs -->
                <div id="breadcrumbs">
                        <w:module type="single" name="breadcrumbs" chrome="none" />
                </div>
                <?php endif; ?>
                <!-- component -->
                <w:content />
                <?php if ($this->countModules('below-content')) : ?>
                <!-- below-content -->
                <div id="below-content">
                    <w:module type="none" name="below-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
            </section>
            <!-- sidebar2 -->
            <aside id="sidebar2">
                <w:module name="sidebar2" chrome="xhtml" />
            </aside>
        </div>
        <hr class="showtime-hr">
        <?php if ($this->countModules('grid-bottom')) : ?>
        <!-- grid-bottom -->
        <div id="grid-bottom" class="grid-bottom">
                <w:module type="<?php echo $gridMode; ?>" name="grid-bottom" chrome="wrightflexgrid" />
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('grid-bottom2')) : ?>
        <!-- grid-bottom2 -->
        <div id="grid-bottom2" >
                <w:module type="<?php echo $gridMode; ?>" name="grid-bottom2" chrome="wrightflexgrid" />
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('bottom-menu')) : ?>
        <!-- bottom-menu -->
        <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" name="bottom-menu" />
        <?php endif; ?>
        
        <hr class="showtime-hr">
    </div>
    <script type="text/javascript">

     jQuery.noConflict();
        jQuery(document).ready(function(){

            var wrapperToolbarHeight = jQuery('.wrapper-toolbar').css('min-height');

            jQuery('.wrappToolbar').css('height','11px');
            jQuery('#toolbar ul.nav').css('padding-bottom','20px');

            jQuery("#btnToolbar").click(function(){

                jQuery('.wrapper-toolbar').toggleClass('wtheight')


                if (jQuery('.wrapper-toolbar').hasClass('wtheight')) {
                    jQuery('.wrappToolbar').css('height',wrapperToolbarHeight);
                    jQuery('#toolbar ul.nav').css('padding-bottom','0');
                }else{

                    jQuery('.wrappToolbar').css('height','11px');
                    jQuery('#toolbar ul.nav').css('padding-bottom','20px');
                };
            });
            
        });

  </script>
    <!-- footer -->
    <div class="wrapper-footer">
        <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>
             <div class="<?php echo $containerClass ?>">
                <?php if ($this->countModules('footer')) : ?>
                    <w:module type="<?php echo $gridMode; ?>" name="footer" chrome="wrightflexgrid" />
                <?php endif; ?>
                <w:footer />
            </div>
        </footer>
    </div>
    <div class="bg-footer"></div>
</body>
</html>
