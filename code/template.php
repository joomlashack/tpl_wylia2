<?php
/**
 * @package     Wylia 2
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
    <head>
        <w:head />
    </head>
    <body class="<?php   echo $responsive . $fixedClass . $sidebarClass?>">
        <header id="header" class="relative spacing-bottom">
            <div class="<?php echo $containerClass ?>">
                <?php if ($this->countModules('toolbar')) : ?>
                <div class="wrapper-toolbar">
                    <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-fixed-top <?php echo $footerWrapperClass?>" type="toolbar" name="toolbar" />
                </div>
                <?php endif; ?>
                <?php if ($this->countModules('top')) : ?>
                <div id="top">
                    <div class="container-fluid">
                        <w:module type="row-fluid" name="top" chrome="wrightflexgrid" />
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($this->countModules('menu') || $this->countModules('logo')) : ?>
                <div class="wrapper-logo-menu <?php echo $gridMode; ?> ">
                    <w:logo name="menu" menuWrapClass="navbar-inverse" type="menu"/>
                </div>
                <?php endif; ?>
           </div>
        </header>
        <div class="<?php echo $containerClass ?>">
            <?php if ($this->countModules('featured')) : ?>
            <!-- featured -->
            <div id="featured">
                <div class="inner-padding background-white spacing-bottom">
                    <w:module type="none" name="featured" />
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->countModules('extra')) : ?>
                <!-- grid-top3 -->
                <div id="extra">
                    <div class="inner-padding background-main spacing-bottom">
                        <w:module type="row-fluid" name="extra" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-top')) : ?>
                <!-- grid-top -->
                <div id="grid-top">
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-top2')) : ?>
                <!-- grid-top2 -->
                <div id="grid-top2">
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-top3')) : ?>
                <!-- grid-top3 -->
                <div id="grid-top3">
                    <div class="inner-padding background-main spacing-bottom">
                        <w:module type="row-fluid" name="grid-top3" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('breadcrumbs')) : ?>
                <!-- breadcrumbs -->
                <div id="breadcrumbs">
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="single" name="breadcrumbs" chrome="none" />
                    </div>
                </div>
            <?php endif; ?>
            <div id="main-content" class="row-fluid">
                <!-- sidebar1 -->
                <aside id="sidebar1">
                    <w:module name="sidebar1" chrome="wrightxhtml" />
                </aside>
                <!-- main -->
                <section id="main">
                    <?php if ($this->countModules('above-content')) : ?>
                        <!-- above-content -->
                        <div id="above-content">
                            <w:module type="none" name="above-content" />
                        </div>
                    <?php endif; ?>
                    <div id="component-area">
                        <?php if ($moduleMain) : ?>
                            <w:module type="none" name="main" />
                        <?php else : ?>
                            <!-- component -->
                            <w:content />
                        <?php endif; ?>
                    </div>
                    <?php if ($this->countModules('below-content')) : ?>
                        <!-- below-content -->
                        <div id="below-content">
                            <w:module type="none" name="below-content" />
                        </div>
                    <?php endif; ?>
                </section>
                <!-- sidebar2 -->
                <aside id="sidebar2">
                    <w:module name="sidebar2" chrome="wrightxhtml" />
                </aside>
            </div>
            <?php if ($this->countModules('grid-bottom')) : ?>
                <!-- grid-bottom -->
                <div id="grid-bottom" >
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-bottom2')) : ?>
                <!-- grid-bottom2 -->
                <div id="grid-bottom2" >
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-bottom3')) : ?>
                <!-- grid-bottom3 -->
                <div id="grid-bottom3" >
                    <div class="inner-padding background-white spacing-bottom">
                        <w:module type="row-fluid" name="grid-bottom3" chrome="wrightflexgrid" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- footer -->
        <div class="wrapper-footer<?php echo $footerWrapperClass?>">
            <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky z3 relative" <?php else : ?>class="z3 relative"<?php endif;?>>
                <div class="inner-padding">
                    <div class="<?php echo $containerClass ?>">
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

        <w:module type="none" name="debug" chrome="none" />
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_wylia2/js/wylia.js'></script>
        <?php
            $browser = JBrowser::getInstance();

            if ($browser->getBrowser() == 'msie')
            {
                $major = $browser->getMajor();

                if ((int)$major <= 9) {
                    echo "<script type='text/javascript' src='" . JURI::root() .  "templates/" . $this->document->template . "/js/jquery.equalheights.js'></script>";
                    echo "<script type='text/javascript' src='" . JURI::root() .  "templates/" . $this->document->template . "/js/fallback.js'></script>";
                }

            }
        ?>
    </body>
</html>

