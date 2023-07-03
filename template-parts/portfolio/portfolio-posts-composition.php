<?php
$composition_group_key = "group_646ffad4410cb";
$fields = acf_get_fields($composition_group_key); // Update fields in this post
if ($fields) :
    $_fields = get_fields();

    $client = $_fields['client_name'];
    $director = $_fields['director_attribution'];
    $content = $_fields['text_content'];

?>
    <div id="portfolio-posts-composition" class="flex flex-col items-center justify-center py-12">
        <div class="flex flex-col items-center justify-center space-y-8 px-20 md:px-36">
            <h3 class="text-white text-4xl font-bold">
                <?php echo the_title(); ?>
            </h3>

            <?php if ($client || $director) : ?>
                <div class="flex flex-col md:flex-row items-center justify-start md:justify-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                    <h3 class="text-white text-xl md:text-2xl font-light">
                        <?php if ($client) : ?>
                            <?php echo $client; ?>
                        <?php endif ?>
                    </h3>

                    <h3 class="text-white text-xl md:text-2xl font-light hidden md:block">
                        |
                    </h3>

                    <h3 class="text-white text-xl md:text-2xl font-light">
                        <?php if ($director) : ?>
                            Director: <?php echo $director; ?>
                        <?php endif ?>
                    </h3>
                </div>
            <?php endif ?>

            <div class="flex flex-col text-left text-white items-center justify-center my-12">
                <?php echo $content; ?>

                <?php if (have_rows('soundcloud_embeds')) : ?>
                    <?php while (have_rows('soundcloud_embeds')) : the_row();

                        $one = get_sub_field('soundcloud_embed_one');
                        $caption_one = get_sub_field('soundcloud_embed_one_caption');
                        $two = get_sub_field('soundcloud_embed_two');
                        $caption_two = get_sub_field('soundcloud_embed_two_caption');
                        $three = get_sub_field('soundcloud_embed_three');
                        $caption_three = get_sub_field('soundcloud_embed_three_caption');
                        $four = get_sub_field('soundcloud_embed_four');
                        $caption_four = get_sub_field('soundcloud_embed_four_caption');
                        $five = get_sub_field('soundcloud_embed_five');
                        $caption_five = get_sub_field('soundcloud_embed_five_caption');

                    ?>
                        <?php if ($one) :
                            // Load value.
                            $iframe = $one;

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 0,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            $youtube = strpos($src, "youtube");
                            $vimeo = strpos($src, "vimeo");

                            $height = " md:h-24";
                            if ($youtube || $vimeo) {
                                $height = "md:h-[40rem]";
                            };

                            // Add extra attributes to iframe HTML.
                            $attributes = 'class="w-full h-48' . ' ' . $height . '" frameborder="0"';
                            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        ?>
                            <figure class="my-8 md:my-4 space-y-4 md:space-y-1 w-full md:min-w-[40vw]">
                                <?php if ($caption_one) : ?>
                                    <p class="text-white text-left w-full font-bold">
                                        <?php echo $caption_one ?>
                                    </p>
                                <?php endif ?>

                                <?php echo $iframe; ?>
                            </figure>
                        <?php endif ?>

                        <?php if ($two) :
                            // Load value.
                            $iframe = $two;

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 0,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            $youtube = strpos($src, "youtube");
                            $vimeo = strpos($src, "vimeo");

                            $height = " md:h-24";
                            if ($youtube || $vimeo) {
                                $height = "md:h-[40rem]";
                            };

                            // Add extra attributes to iframe HTML.
                            $attributes = 'class="w-full h-48' . ' ' . $height . '" frameborder="0"';
                            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        ?>
                            <figure class="my-8 md:my-4 space-y-4 md:space-y-1 w-full md:min-w-[40w]">
                                <?php if ($caption_two) : ?>
                                    <p class="text-white text-left w-full font-bold">
                                        <?php echo $caption_two ?>
                                    </p>
                                <?php endif ?>

                                <?php echo $iframe; ?>
                            </figure>
                        <?php endif ?>

                        <?php if ($three) :
                            // Load value.
                            $iframe = $three;

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 0,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            $youtube = strpos($src, "youtube");
                            $vimeo = strpos($src, "vimeo");

                            $height = " md:h-24";
                            if ($youtube || $vimeo) {
                                $height = "md:h-[40rem]";
                            };

                            // Add extra attributes to iframe HTML.
                            $attributes = 'class="w-full h-48' . ' ' . $height . '" frameborder="0"';
                            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        ?>
                            <figure class="my-8 md:my-4 space-y-4 md:space-y-1 w-full md:min-w-[40w]">
                                <?php if ($caption_three) : ?>
                                    <p class="text-white text-left w-full font-bold">
                                        <?php echo $caption_three ?>
                                    </p>
                                <?php endif ?>

                                <?php echo $iframe; ?>
                            </figure>
                        <?php endif ?>

                        <?php if ($four) :
                            // Load value.
                            $iframe = $four;

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 0,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            $youtube = strpos($src, "youtube");
                            $vimeo = strpos($src, "vimeo");

                            $height = " md:h-24";
                            if ($youtube || $vimeo) {
                                $height = "md:h-[40rem]";
                            };

                            // Add extra attributes to iframe HTML.
                            $attributes = 'class="w-full h-48' . ' ' . $height . '" frameborder="0"';
                            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        ?>
                            <figure class="my-8 md:my-4 space-y-4 md:space-y-1 w-full md:min-w-[40w]">
                                <?php if ($caption_four) : ?>
                                    <p class="text-white text-left w-full font-bold">
                                        <?php echo $caption_four ?>
                                    </p>
                                <?php endif ?>

                                <?php echo $iframe; ?>
                            </figure>
                        <?php endif ?>

                        <?php if ($five) :
                            // Load value.
                            $iframe = $five;

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replace HTML.
                            $params = array(
                                'controls'  => 0,
                                'hd'        => 1,
                                'autohide'  => 1
                            );
                            $new_src = add_query_arg($params, $src);
                            $iframe = str_replace($src, $new_src, $iframe);

                            $youtube = strpos($src, "youtube");
                            $vimeo = strpos($src, "vimeo");

                            $height = "h-48 md:h-24";
                            if ($youtube || $vimeo) {
                                $height = "h-72 md:h-[40rem]";
                            };

                            // Add extra attributes to iframe HTML.
                            $attributes = 'class="w-full' . ' ' . $height . '" frameborder="0"';
                            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        ?>
                            <figure class="my-8 md:my-4 space-y-4 md:space-y-1 w-full md:min-w-[40w]">
                                <?php if ($caption_five) : ?>
                                    <p class="text-white text-left w-full font-bold">
                                        <?php echo $caption_five ?>
                                    </p>
                                <?php endif ?>

                                <?php echo $iframe; ?>
                            </figure>
                        <?php endif ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>


    </div>
<?php endif; ?>