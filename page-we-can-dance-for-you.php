<?php /* Template Name: We can dance for you */ ?>
<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $background = get_field('background_image'); ?>
        <div
          class="hero-image row align-items-center no-gutters our-history-hero-image"
          style="background-image: url(<?php echo $background['url']; ?>);"
        >
          <div class="container">
            <div class="hero-text mx-auto text-center">
              <h1 class="text-white my-4 our-history-text">
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
        </div>
        <main>
            <div class="container">
              <div class="row text-center d-flex flex-column align-items-center justify-center py-5">
                  <a href="<?php the_field('button_url'); ?>" class="btn btn-lg button-hero bt-bookhere px-5"><?php the_field('button_text'); ?></a>
                  <h2 class="text-danger"><?php the_field('strip_1'); ?></h2>
              </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container text-center py-5">
                    <h2><?php the_field('strip_2'); ?></h2>
                </div>
            </div>
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <?php the_field('column_1'); ?>
                    </div>
                    <div class="col-12 col-md-4  mb-4 mb-md-0">
                      <?php the_field('column_2'); ?>
                    </div>
                    <div class="col-12 col-md-4">
                      <?php the_field('column_3'); ?>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>