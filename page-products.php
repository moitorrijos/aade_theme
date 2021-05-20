<?php /* Template Name: Products*/ ?>
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
            <div class="container py-5">
              <div class="row py-5">
                  <div class="col-12">
                    <?php the_content(); ?>
                  </div>
              </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>