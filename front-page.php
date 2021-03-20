<?php get_header(); ?>
<body>
    <div class="hero-image row align-items-center no-gutters" style="background-image: url(<?php the_field('background_hero_image'); ?>)">
        <div class="container">
            <div class="hero-text col-xl-5 col-lg-6 col-md-12">
                <p class="text-white mb-4 lead our-motto">
                    <?php the_field('motto'); ?>
                </p>
                <h1 class="text-white display-4 font-weight-bold lh-1">
                    <?php the_field('description'); ?>
                </h1>
                <a href="#" class="btn btn-lg button-hero">Donate</a>
                <a href="#" class="btn btn-lg button-hero performance-tooltip"><span>Performance</span>Pay now</a>
            </div>
        </div>
    </div>
   <main>
        <section>
            <div class="container pt-5">
                <div class="row">
                    <div class="our-mission-text-column bg-gray-100 col-lg-6">
                        <div class="our-mission-text py-5">
                            <h2 class="text-muted letter-spacing-5 my-4">Our Mission</h2>
                            <?php the_field('our_mission'); ?>
                        </div>
                    </div>
                    <div class="p-lg-0 our-history-image-column col-lg-6">
                        <?php $main_image = get_field('main_image'); ?>
                        <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="container py-5">
                <h2 class="text-center">The African American Dance Ensemble uses dance and music to bring awareness to the inequities in our community and through our ART, createa positive change.</h2>
            </div>
        </section>
        <section>
            <div class="container py-5">
            <h2 class="text-center pb-5">Performing arts * Health equity * Youth empowerment *</h2>
            <div class="row text-center">
                <div class="col-lg-4">
                    <h6 class="text-uppercase">Dance with a purpose</h6>
                    <p class="text-lg text-muted mb-lg-0">We dance for peace, we dance for strength.
                    School performances, Board Trainings, Culture Festivals, and many more is where we can enhance community through the Arts.</p>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase">A healthy you</h6>
                    <p class="text-lg text-muted mb-lg-0">Through African Dance, learn to become at peace with your body, mind and soul.
                    A healthy you is a happy you!</p>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase">Our youth is our future</h6>
                    <p class="text-lg text-muted mb-lg-0">Teaching our children Peace, Love, Respect, today, for Everybody, is creating a better world through the Arts.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="communities-section bg-white">
                <div class="container pt-4 pb-5">
                    <div class="row">
                        <h3 class="mb-4 text-center mx-2 mx-md-auto font-weight-bold">Building Stronger Communities through the power of the ARTS!</h3>
                    </div>
                    <div class="row d-flex flex-column d-sm-flex flex-sm-row align-items-center justify-content-center">
                        <div class="mb-5 mb-sm-0 mr-sm-5 mr-lg-6">
                            <img src="<?php echo get_template_directory_uri();?>/images/dac-logo2.gif" alt="">
                        </div>
                        <div class="mb-5 mb-sm-0 mr-sm-5 mr-lg-6">
                            <img src="<?php echo get_template_directory_uri();?>/images/uaclogo.jpg" alt="#">
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/images/ncartslogo.jpg" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="dancers-for-peace-section container-fluid bg-blue-light py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex d-flex-column justify-content-center align-items-center">
                            <div class="image-dancer-peace">
                                <img src="<?php echo get_template_directory_uri();?>/images/aade-3_orig.jpg" alt="#">
                            </div>                           
                        </div>
                        <div class="col-12 col-lg-6 my-auto">
                            <h2 class="text-muted text-uppercase text-center text-lg-left pt-4 pb-3 font-weight-bold">Dancers for peace</h2>
                            <p class="text-muted text-center text-lg-left m-0">AADE is committed to OUTREACH, focusing on the well-being and a possitive future of OUR Youth.
                             We continue the Legacy of Dr. Chuck Davis in presserving, teaching and performing traditional African Dance Music and Values. </p>  
                            <p class="text-muted text-center text-lg-left m-0">We present dance and music from West African Region as well as Congolese Drumming.</p>
                            <p class="text-muted text-center text-lg-left m-0">Culture, History and Values that promote Unity and Diversity are in all our performances. (Call office for Fee Schedule)</p>                                                     
                        </div>
                    </div>
                </div>
            </div>
        </section>

   </main>
</body>
<?php get_footer(); ?>