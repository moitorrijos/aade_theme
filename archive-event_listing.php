<?php get_header(); ?>

<main>
    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="bg-gray-100 col-lg-12">
                    <div class="py-5">
                      <h2>What's New and Upcoming</h2>
                      <?php echo do_shortcode('[events show_filters="false" layout_type="box"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
