<?php

/**
 * The template for displaying a full-width hero banner with background image and header captions
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Soundandstage
 */
?>

<?php if (have_rows('hero-header')) : ?>
    <?php while (have_rows('hero-header')) : the_row();
        // Get sub field values.
        $image = get_sub_field('image');
        $header = get_sub_field('header');
        $sub_header = get_sub_field('sub-header');
        $tagline = get_sub_field('tagline');
    ?>

        <!-- <script>
            console.log(<?= json_encode($image); ?>);
        </script> -->

        <header id="hero" class="h-[85vh] relative object-cover flex flex-col items-center justify-center bg-center bg-no-repeat <?php echo is_front_page() ? "" : "bg-cover" ?>" style="background-image: url(<?php echo esc_url($image['url']); ?>)" alt="<?php echo esc_attr($image['alt']); ?>">

            <div class="flex flex-col items-center justify-center w-10/12 h-2/3">

                <div class="flex flex-col items-center bg-slate-800/50 justify-center w-full h-full relative z-10 space-y-3 max-w-fit max-h-fit my-32">
                    <div className="space-y-3" style="padding: 2rem">
                        <h1 class="relative z-10 text-white text-5xl text-center uppercase font-bold">
                            <?php echo $header ?>
                        </h1>

                        <?php if (!empty($sub_header)) : ?>
                            <h2 class="relative z-10 text-white text-2xl text-center uppercase font-light">
                                <?php echo $sub_header ?>
                                </h1>
                            <?php endif ?>
                    </div>
                </div>

            </div>

        </header>
    <?php endwhile; ?>
<?php endif; ?>