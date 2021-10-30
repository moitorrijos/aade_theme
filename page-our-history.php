<?php /* Template Name: Our History */ ?>
<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php $background_image = get_field('background_image'); ?>
        <div class="hero-image row align-items-center no-gutters our-history-hero-image" style="background-image: url(<?php echo $background_image['url']; ?>)">
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
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <?php $founders_1 = get_field('founders_1'); ?>
                            <div class="biography">
                                <div class="avatar mb-3">
                                    <img src="<?php echo $founders_1['image']['url']; ?>" class="img-fluid charles-davis" alt="<?php echo $founders_1['image']['alt']; ?>">
                                </div>
                                <h2><?php echo $founders_1['title']; ?></h2>
                                <?php if ($founders_1['dates']) : ?>
                                    <p><?php echo $founders_1['dates']; ?></p>
                                <?php endif; ?>
                                <p><?php echo $founders_1['description']; ?></p>
                            </div>
                        </div>
                        <div class="col-5">
                            <?php $founders_2 = get_field('founders_2'); ?>
                            <div class="biography">
                                <div class="avatar mb-3">
                                    <img src="<?php echo $founders_2['image']['url']; ?>" class="angeloe-burch" alt="<?php echo $founders_2['image']['alt']; ?>">
                                </div>
                                <h2><?php echo $founders_2['title']; ?></h2>
                                <p><?php echo $founders_2['description']; ?></p>
                            </div>
                            <?php
                                function the_avatars($members) {
                                    ?>
                                        <div class="crew pt-5">
                                            <h2 class="text-center"><?php echo $members['title']; ?></h2>
                                            <div class="crew-avatar pt-2">
                                                <?php for ($i = 0; $i < count($members); $i++ ) : ?>
                                                    <?php if ($members['image_'.$i]['url']) : ?>
                                                        <div
                                                            class="avatar"
                                                            style="z-index: <?php echo ((int)count($members) - (int)$i); ?>"
                                                        >
                                                            <img
                                                                src="<?php echo $members['image_'.$i]['url']; ?>"
                                                                alt="<?php echo $members['image_'.$i]['alt']; ?>"
                                                            >
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    <?php
                                }
                                $members_1 = get_field('members_1');
                                $members_2 = get_field('members_2');
                                $members_3 = get_field('members_3');
                                the_avatars($members_1);
                                the_avatars($members_2);
                                the_avatars($members_3); 
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-white py-5">
                <div class="container py-5">
                    <h2 class="text-center"><?php the_field('slogan_1'); ?></h2>
                </div>
            </section>
            <section class="pink-section py-5">
                <div class="container py-5">
                    <h2 class="text-center quote">
                        <q><?php the_field('quote'); ?></q>
                    </h2>
                    <address class="text-right"><?php the_field('attribution'); ?></address>
                </div>
                <?php $pink_1 = get_field('pink_1'); ?>
                <div class="container py-5">
                    <div class="d-flex justify-content-between my-5">
                        <div class="the-african-connection-text-column col-lg-5 py-5">
                            <div class="the-african-connection-text py-5">
                                <h2 class="letter-spacing-5 my-4"><?php echo $pink_1['title']; ?></h2>
                                <p><?php echo $pink_1['description']; ?></p>
                            </div>
                        </div>
                        <div class="p-lg-0 the-aade-image-column col-lg-5">
                            <img src="<?php echo $pink_1['image']['url']; ?>" class="img-fluid" alt="<?php echo $pink_1['image']['alt']; ?>">
                        </div>
                    </div>
                    <?php $pink_2 = get_field('pink_2'); ?>
                    <div class="d-flex justify-content-between mt-5 py-5">
                        <div class="p-lg-0 the-aade-image-column col-lg-5">
                            <img src="<?php echo $pink_2['image']['url'];?>" class="img-fluid" alt="<?php echo $pink_2['image']['alt']; ?>">
                        </div>
                        <div class="the-aade-text-column bg-gray-100 col-lg-5">
                            <div class="the-aade-text">
                                <h2 class="letter-spacing-5 my-4"><?php echo $pink_2['title']; ?></h2>
                                <p><?php echo $pink_2['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>