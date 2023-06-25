<?php if (have_rows('aboutme')) : ?>
    <?php while (have_rows('aboutme')) : the_row();

        // Get sub field values.
        $header = get_sub_field('header');

    ?>
        <div class="flex flex-col items-center justify-center w-full h-full">

            <div class="flex flex-row items-center w-full justify-between">
                <h3 class="text-4xl text-center w-full h-full capitalize font-bold mt-8">
                    <?php single_post_title(); ?>
                </h3>
            </div>

            <div class="flex flex-row items-center w-full justify-between">
                <h4 class="text-4xl text-center w-full h-full capitalize font-bold mt-8">
                    <?php echo $header ?>
                </h4>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>