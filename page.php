<?php get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div
      class="hero-image row align-items-center no-gutters our-history-hero-image"
      style="background-image: url(<?php echo $background_image['url']; ?>)"
    >
        <div class="container">
            <div class="our-history-hero-text hero-text mx-auto text-center">
                <h1 class="text-white text-uppercase my-4 our-history-heading">
                <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    <main>
      <section class="py-5">
        <div class="container py-5">
          <?php the_content(); ?>
        </div>
      </section>
    </main>
  <?php endwhile; ?>
<?php get_footer(); ?>