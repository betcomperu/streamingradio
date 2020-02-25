<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.0.9, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.0.9, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/as-pie-progress/css/progress.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-rRnSOnakrV" id="menu1-0" data-rv-view="136">
    
    


    <nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/logo2.png" alt="Mobirise" media-simple="true">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="https://mobirise.com">RADIOS STREAMING</a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown display-4" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white" href="https://mobirise.com">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white" href="login">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Login Adm&nbsp;</a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm display-4 btn-secondary" href="https://mobirise.com">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>APP RadioStream</a>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a rel="nofollow" href="https://mobirise.com">mobirise</a></section><section class="cid-rRnXYNL1vs mbr-fullscreen mbr-parallax-background" id="header2-a" data-rv-view="138">

    

    

    <div class="container align-center">
        <div class="media-container-column mbr-white col-md-10 offset-md-1">
            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                LAS MEJORES RADIOS</h1>
            
            
            <div class="mbr-section-btn">
                
                <audio controls="" preload="none" src="http://18253.live.streamtheworld.com/MAG_AAC.aac"></audio>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section article content10 cid-rRnTykdTM2" id="content10-5" data-rv-view="141">
    
     

    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5">Las mejores radios streaming de todo el mundo con la más variada programación las 24 horas del día</div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="features4 cid-rRnTpdrZ1p" id="features4-3" data-rv-view="143">
    
         

    
    <div class="container">
        <div class="row">
             <?php foreach($estacion as $e){ ?>

               <div class="col-sm-6 table-responsive" >
                    <div class="card">
                      <div class="card-body bg-warning mb-3">
                        <h5 class="card-title"><?php echo $e['nombrestacion']; ?></h5>
                        <p class="card-text card text-white"><?php echo $e['detallestacion']; ?></p>
                        <a href="<?php echo $e['url']; ?>" class="btn btn-danger" target="_blank">Ir a Radio</a>
                      </div>
                    </div>
                </div>
                <?php } ?>

          

           <div class="align-center">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>

            
        </div>
    </div>
</section>

<section class="progress-bars3 cid-rRnTL3X4vI" id="progress-bars3-7" data-rv-view="146">
 
     

    
    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Crecemos a ritmo de la música</h2>

        
    
        <div class="media-container-row pt-5 mt-2">
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress1" role="progressbar" data-goal="50">
                        <p class="pie_progress__number mbr-fonts-style display-5">50%</p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Radios</h4>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="60">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Registrados</h4>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress3" role="progressbar" data-goal="70">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">Audiencia</h4>
                </div>                 
            </div>

            

            

            
        </div>
</div></section>

<section class="cid-rRnTP6joD9" id="social-buttons2-8" data-rv-view="149">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-fonts-style display-5">
                    Siguenos en!
                </h2>
                <div class="social-list pl-0 mb-0">
                    <a href="https://twitter.com/mobirise" target="_blank">
                        <span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                        <span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://instagram.com/mobirise" target="_blank">
                        <span class="px-2 socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                    </a>
                    <a href="https://www.youtube.com/c/mobirise" target="_blank">
                        
                    </a>
                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                        
                    </a>
                    <a href="https://www.behance.net/Mobirise" target="_blank">
                        
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-rRnTS4nbBm" id="footer1-9" data-rv-view="152">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="assets/images/logo24.png" alt="Mobirise" media-simple="true">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">
                    1234 Street Name
                    <br>City, AA 99999
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">
                    <a class="text-primary" href="https://mobirise.com/">Website builder</a>
                    <br><a class="text-primary" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                    <br><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip">Download for Mac</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>