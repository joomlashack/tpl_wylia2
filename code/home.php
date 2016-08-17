<?php
/**
 * @package     Wylia
 * @subpackage  Home
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

if (file_exists(JPATH_THEMES . '/js_wylia/custom.php')) {
	require_once('custom.php');
}
else {
	require_once('template.php');
}
