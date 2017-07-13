<?php
    $page_tags = '<title>Medical Validations for Sanatan Kriya</title>';
    $current_section = 'about-us';
    require_once(__DIR__ . '/../includes/header.php'); 
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Medical Validations</h2>
                    <hr class="botm-line">
                    
                    <div class="row">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/wWzKYwxUgWg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                    <!-- Questions related to joining Dhyan Foundation -->
                    <div>                   
                        <h3 class="para-heading"># Power of Yog demonstrated at Indian Medical Association</h3>
                        
                        <p>In an event held on February 13th, 2011, in Mumbai marked the renaissance of Ancient Yogic Sciences in the modern times, Dhyan Foundation volunteers demonstrated the power and efficacy of Yoga at Indian Medical Association. The demonstration aimed at proving that these abilities exist in a yogic practitioner, however, they are not meant to be used for commercial purposes. In the event of an illness or for diagnosis of an illness, kindly visit a doctor and please do not approach us.</p>

                        <h3 class="para-heading"># Dhyan takes you to higher states of consciousness - Army Research & Referral Hospital</h3>
                        
                        <p>A scientific study was conducted in the world famous Army Research & Referral Hospital in Delhi on Yogi Ashwini's students. It was found that during the practice, their heart and breath rate dropped to critical levels, yet the brain continued to function at Alpha level. Medically, it indicates reduced oxygen supply to the brain which logically should have caused the brain activity to slow down. But the reverse happened and baffled the doctors who attempted to conduct the same test on multiple control groups under various test conditions but could not replicate the same results that were observed in the practitioners of Sanatan Kriya.</p>

                        <h3 class="para-heading"># Doctors vouch for yogic techniques in the book Sanatan Kriya the Ageless Dimension</h3>
                        
                        <p>"An authentic and awesome thesis on anti-ageing and its complexities made easy. A must-read for all ages." &ndash; Lt. Gen. K. K. Singh, Neurophysician and Head, Army Research and Referral Hospital</p>

                        <p>"It's a thesis on anti-ageing, an effective tool for the same." &ndash; Dr. Bhaskar Rao, Managing Director, CEO and Cardiothoracic Surgeon, KIMS Hospital (Krishna Institute of Medical Science)</p>

     
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <?php 
                    //sidebar name is linked to section name - no effect if file doesn't exist
                    include_once(__DIR__ . '/../sidebars/' . $current_section . '.php'); 
                ?>
            </div>
        </div>
    </div>
</section>
  
<?php require_once('../includes/footer.php'); ?>