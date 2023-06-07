<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soundandstage
 */

?>

<footer id="colophon" class="hidden site-footer flex-row items-center justify-between sm:h-80 lg:h-32 bg-black px-16">
	<div class="flex flex-col items-start justify-start mt-4">
		<p class="text-white text-xs font-semibold mb-1">
			©Vincent Olivieri
		</p>

		<div class="flex flex-row items-center">
			<i class="fa-solid fa-phone text-white text-[10px] mr-1"></i>
			<p class="text-white text-xs">
				917.569.7905
			</p>
		</div>

		<div class="flex flex-row items-center">
			<i class="fa-sharp fa-solid fa-envelope text-white text-[10px] mr-1"></i>
			<a href="mailto:vrojr.design@gmail.com" target="_blank" class="text-white text-xs underline">
				vrojr.design@gmail.com
			</a>
		</div>

		<div class="flex flex-row items-center space-x-2">
			<a href="https://www.facebook.com/vrojr" target="_blank">
				<i class="fa-brands fa-square-facebook text-white text-sm"></i>
			</a>
		</div>

	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>