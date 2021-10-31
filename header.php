<head>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="top-bar">
        <div class="container py-3 d-sm-flex flex-sm-row justify-content-sm-between">
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="d-none d-sm-inline-flex mb-2 mb-lg-0 mr-lg-5">
                  <img class="mr-2" src="<?php echo get_template_directory_uri();?>/images/pin.svg" alt="address-pin-icon">
                  <?php dynamic_sidebar('top-bar-address-sidebar'); ?>
                </div>
                <div class="d-inline-flex mb-2 mb-lg-0">
                  <img class="mr-2" src="<?php echo get_template_directory_uri();?>/images/phone.svg" alt="address-pin-icon">
                  <?php dynamic_sidebar('top-bar-phone-sidebar'); ?>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="d-inline-flex mb-2 mb-lg-0 mr-lg-5">
                <?php dynamic_sidebar('top-bar-email-sidebar'); ?>
                </div>
                <div class="d-inline-flex">
                    <a title="Facebook" class="mr-3" href="https://www.facebook.com/AADEnsemble/" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/facebook.svg" alt="social-facebook-icon">
                    </a>
                    <a title="Twitter" class="mr-3" href="https://twitter.com/AADEnsemble" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/twitter.svg" alt="social-twitter-icon">
                    </a>
                    <a title="YouTube" href="https://www.youtube.com/channel/UCNSd3ltUkij-Ap3vyDWR5cw" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/youtube.svg" alt="social-youtube-icon">
                    </a>  
                </div>
            </div>   
        </div>
    </div>
    <div class="container-fluid">
        <div class="logo py-4">
            <?php the_custom_logo(); ?>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu( array(
                'theme_location'  => 'menu-1',
                'container'       => '',
                'menu_class'      => 'navbar-nav mx-auto text-uppercase',
                'fallback_cb'     => '__return_false',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 1,
            ) ); ?>
        </div>
    </nav> 
</header>
