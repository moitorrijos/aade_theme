<?php get_header(); ?>

<main>
    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="our-mission-text-column bg-gray-100 col-lg-9">
                    <div class="our-mission-text py-5">
                        <?php the_title('<h2>', '</h2>'); ?>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
