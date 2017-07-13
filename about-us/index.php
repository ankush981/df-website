<?php
    $page_tags = '<title>Dhyan Foundation</title>';
    $current_section = 'about-us';
    require_once('../includes/header.php'); 
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">About Dhyan Foundation</h2>
                    <hr class="botm-line">
                    <p class="sec-para">
                        Dhyan Foundation is a spiritual and charitable organisation committed to the cause of spreading awareness about the authentic path of yoga, as laid down by Sage Patanjali 4500 years ago. Run solely by volunteers who are engaged day in and day out in helping the creation, without any remuneration for their services – driven and guided on the path of sadhna and service by Yogi Ashwini, a true living master.
                    </p>
                    
                    <h4 class="para-heading">We teach yog in its true, authentic form</h4>
                    <p class="sec-para">
                        A spiritual and charitable organisation committed to the cause of spreading awareness about the authentic path of yoga, as laid down by Sage Patanjali 4500 years ago. It is a unique organization run solely by volunteers who are engaged day in and day out in helping the creation, without any remuneration for their services. These volunteers hail from all walks of life – business magnates, journalists, doctors, designers, lawyers, scholars, home-makers and normal people – driven and guided on the path of sadhna and service by Yogi Ashwini, a true living master.
                    </p>                    
                    
                    <h4 class="para-heading">Benefitted professionals from all walks of life</h4>
                    <p class="sec-para">
                        Among those who have benefitted from the practice of Sanatan Kriya are doctors and patients at reputed hospitals like Army Research and Referral Delhi, KIMS Hospital Hyderabad and Indian Medical Association, students at IIT, Delhi Public School, Apeejay, Sanskriti and KR Mangalam, professionals at MNCs like Wipro, Cisco, HP, HCL, Infosys and Aegis, personnel of Delhi and Bangalore Police, international athletes at Commonwealth Games and journalists at top media houses like Hindustan Times and Times of India.
                    </p>

                    <h4 class="para-heading">We are perhaps the only ones teaching yog in its original form</h4>
                    <p class="sec-para">
                        Besides conducting Sanatan Kriya workshops and classes, Dhyan Foundation also teaches the ancient sciences of tantra, spiritual healing, Vedic chants, physical fitness and training, Vedic secrets to anti-ageing and havans for interaction with Gods. Regular havans are conducted by practitioners all across the world, without any charges, for purification of environment and purpose of creation.

                        Dhyan Foundation has published various books on the subjects of Yog, culture and spiritual sciences by Yogi Ashwini and publishes a monthly journal "The Inner World" that covers topics ranging from Ayurveda, Health and Beauty, Travel, Vaastu, Fashion etc. to add a little bit of wisdom to your everyday life.
                    </p>

                    <h4 class="para-heading">We join hands to help the creation around us</h4>
                    <p class="sec-para">
                        The Foundation is actively engaged in a host of charitable activities including free distribution of food at multiple places, saving wildlife and looking after injured animals (Feed a Dog, Save a Cow), running schools for street kids, sponsoring higher education of the poor, finding employment for the unemployed, spreading awareness about environmental issues etc. and all this is done without any government funding or selling any products, solely out of funds of Yogi Ashwini and from the contributions of the volunteers and well wishers. A unique concept at Dhyan Foundation is that the various centres collect and manage their own funds and resources.
                    </p>

                    <h4 class="para-heading">What are you searching for . . . ?</h4>
                    <p class="sec-para">
                        Please excuse us if you're searching for show of miracles or cures for your problems. However, if you're desirous of the journey beyond, and want to experience the true nature of reality, come to Dhyan Foundation!
                    </p>

                </div>
            </div>

            <div class="col-sm-4">
                <h3><strong>Dhyan Foundation at a Glance</strong></h3>
                <iframe width="360" height="300" src="https://www.youtube.com/embed/zIb7ufDM-DQ" frameborder="0" allowfullscreen></iframe>

                <!-- Carousel -->
                <div style="max-width:435px;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider1.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider2.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider3.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider4.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider5.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider6.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider7.jpg">
                            </div>

                            <div class="item">
                            <img src="<?php echo $server_url;?>/assets/img/about-us/slider8.jpg">
                            </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php 
                //include sidebar - no effect if none exists
                include_once(__DIR__ . '/../includes/sidebars/' . $current_section . '.php');
            ?>
        </div>
    </div>
</section>
  
<?php require_once('../includes/footer.php'); ?>