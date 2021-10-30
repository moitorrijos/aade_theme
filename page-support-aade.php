<?php /* Template Name: Support AADE */ ?>
    <?php get_header(); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php $background_image = get_field('background_image'); ?>
        <div
          class="hero-image row align-items-center no-gutters our-history-hero-image"
          style="background-image: url(<?php echo $background_image['url']; ?>);"
        >
          <div class="container">
            <div class="hero-text mx-auto text-center">
              <h1 class="text-white text-uppercase my-4 our-history-text">
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
        </div>
        <main>
            <div class="container py-5 bg-gray-100 text-gray-dark">
                <div class="row py-5">
                  <div class="col-6 col-lg-6 text-center text-lg-left">
                    <?php the_field('column_1'); ?>
                  </div>
                  <div class="col-6 col-lg-6">
                    <?php the_field('column_2'); ?>
                  </div>
                </div>
            </div>
            <div class="container-fluid py-5 text-gray-dark">
                <div class="container">
                  <?php the_field('strip_1'); ?>
                </div>
            </div>
            <div class="container py-5 text-center text-gray-dark">
              <?php the_field('strip_2'); ?>
            </div>
            <div class="container-fluid py-5 text-gray-dark">
              <div class="container">
                <?php the_field('strip_3'); ?>
              </div>
            </div>
            <div class="container py-5 bg-gray-100 text-center text-gray-dark">
              <?php the_field('strip_4'); ?>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>