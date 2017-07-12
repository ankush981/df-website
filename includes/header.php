<?php require_once(__DIR__ . '/settings.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    
    <?php 
        //show meta HTML if page defines any
        echo $meta_tags; 
    ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server_url; ?>/assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.0.0/wow.min.js"></script>
    <script src="<?php echo $server_url; ?>/assets/js/custom.js"></script>   
  </head>
  <body>
    <section id="helpline">
        <div class="container">
            <div class="row">
                <div class="col-sm-5" style="color:#555;">
                    <img src="<?php echo $server_url; ?>/assets/img/paw.png" width="25">
                    &nbsp; 24-hour animal helpline: <strong>+91-99990 99423</strong>
                </div>
               
                <div class="col-sm-3 pull-right">
                    <form role="search" id="search">
                        <div class="input-group add-on">
                                <input class="form-control" placeholder="Search this website" name="search-term" id="search-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" style="color:#BBB;"></i></button>
                                </div>
                        </div>
                  </form>
                </div>              
            </div>
        </div>
    </section>

    <br>

    <!-- Logo -->
    <a href="/" class="navbar-brand">
        <img class="img img-responsive" src="<?php echo $server_url;?>/assets/img/dhyan-foundation-logo.png" width="180">
    </a> 
    
    <!--nav-->
    <nav class="nav navbar-default">
        <div class="container">
            <div class="col-md-12">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                    <span class="fa fa-bars"></span>
                </button>
                    
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="#" data-hover="dropdown">About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $server_url;?>/about-us/index.php">About Us</a></li>
                                <li><a href="<?php echo $server_url;?>/about-us/yogi-ashwini.php">Yogi Ashwini</a></li>
                                <li><a href="<?php echo $server_url;?>/about-us/medical-validations.php">Medical Validations</a></li>
                                <li><a href="<?php echo $server_url;?>/about-us/centers/national-centers.php">National Centers</a></li>
                                <li><a href="<?php echo $server_url;?>/about-us/centers/international-centers.php">International Centers</a></li>
                                <li><a href="<?php echo $server_url;?>/about-us/faqs.php">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-hover="dropdown">Workshops<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-hover="dropdown">Join Us<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Initiatives</a></li>
                                <li><a href="#">What is Charity?</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-hover="dropdown">Learn<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sanatan Kriya</a></li>
                                <li><a href="#">Vedic Gyan</a></li>
                                <li><a href="#">Vedic Chanting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-hover="dropdown">Publications<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li><a href="/">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--/ nav-->

    <!--header-->
    <?php
        //show header only on home page 
        if($current_page == 'home') { ?>
            <header class="main-header" id="header">
                <div class="bg-color">                
                    <div class="container">
                        <div class="wrapper wow fadeInUp delay-05s" >
                            <h1 class="title">Spreading True Yog</h1>
                            <h4 class="sub-title">Vedic Sciences in their pure, unadultrated form, free of Maya (money)</h4>
                            <a><button class="btn btn-submit" id="home-cta-btn">Learn More</button></a>
                        </div>
                    </div>                
                </div>
            </header>
    <?php 
        } 
    ?>
    <!--/ header-->