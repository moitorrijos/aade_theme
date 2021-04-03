<?php /* Template Name: What´s new Upcoming*/ ?>
<?php get_header(); ?>
<div class="hero-image row align-items-center no-gutters our-history-hero-image"  style="background-image: url(<?php the_field('background_hero_shedule'); ?>); background-position:center !important;">
        <div class="container">
            <div class="hero-text mx-auto text-center">
                <h1 class="text-white text-uppercase my-4 lead our-history-text">
                  <?php the_title(); ?>
                </h1>
            </div>
        </div>
  </div>
<main>
   <div class="container">
        <div class="row py-5">
            <div class="col-12 text-center">
                <p><strong>Your presence and your donations are needed to make our season of success!
                Please become a member of the AADE Team and help us 
                make a successful and positive season of change<strong></p>
                <h3 class="text-uppercase text-danger mt-5">due to covid -19 the below dates are in flux and we will 
                update as soon as possible</h3>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>