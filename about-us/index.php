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
                    <p class="sec-para">
                        Dhyan Foundation is a spiritual and charitable organisation committed to the cause of spreading awareness about the authentic path of yoga, as laid down by Sage Patanjali 4500 years ago. Run solely by volunteers who are engaged day in and day out in helping the creation, without any remuneration for their services – driven and guided on the path of sadhna and service by Yogi Ashwini, a true living master.
                    </p>
                    
                    <h4 class="para-heading">We teach yog in its true, authentic form</h4>
                    <p class="sec-para">
                        Formed in 2002 by students of Yogi Ashwini to share and spread the gyan of original and pristine form of yoga, Dhyan Foundation, today is a global phenomenon with centers all across the world where classes for Sanatan Kriya (Patanjali Ashtang Yog in its orginal, undiluted form) are conducted free of cost in line with the ancient Guru-Shishya Parampara. There are thousands across the globe who have benefited physically, emotionally, mentally and spiritually from the practice of Sanatan Kriya.
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

                <div>
                    <h3>Join Our Causes</h3>
                    <a href="#"><img width="360" src="<?php echo $server_url . '/assets/img/about-us/join-our-causes.jpg'?>"/></a>
                </div>

                <div>
                    <h3>Find a Center Near You</h3>
                    <a href="<?php echo $server_url . '/about-us/centers'; ?>"><img width="360" src="<?php echo $server_url . '/assets/img/about-us/centers/ludhiana-1.jpg'?>"/></a>
                </div>

                <div>
                    <button class="btn btn-submit" data-toggle="modal" data-target="#">Class Locator</button>
                    <button class="btn btn-submit" data-toggle="modal" data-target="#book-yagya">Book a Yagya</button>
                </div>

                <!-- Modal for Book a Yogya -->
                <div class="modal fade" id="book-yagya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Yes, I want a Vedic yagya performed on my premises.</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact no.</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Occupation</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Full address of location</label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of yagya</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Number of participants</label>
                                                <input type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Specific reasons for conducting havan (if any)</label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Comments/queries</label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>      
                                </div>
                            </div>            
                        </div>
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