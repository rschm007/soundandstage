<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- .entry-header -->
	<?php
	$hero = get_field('hero-header');
	if ($hero) : get_template_part('template-parts/hero-header/hero-header')
	?>
	<?php endif; ?>

	<!-- .entry-content -->
	<div class="entry-content">

		<!-- portfolio page -->
		<?php
		if (is_page("portfolio")) :
			get_template_part('template-parts/portfolio/portfolio-categories')
		?>
		<?php endif; ?>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'soundandstage'),
				'after'  => '</div>',
			)
		);
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();
?>