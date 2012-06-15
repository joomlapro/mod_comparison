<?php
/**
 * @package		Comparison
 * @subpackage	mod_comparison
 * @copyright	Copyright (C) AtomTech, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::stylesheet('mod_comparison/comparison.css', false, true, false);
JHtml::script('mod_comparison/jquery.min.js', false, true);
JHtml::script('mod_comparison/jquery.qbeforeafter.js', false, true);
?>
<div class="comparisons<?php echo $moduleclass_sfx ?>">
	<style type="text/css">
		.comparison<?php echo $uniqueid ?> {
			width: <?php echo $width ?>px;
			height: <?php echo $height ?>px;
		}
	</style>
	<script type="text/javascript">
		$(function () {
		    $('.comparison<?php echo $uniqueid ?>').qbeforeafter({
		        defaultgap: <?php echo intval($width / 2) ?>,
		        leftgap: 0,
		        rightgap: 0,
		        caption: <?php echo $captions ?>,
		        reveal: 0.5
		    });
		});
	</script>
	<div class="comparison<?php echo $uniqueid ?>">
		<img width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $beforecaption ?>" src="<?php echo 'images/' . $beforeimage ?>" />
		<img width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $aftercaption ?>" src="<?php echo 'images/' .$afterimage ?>" />
	</div>
</div>