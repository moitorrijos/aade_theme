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
                  <p>120 Morris St. Durham, NC 27701</p>
                </div>
                <div class="d-inline-flex mb-2 mb-lg-0">
                  <img class="mr-2" src="<?php echo get_template_directory_uri();?>/images/phone.svg" alt="address-pin-icon">
                  <p>919-560-2729</p>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="d-inline-flex mb-2 mb-lg-0 mr-lg-5">
                    <p>aadensemble@aade-inc.org</p>
                </div>
                <div class="d-inline-flex">
                    <a title="Facebook" class="mr-3" href="#" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/facebook.svg" alt="social-facebook-icon">
                    </a>
                    <a title="Twitter" class="mr-3" href="#" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/twitter.svg" alt="social-twitter-icon">
                    </a>
                    <a title="YouTube" href="#" target="_blank">
                      <img src="<?php echo get_template_directory_uri();?>/images/youtube.svg" alt="social-youtube-icon">
                    </a>  
                </div>
            </div>   
        </div>
    </div>
    <div class="container-fluid">
        <div class="logo py-4">
            <a href="sample-page"><img src="<?php echo get_template_directory_uri();?>/images/African_American_Dance_Ensemble.png" alt="logo"></a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="/"> aade - home</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="/our-history">our history</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" href="/support-aade"> support aade</a>
                 </li>
                <li class="nav-item">
                     <a class="nav-link" href="#">we can dance for you!!!</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">what's new & upcoming!!</a>
                 </li>
                <li class="nav-item">
                     <a class="nav-link" href="#">product</a>
                </li>
            </ul>
        </div>
    </nav> 
</header>
