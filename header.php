<head>
<?php wp_head(); ?>
</head>
<body>


<header>
    <div class="top-bar d-flex flex-row">
        <div class="address-tel list-inline">
            <div class="address list-inline-item">
                <img src="<?php echo get_template_directory_uri();?>/images/pin.svg" alt="address-pin-icon">
                <p>120 Morris St. Durham, NC 27701</p>
            </div>
            <div class="tel d-flex flex-row">
                <img src="<?php echo get_template_directory_uri();?>/images/phone.svg" alt="address-pin-icon">
                <p>919-560-2729</p>
            </div>
        </div>
        <div class="social-media"></div>
    </div>
    
    <div class="mx-auto logo"></div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-blue-light">
      <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </nav>
</header>
