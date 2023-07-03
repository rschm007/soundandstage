<?php
$args = array(
    'posts_per_page'    => -1,
    'post_type'         => 'keyword'
);

// query
$the_query = new WP_Query($args);
?>

<script>
    // when Tag span is clicked we need to remove page elements that don't have that Tag ID
    $(document).ready(function() {
        $("span[id*='tag']").click(function(e) {
            e.preventDefault();

            const elId = e.target.id;
            const tag = elId.split(" ")[1];

            const posts = [...document.querySelectorAll(".post-block")];

            if ($(this).hasClass("enabled")) {
                posts.forEach((el) => {
                    el.classList.remove("hidden");
                });

                $(this).find("#remove-tag").removeClass("!opacity-100 !w-4");
                $(this).removeClass("enabled !text-black !bg-white !border-white");

            } else {
                // set matching elements to hidden
                posts.forEach((el) => {
                    if (el.ariaLabel.toString().includes(tag)) {
                        return;
                    } else {
                        el.classList.add("hidden");
                    }
                });

                $(this).find("#remove-tag").addClass("!opacity-100 !w-4");
                $(this).addClass("enabled !text-black !bg-white !border-white");
            }
        });
    });
</script>

<div class="flex flex-row items-center flex-wrap justify-center w-full h-8 min-h-fit space-x-2 md:space-x-8">

    <label class="text-white">
        Filter by Tag:
    </label>

    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>

            <span id="tag <?php echo the_title(); ?>" class="bg-black text-white border-slate-50 border-2 min-w-max max-w-max rounded-lg cursor-pointer px-2 py-1 hover:-translate-y-1 hover:scale-110 hover:shadow-sm hover:shadow-slate-400 transition-all duration-150 ease-in-out">

                <button id="remove-tag" class="opacity-0 transition-all duration-150 ease-in-out font-bold w-0">
                    X
                </button>

                <?php echo the_title();  ?>
            </span>

        <?php endwhile ?>
    <?php endif ?>

</div>