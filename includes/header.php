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
    <link rel="stylesheet" type="text/css" href="<?php echo $server_url; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server_url; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server_url; ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server_url; ?>/assets/css/style.css">

    <script src="<?php echo $server_url; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $server_url; ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo $server_url; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $server_url; ?>/assets/js/wow.js"></script>
    <script src="<?php echo $server_url; ?>/assets/js/custom.js"></script>   
  </head>
  <body>

    <section id="helpline">
        <div class="container">
            <div class="row">
                <div class="col-sm-7" style="color:#555;">
                    <img src="<?php echo $server_url; ?>/assets/img/paw.png" width="25">
                    &nbsp; 24-hour animal helpline: <strong>+91-99990 99423</strong>
                </div>
                <div class="col-sm-3 col-sm-offset-2">
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
    
    <!--nav-->
    <nav class="nav navbar-default">
        <div class="container">
            <div class="col-md-12">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                    <span class="fa fa-bars"></span>
                </button>
                    <a href="/" class="navbar-brand">
                        <img class="img img-responsive" src="<?php echo $server_url;?>/assets/img/dhyan-foundation-logo.png" width="180">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Yogi Ashwini</a></li>
                                <li><a href="#">Medical Validations</a></li>
                                <li><a href="#">Our Centers</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Workshops<b class="caret"></b></a>
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
                            <a href="#" data-toggle="dropdown">Join Us<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Initiatives</a></li>
                                <li><a href="#">What is Charity?</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Learn<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sanatan Kriya</a></li>
                                <li><a href="#">Vedic Gyan</a></li>
                                <li><a href="#">Vedic Chanting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Publications<b class="caret"></b></a>
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