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
		.comparison {
			width: 450px;
			height: 604px;
		}
	</style>
	<script type="text/javascript">
		$(function () {
		    $('.comparison').qbeforeafter({
		        defaultgap: 225,
		        leftgap: 0,
		        rightgap: 0,
		        caption: true,
		        reveal: 0.5
		    });
		});
	</script>
	<div class="comparison">
		<img width="450" height="604" alt="before" src="/images/ba_demo_1.jpg">
		<img width="450" height="604" alt="after" src="/images/ba_demo_2.jpg">
	</div>
</div>