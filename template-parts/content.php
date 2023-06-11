<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		$hero = get_field('hero-header');
		if ($hero) : get_template_part('template-parts/hero-header/hero-header')
		?>
		<?php endif; ?>

		<!-- posts - composition -->
		<?php
		$composition_group_key = "group_646ffad4410cb";
		$composition = acf_get_fields($composition_group_key);
		if ($composition) : get_template_part('template-parts/portfolio/portfolio-posts-composition')
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