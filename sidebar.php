<?php

/**
 * Mobile nav sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soundandstage
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- WIP -->
<aside id="secondary" class="flex flex-col w-full h-full md:hidden">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<!-- #secondary -->