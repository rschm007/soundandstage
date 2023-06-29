<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Soundandstage
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="flex flex-col items-center justify-center page-header mt-8">
			<h2 class="text-3xl text-center w-full h-full capitalize">
				Search Results for:
			</h2>

			<?php
			/* translators: %s: search query. */
			printf(esc_html__('Search Results for: %s', 'soundandstage'), '<h3 class="text-5xl text-center w-full h-full capitalize font-bold">' . get_search_query() . '</h3>');
			?>

		</header><!-- .page-header -->

		<div class="w-full h-full flex flex-row items-center justify-center flex-wrap gap-8 my-16">
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part('template-parts/content', 'search');

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
		?>
		</div>

</main><!-- #main -->
