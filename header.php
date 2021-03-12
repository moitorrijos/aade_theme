<head>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="top-bar p-t-20 p-b-20 container">
        <div class="address-tel">
            <div class="address">
                <img class="m-r-10" src="<?php echo get_template_directory_uri();?>/images/pin.svg" alt="address-pin-icon">
                <p>120 Morris St. Durham, NC 27701</p>
            </div>
            <div class="tel m-b-10">
                <img class="m-r-10" src="<?php echo get_template_directory_uri();?>/images/phone.svg" alt="address-phone-icon">
                <p>919-560-2729</p>
            </div>
        </div>
        <div class="mail-social">
            <div class="mail m-b-10">
                 <p>aadensemble@aade-inc.org</p>
            </div>
            <div class="social m-b-0">
                <a title="facebook" class="m-r-10" href="#" target="_blank" rel="noopener noreferrer">
                    <img  src="<?php echo get_template_directory_uri();?>/images/facebook.svg" alt="social-facebook-icon">
                </a>
                <a title="twitter" class="m-r-10" href="#" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri();?>/images/twitter.svg" alt="social-twitter-icon">
                </a>
                <a title="youtube"href="#" target="_blank" rel="noopener noreferrer">
                     <img  src="<?php echo get_template_directory_uri();?>/images/youtube.svg" alt="social-youtube-icon">
                </a>  
            </div>
        </div>
    </div>
</header>
