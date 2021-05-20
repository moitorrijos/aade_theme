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
                <a href="https://www.paypal.com/donate?business=7TXLEFSSG9PYW&item_name=Teaching+and+performing+for+the+underserved&currency_code=USD" class="btn btn-lg button-hero">Donate</a>
                <!-- <a href="https://www.paypal.com/donate?business=7TXLEFSSG9PYW&item_name=Teaching+and+performing+for+the+underserved&currency_code=USD" class="btn btn-lg button-hero performance-tooltip"><span>Performance</span>Pay now</a> -->
            </div>
        </div>
    </div>
   <main>
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="our-mission-text-column bg-gray-100 col-lg-6">
                        <div class="our-mission-text py-5">
                            <h2 class="text-muted letter-spacing-5 my-4"><?php the_field('our_mission_title'); ?></h2>
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
        <section class="bg-white py-5">
            <div class="container py-5">
                <h2 class="text-center"><?php the_field('slogan'); ?></h2>
            </div>
        </section>
        <section>
            <div class="container py-5">
            <?php $performing_arts = get_field('performing_arts'); ?>
            <h2 class="text-center pt-5"><?php echo $performing_arts['performing_art_title']; ?></h2>
            <div class="row text-center py-5">
                <div class="col-lg-4">
                    <h6 class="text-uppercase"><?php echo $performing_arts['column_1']['column_title']; ?></h6>
                    <p class="text-lg text-muted mb-lg-0"><?php echo $performing_arts['column_1']['column_text']; ?></p>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase"><?php echo $performing_arts['column_2']['column_title']; ?></h6>
                    <p class="text-lg text-muted mb-lg-0"><?php echo $performing_arts['column_2']['column_text']; ?></p>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase"><?php echo $performing_arts['column_3']['column_title']; ?></h6>
                    <p class="text-lg text-muted mb-lg-0"><?php echo $performing_arts['column_3']['column_text']; ?></p>
                </div>
            </div>
        </section>
        <section>
            <div class="communities-section bg-white py-5">
                <?php $partners = get_field('partners'); ?>
                <div class="container py-5">
                    <div class="row">
                        <h3 class="mb-5 text-center mx-2 mx-md-auto font-weight-bold"><?php echo $partners['title']; ?></h3>
                    </div>
                    <div class="row d-flex flex-column d-sm-flex flex-sm-row align-items-center justify-content-center">
                        <?php for ($i = 0; $i < count($partners['partner_logos']); $i++) : ?>
                            <?php if ($partners['partner_logos']['image_'.$i]) : ?>
                                <div class="mb-5 mb-sm-0 mr-sm-5 mr-lg-6">
                                    <img 
                                        src="<?php echo $partners['partner_logos']['image_'.$i]['url']; ?>"
                                        alt="<?php echo $partners['partner_logos']['image_'.$i]['alt']; ?>"
                                    >
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="dancers-for-peace-section container-fluid bg-blue-light py-5">
                <?php $dancers = get_field('dancers_for_peace'); ?>
                <div class="container py-5">
                    <div class="row py-5">
                        <div class="col-12 col-lg-6 d-flex d-flex-column justify-content-center align-items-center">
                            <div class="image-dancer-peace">
                                <img src="<?php echo $dancers['image']['url'];?>" alt="<?php echo $dancers['image']['alt']; ?>">
                            </div>                           
                        </div>
                        <div class="col-12 col-lg-6 my-auto">
                            <h2 class="text-uppercase text-center text-lg-left pt-4 pb-3 font-weight-bold"><?php echo $dancers['title']; ?></h2>
                            <p class="text-center text-lg-left m-0"><?php echo $dancers['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </main>
<?php get_footer(); ?>