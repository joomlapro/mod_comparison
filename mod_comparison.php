<?php
/**
 * @package		Comparison
 * @subpackage	mod_comparison
 * @copyright	Copyright (C) AtomTech, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$uniqueid = htmlspecialchars($params->get('uniqueid'));
$width = htmlspecialchars($params->get('width'));
$height = htmlspecialchars($params->get('height'));
$captions = htmlspecialchars($params->get('captions'));
$beforecaption = htmlspecialchars($params->get('beforecaption'));
$aftercaption = htmlspecialchars($params->get('aftercaption'));
$beforeimage = htmlspecialchars($params->get('beforeimage'));
$afterimage	= htmlspecialchars($params->get('afterimage'));

require JModuleHelper::getLayoutPath('mod_comparison', $params->get('layout', 'default'));
