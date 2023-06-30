<?php

/**
 * Portfolio page template
 *
 * Contains Portfolio Page fields
 *
 * @package Soundandstage
 */
?>

<h3 class="text-4xl text-center w-full h-full capitalize font-bold mt-8"><?php single_post_title() ?></h3>

<div class="w-full flex flex-col items-center justify-center space-y-8 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-5 px-12 md:-mt-12">
    <?php if (have_rows('portfolio_category_one')) : ?>
        <?php while (have_rows('portfolio_category_one')) : the_row();

            // get sub field values
            $category = get_sub_field('category');
            $image = get_sub_field('category_image');
            $link = get_sub_field('category_link');

        ?>

            <a href="<?php echo $link; ?>" class="relative flex flex-col items-center justify-center md:col-span-1 h-56 md:h-2/3 w-full z-10 group">
                <img class="object-cover bg-cover bg-center w-full h-full group-hover:opacity-40 opacity-100 transition-all duration-150" src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr($image['alt']); ?>" />

                <h4 class="absolute text-3xl md:text-4xl font-bold -md:-mt-12 bg-slate-800/70 px-8 py-4 z-50 text-center">
                    <?php the_sub_field('category'); ?>
                </h4>
            </a>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('portfolio_category_two')) : ?>
        <?php while (have_rows('portfolio_category_two')) : the_row();

            // get sub field values
            $category = get_sub_field('category');
            $image = get_sub_field('category_image');
            $link = get_sub_field('category_link');

        ?>

            <a href="<?php $link; ?>" class="relative flex flex-col items-center justify-center md:col-span-1 h-56 md:h-2/3 w-full z-10 group">
                <img class="object-cover bg-cover bg-center w-full h-full group-hover:opacity-40 opacity-100 transition-all duration-150" src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr($image['alt']); ?>" />

                <h4 class="absolute text-3xl md:text-4xl font-bold -md:-mt-12 bg-slate-800/70 px-8 py-4 z-50">
                    <?php the_sub_field('category'); ?>
                </h4>
            </a>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('portfolio_category_three')) : ?>
        <?php while (have_rows('portfolio_category_three')) : the_row();

            // get sub field values
            $category = get_sub_field('category');
            $image = get_sub_field('category_image');
            $link = get_sub_field('category_link');

        ?>

            <a href="<?php $link; ?>" class="relative flex flex-col items-center justify-center md:col-span-1 h-56 md:h-2/3 w-full z-10 group">
                <img class="object-cover bg-cover bg-center w-full h-full group-hover:opacity-40 opacity-100 transition-all duration-150" src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr($image['alt']); ?>" />

                <h4 class="absolute text-3xl md:text-4xl font-bold -md:-mt-12 bg-slate-800/70 px-8 py-4 z-50">
                    <?php the_sub_field('category'); ?>
                </h4>
            </a>

        <?php endwhile; ?>
    <?php endif; ?>
</div>