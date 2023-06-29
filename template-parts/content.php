<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

?>

<?php $post = get_post_type(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		$hero = get_field('hero-header');
		if ($hero) : get_template_part('template-parts/hero-header/hero-header')
		?>
		<?php endif; ?>


		<!-- posts - composition -->
		<?php
		$composition = str_contains($post, "composition");
		if ($composition) : get_template_part('template-parts/portfolio/portfolio-posts-composition')
		?>
		<?php endif; ?>


		<!-- posts - design -->
		<?php
		$design = str_contains($post, "design");
		if ($design) : get_template_part('template-parts/portfolio/portfolio-posts-design')
		?>
		<?php endif; ?>


		<!-- posts - art -->
		<?php
		$art = str_contains($post, "art");
		if ($art) : get_template_part('template-parts/portfolio/portfolio-posts-art')
		?>
		<?php endif; ?>


</article><!-- #post-<?php the_ID(); ?> -->