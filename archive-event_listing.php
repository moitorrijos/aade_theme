<?php get_header(); ?>

<main>
    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="our-mission-text-column bg-gray-100 col-lg-12">
                    <div class="our-mission-text py-5">
                        <?php echo do_shortcode('[events show_filters="false"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
