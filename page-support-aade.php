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
                <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-left">
                  <h3 class="font-weight-bold">David-Williams Scholarship</h3>
                  <p>This scholarship will help students interested in the ARTs, to be able to train and dance with the African American Dance Ensemble and learn the nuances of TRADITIONAL African Dance.</p>
                  <h3 class="py-3 font-weight-bold">We Collaborate for the betterment of our community We are actively engaged in:</h3>
                  <ul class="list-unstyled text-lg-left">
                      <li>ACCESS TO CARE</li>
                      <li>BLACKSPACE</li>
                      <li>CONGOLESE DRUMMING</li>
                      <li>UNLOCKING DOORS INITIATIVE</li>
                      <li>HEALTH INITIATIVES</li>
                      <li>VETERANS INITIATIVES</li>
                      <li>HOUSING & HOMELESS ISSUES</li>
                  </ul>
                </div>
                <div class="col-12 col-lg-6 pt-5 pt-lg-0">
                  <h3 class="text-center text-lg-left font-weight-bold">KWANZAAFEST -Annual Celebration</h3>
                  <p class="text-lg-left">Free and Open to the Public for a Community Celebration and coming together in Unity. Honoring our veterans, helping our Homeless and dancing for peace.</p>
                  <ul class="list-unstyled">
                      <li>Partners - Individual & Corporate</li>
                      <li>Choose your level of Partnership</li>
                      <li>Platinum - $5000.00 +</li>
                      <li>Diamond - $3000.00 - 4999.99</li>
                      <li>Gold - $1000.00 - 2999.99</li>
                      <li>Silver - $500.00 - 999.99</li>
                  </ul>
                </div>
                </div>
            </div>
            <div class="container-fluid py-5 text-gray-dark">
                <div class="container">
                  <h3 class="text-bold text-center">With each partnership you will receive differing levels GREAT packages!</h3>
                </div>
            </div>
            <div class="container py-5 text-center text-gray-dark">
              <h3 class="text-bold mb-3">Where is my money going?<br>How will it be used?</h3>
              <p>Great QUESTION!! You can make that choice and determination! Your can choose to support the different activities and parts of the African American Dance Ensemble, But know this, your funds help to keep KWANZZAFEST a free production. It will pay for training and empowering youths in the Arts, Cultural Awareness and Celebration through our OUTREACH. It will also help us to keep "EDUtaining" by the use of traditional dances and songs.</p>
            </div>
            <div class="container-fluid py-5 text-gray-dark">
              <div class="container">
                <h3 class="text-bold text-center">Give now and help us help our youth.</h3>
              </div>
            </div>
            <div class="container py-5 bg-gray-100 text-center text-gray-dark">
              <h3>ADMINISTRATION * NEW WORKS * TOURING & PERFORMING * EDUCATION</h3>
              <p>AADE ANNUAL PROGRAMS</p>
              <p>SCHOLARSHIP FUND</p>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>