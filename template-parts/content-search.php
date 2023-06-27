<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

?>

<div class="search-result">

	<a class="relative flex flex-col items-center justify-center md:col-span-1 z-10 group" href="<?php the_permalink(); ?>">

		<div class="relative flex flex-col items-center justify-center md:col-span-1 h-96 w-96 z-10 group">

			<?php echo soundandstage_post_thumbnail(); ?>

			<h4 class="text-2xl font-light -md:-mt-12 bg-slate-900/90 w-full px-8 py-4 z-50 text-center">
				<?php the_title(); ?>
			</h4>

		</div>

	</a>
	
</div>