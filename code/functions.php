<?php
/**
 * @package     Wylia
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
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

$moduleMain = ($this->params->get('wylia_module_main','0') == '1' ? true : false);