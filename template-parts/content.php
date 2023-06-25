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

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'soundandstage'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'soundandstage'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php soundandstage_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->