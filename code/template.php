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
}else{
    $fixedClass = ' fixed';
    $contentFixed = ' content-fixed';
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
<body<?php if ($bodyclass != "") :?> class="<?php echo $bodyclass . $responsive . $fixedClass?>"<?php endif; ?>>
    
    <?php if ($fixedClass ==" fixed") : ?>
    
    <?php else : ?>
    <!-- header -->
    <header id="header">
        <div class="<?php echo $containerClass ?>">
            <div class="wrapper-toolbar"> 
                <?php if ($this->countModules('toolbar') or $this->countModules('menu') or $this->countModules('logo')) : ?>
                    <w:logo name="toolbar" menuWrapClass="navbar-fixed-top navbar-inverse" containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode ?>" />
                    <!-- menu -->
                    <?php if ($this->countModules('menu')) : ?>
                        <div class="<?php echo $gridMode; ?> clearfix">
                            <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-inverse" name="menu" />
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
           </div>
       </div>
    </header>
    <?php endif; ?>
    <div class="<?php echo $containerClass . $contentFixed?>">
        <?php if ($fixedClass ==" fixed") : ?>
           <!-- header -->
            <header id="header">
                <div class="<?php echo $containerClass ?>">
                    <div class="wrapper-toolbar"> 
                        <?php if ($this->countModules('toolbar') or $this->countModules('menu') or $this->countModules('logo')) : ?>
                            <w:logo name="toolbar" menuWrapClass="navbar-fixed-top navbar-inverse" containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode ?>" />
                            <!-- menu -->
                            <?php if ($this->countModules('menu')) : ?>
                                <div class="<?php echo $gridMode; ?> clearfix">
                                    <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-inverse" name="menu" />
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                   </div>
               </div>
            </header>
        <?php endif; ?>

        <div class="container-fluid">       
            <?php if ($this->countModules('menu')) : ?>
                <!-- menu -->
                <w:nav name="menu" />
            <?php endif; ?>
             <!-- featured -->
             <?php if ($this->countModules('featured')) : ?>
             <div id="featured">
                 <w:module type="none" name="featured" chrome="xhtml" />
             </div>
             <?php endif; ?>
             <!-- grid-top -->
             <?php if ($this->countModules('grid-top')) : ?>
             <div id="grid-top">
                 <w:module type="<?php echo $gridMode; ?>" name="grid-top" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
             <?php if ($this->countModules('grid-top2')) : ?>
             <!-- grid-top2 -->
             <div id="grid-top2">
                 <w:module type="<?php echo $gridMode; ?>" name="grid-top2" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
            <div id="main-content" class="row-fluid">
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
             <?php if ($this->countModules('grid-bottom')) : ?>
             <!-- grid-bottom -->
             <div id="grid-bottom" >
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
        </div>
        
    </div>
    
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
    
</body>
</html>
