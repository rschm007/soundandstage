<?php if (have_rows('aboutme')) : ?>
    <?php while (have_rows('aboutme')) : the_row();

        $resume = get_field("resume");
        // Get sub field values.
        $header = get_sub_field('header');
        $image = get_sub_field('image');
        $content = get_sub_field('content');

    ?>
        <div class="flex flex-col items-center justify-center w-full h-full space-y-16 md:space-y-24">

            <h4 class="text-4xl text-center w-full h-full capitalize font-bold mt-8">
                <?php echo $header ?>
            </h4>

            <article class="flex flex-col md:flex-row items-start justify-between w-full md:space-x-24 px-12 md:px-36 space-y-16 md:space-y-0">
                <?php if (!empty($image)) : ?>
                    <figure class="flex flex-col items-center justify-center w-full h-full space-y-8 md:space-y-12">
                        <img class="min-w-[20rem]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                        <?php if ($resume) :
                            get_template_part('template-parts/content-resume'); ?>
                        <?php endif; ?>
                    </figure>
                <?php endif; ?>

                <?php if (!empty($content)) : ?>
                    <div class="flex flex-col items-center justify-center text-left text-white space-y-8">
                        <?php echo $content ?>
                    </div>
                <?php endif ?>

            </article>

        </div>
    <?php endwhile; ?>
<?php endif; ?>