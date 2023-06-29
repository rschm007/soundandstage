<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundandstage
 */

?>

<?php $post = get_post_type(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- .entry-content -->
	<div class="entry-content">

		<!-- .entry-header -->
		<?php
		$hero = get_field('hero_header');
		if ($hero) : get_template_part('template-parts/hero-header/hero-header')
		?>
		<?php endif; ?>

		<?php
		if (is_page("portfolio")) :
			get_template_part('template-parts/portfolio/portfolio-categories')
		?>
		<?php endif; ?>

		<?php
		if (is_page("about")) :
			get_template_part('template-parts/about/content-about')
		?>
		<?php endif; ?>
		
	</div>

</article><!-- #post-<?php the_ID(); ?> -->