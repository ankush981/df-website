<?php
    //define meta tags, if any. these will be used by header.php
    $meta_tags = '';
    $current_section = 'about-us-centers';
    require_once(__DIR__ . '/../../includes/header.php'); 
?>

</script>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Dhyan Foundation International Centers</h2>
                    <hr class="botm-line">                    
                </div>
            </div>            
        </div>

        <br>
        
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/united-kingdom.jpg" height="250">
                <h3>United Kingdom Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#uk-details">Explore</button>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/germany.jpeg" height="250">
                <h3>Germany Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#germany-details">Explore</button>
            </div>
        </div>

    <!-- Germany center details -->
    <div class="modal fade" id="germany-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">UK Center Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Started in September 2010, the Germany chapter of Dhyan Foundation comprises of volunteers from all walks of life committed to the cause of advocating the true form of yog.</p>

                            <p>To raise awareness and spread the message, the centre has frequently participated in multiple events in Germany including Indian day celebrations at US embassy at Frankfurt, Indo-German celebration event organised by Indian Consulate in Frankfurt. Additionally, members have also translated the significance, essence and steps of Sanatan Kriya (formulated by Yogi Ashwini, the Guiding Light of Dhyan Foundation, and encapsulating the eight limbs of Ashtang Yog) in the native language to enable better understanding.</p>

                            <p>Under the guidance of their Guru, volunteers hold weekly dhyan sessions, conduct vedic havans every Poornima and Amavasya and on other significant days. The sadhaks also distribute and make available at key locations, 'The Inner World', a monthly spiritual magazine covering topics of vedic sciences and culture, health, beauty, glow, yog, tantra and paranormal.</p>

                            <p>For further queries contact 069 95154673.</p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- UK center details -->
    <div class="modal fade" id="uk-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">UK Center Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Key Contacts</strong>
                            <br>
                            <br>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                </tr>
                                <tr>
                                    <td>Ms. Rajshree Mistry</td>
                                    <td>00447973891088,     dhyanfoundationuk@gmail.com</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-sm-8">
                            <strong>Activities Details</strong>
                            <br>
                            <br>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Venue</th>
                                    <th>Day</th>
                                    <th>Timings</th>
                                    <th>Contact</th>
                                </tr>
                                <tr>
                                    <td>Vanston Place, Fulham Broadway, London</td>
                                    <td>Monday</td>
                                    <td>6:30pm - 8:00pm </td>
                                    <td>00447973891088</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/united-kingdom-1.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the UK Center</h3>

                            <p>Yogi Ashwini emphasizes on Yoga as a subject of experience and not the intellect. It is by no means certain rapid movements, picked up from aerobics or other sports which are being termed as 'Asanas' and breathing techniques called 'Pranayamas', and sold with false promises to give you a beautiful and healthy body.</p>

                            <p>Practising Yog in its entirety has sublimating effects on all levels of a being; a yogi radiates youth and glow till the time of his last breath, fears nothing, enjoys all aspects of Creation and is in bliss or 'Ananda' all the time. A beginner can start with the practice of Sanatan Kriya, which encompasses all the eight limbs of Ashtang Yog in totality.</p>

                            <p>Sanatan Kriya is purely experiential and not taught out of a textbook. The reason for this is very simple- it is only when one experiences the power of the subject firsthand, does its true potential and magnitude become apparent.
                            </p>

                            <p>Further, Sanatan Kriya requires that each student be individually supervised and taught yogic practices as per their individual capacity. The Kriya induces a state of balance in all layers of existence – emotional, physical, financial and etheric, paving way for evolution of a being.</p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

</section>
  
<?php require_once(__DIR__ . '/../../includes/footer.php'); ?>