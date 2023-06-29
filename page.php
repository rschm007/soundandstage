<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	$subpage_category = get_field('subpage_category');
	if ($subpage_category) : ?>

		<h3 class="text-4xl text-center w-full h-full capitalize font-bold mt-8">
			<?php single_post_title() ?>
		</h3>

		<div class="posts-search flex flex-row justify-center items-center w-full my-12">
			<?php get_search_form(); ?>
		</div>

		<div class="w-full h-full flex flex-row items-center justify-center flex-wrap gap-8 my-16">
			<?php foreach ($subpage_category as $post) :
				// Setup this post for WP functions (variable must be named $post).
				setup_postdata($post); ?>

				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

				<a href="<?php the_permalink(); ?>" class="relative flex flex-col items-center justify-center md:col-span-1 h-96 w-96 z-10 group">
					<img class="object-cover bg-cover bg-center w-full h-full group-hover:opacity-40 opacity-100 transition-all duration-150" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />

					<h4 class="text-2xl font-light -md:-mt-12 bg-slate-900/90 w-full px-8 py-4 z-50 text-center">
						<?php the_title(); ?>
					</h4>
				</a>
			<?php endforeach; ?>
		</div>
		<?php
		// Reset the global post object so that the rest of the page works correctly.
		wp_reset_postdata(); ?>
	<?php endif; ?>

</main><!-- #main -->