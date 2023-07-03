<?php
/* Template Name: Contact Us */
get_header(); ?>

<?php
$resume = get_field("resume");
$wysiwyg = get_field("wysiwyg");
$hero = get_field('hero-header');
?>

<?php
if ($hero) : get_template_part('template-parts/hero-header/hero-header')
?>
<?php endif; ?>

<div class="flex flex-col items-center justify-center w-full h-full mt-8" id="primary">

    <?php if ($wysiwyg) : ?>
        <div class="flex flex-col text-left items-center justify-start text-white mt-8 mb-8 px-12 md:px-36">
            <?php the_field('wysiwyg'); ?>
        </div>
    <?php endif; ?>

    <div class="flex flex-col md:flex-row items-start justify-center px-12 md:px-36 w-full md:space-x-24">

        <div class="w-full md:w-9/12 h-full" id="content" role="main">
            <form class="flex flex-col items-start justify-center w-full h-full mt-6 space-y-4 border rounded px-6 py-4 border-white bg-slate-900" method="post" id="contactus_form">
                <?php echo do_shortcode('[contact-form-7 id="291" title="Untitled"]') ?>
            </form>
        </div><!-- #content -->

        <div class="flex flex-col items-start justify-center py-12 space-y-2 w-full">
            <p class="text-white text-2xl font-semibold mb-1">
                Vincent Olivieri
            </p>

            <div class="flex flex-row items-center">
                <i class="fa-solid fa-phone text-white text-[20px] mr-1"></i>
                <p class="text-white">
                    917.569.7905
                </p>
            </div>

            <div class="flex flex-row items-center">
                <i class="fa-sharp fa-solid fa-envelope text-white text-[20px] mr-1"></i>
                <a href="mailto:vrojr.design@gmail.com" target="_blank" class="text-white underline">
                    vrojr.design@gmail.com
                </a>
            </div>

            <?php if ($resume) :
                get_template_part('template-parts/content-resume'); ?>
            <?php endif; ?>

            <div class="flex flex-row items-center space-x-2">
                <a href="https://www.facebook.com/vrojr" target="_blank">
                    <i class="fa-brands fa-square-facebook text-white text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

</div><!-- #primary -->
<?php get_footer(); ?>