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
              <h1 class="text-white text-uppercase my-4 our-history-text">
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
        </div>
        <main>
            <div class="container">
              <div class="row text-center d-flex flex-column align-items-center justify-center py-5 px-2 px-md-0">
                  <a href="#" class="btn btn-lg button-hero text-uppercase bt-bookhere">Book here today!</a>        
                  <h2 class="text-uppercase text-danger py-4">because of covid-19 all activities are cancelled</h2>
                  <p>We are available for:    WORKSHOPS, TOURING, CONCERTS, RESIDENCIES, HEALTH INITIATIVES
                      All of our programs are customized for maximum enjoyment and creativity and audience participation.</p>
              </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container text-center">
                    <h2 class="text-uppercase">public, private & charter schools  * colleges & universities * corporate & board training & retreats</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h3 class="text-md-center mb-md-4">Dance Classes</h3>
                        <p>Monday Nights - 6:30 p.m. - 8:00 p.m. Hayti Heritage Center Instructors - Sis. Ivy and Sis. Toni
                        Tuessday Nights - 6:30 p.m. - 8:00 p.m. Durham Arts Council - Bro. McDaniel Roberts - (These classes are for those interested in interning with AADE).</p>
                    </div>
                    <div class="col-12 col-md-4  mb-4 mb-md-0">
                        <h3 class="text-md-center mb-md-4">Healthy Habits with African Movement Dance your way to Health</h3>
                        <p>Wednesday Nights - 6:15 p.m. - 7:00p.m. Durham Arts Council - Sis. Britany Burch 
                        (AADE Exercise and Wellness Program).</p>
                    </div>
                    <div class="col-12 col-md-4">
                    <h3 class="text-md-center mb-md-4">Auditions</h3>
                        <p>If you are interested in dancing with the African American Dance Ensemble, Auditions will be held in July 2020 for the AADE Upcoming Season. Qualifications will be posted on line in April.</p>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>