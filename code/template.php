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
    $footerWrapperClass = ' container';
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
if ($this->countModules('sidebar1') && $this->countModules('sidebar2')){
    $sidebarClass= ' sb1 sb2';
}elseif ($this->countModules('sidebar2')) {
        $sidebarClass = ' sb2';
}elseif ($this->countModules('sidebar1')) {
        $sidebarClass = ' sb1';
}

?>
<doctype>
<html>
<head>  
    <w:head />
</head>
<body class="<?php if ($bodyclass != "") :?><?php echo $bodyclass?> <?php endif; ?><?php   echo $responsive . $fixedClass . $sidebarClass?>">
    <!-- header -->
    <header id="header">
        <div class="<?php echo $containerClass ?>">
            <div class="wrapper-toolbar"> 
                <?php if ($this->countModules('top')) : ?>
                    <div id="top">
                         <w:module type="row-fluid" name="top" chrome="wrightflexgrid" />
                    </div>
                <?php endif; ?>
               <?php if ($this->countModules('toolbar') or $this->countModules('logo')) : ?>
                   <w:logo name="toolbar" menuWrapClass="navbar-fixed-top navbar-inverse  <?php if ($fixedClass ==" fixed") : ?> container<?php endif; ?>" containerClass="container-fluid" rowClass="row-fluid" />
               <?php endif; ?>
            </div>
       </div>
    </header>
    <div class="<?php echo $containerClass . $contentFixed?>">
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
                 <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
             <?php if ($this->countModules('grid-top2')) : ?>
             <!-- grid-top2 -->
             <div id="grid-top2">
                 <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
             <?php if ($this->countModules('grid-top3')) : ?>
             <!-- grid-top3 -->
             <div id="grid-top3">
                 <w:module type="row-fluid" name="grid-top3" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
             <?php if ($this->countModules('breadcrumbs')) : ?>
                 <!-- breadcrumbs -->
                 <div id="breadcrumbs">
                         <w:module type="single" name="breadcrumbs" chrome="none" />
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
                     <!-- component -->
                     <w:content />
                 </section>
                 <!-- sidebar2 -->
                 <aside id="sidebar2">
                     <w:module name="sidebar2" chrome="xhtml" />
                 </aside>
             </div>
             <?php if ($this->countModules('below-content')) : ?>
                <!-- below-content -->
                <div id="below-content">
                    <w:module type="none" name="below-content" chrome="xhtml" />
                </div>
             <?php endif; ?>
             <?php if ($this->countModules('grid-bottom')) : ?>
             <!-- grid-bottom -->
             <div id="grid-bottom" >
                     <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
             <?php if ($this->countModules('grid-bottom2')) : ?>
             <!-- grid-bottom2 -->
             <div id="grid-bottom2" >
                     <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
             </div>
             <?php endif; ?>
        </div>
        
    </div>
    <!-- footer -->
    <div class="wrapper-footer<?php echo $footerWrapperClass?>">
        <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>
            <hr class="hr-footer">
            <div class="<?php echo $containerClass ?>">
            <div class="container-fluid">
                <?php if ($this->countModules('grid-bottom3')) : ?>
                <!-- grid-bottom3 -->
                <div id="grid-bottom3" >
                        <w:module type="row-fluid" name="grid-bottom3" chrome="wrightflexgrid" />
                </div>
                <?php endif; ?>
                <?php if ($this->countModules('bottom-menu')) : ?>
                    <!-- bottom-menu -->
                    <w:nav containerClass="contaniner-fluid" rowClass="row-fluid" name="bottom-menu" />
                <?php endif; ?>
                <?php if ($this->countModules('footer')) : ?>
                    <w:module type="<?php echo $gridMode; ?>" name="footer" chrome="wrightflexgrid" />
                <?php endif; ?>
                <w:footer />
            </div>
            </div>
        </footer>
    </div>
    
</body>
</html>
    