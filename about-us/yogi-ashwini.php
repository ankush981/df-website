<?php
    //define meta tags, if any. these will be used by header.php
    $meta_tags = '';
    $current_page = 'about-yogi-ashwini';
    $current_section = 'about-us';
    require_once('../includes/header.php'); 
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">About Yogi Ashwini</h2>
                    <hr class="botm-line">
                </div>

                <div>
                    <img src="<?php echo $server_url;?>/assets/img/about-us/yogi-ashwini.png" class="img img-responsive img-center">
                </div>

                <div class="col-md-12 cta-info text-center quote-in-page">
                    <h3><em><span class="dec-tec">“</span>Creation emerged from stillness. The ultimate purpose of Yoga is to gather that stillness inside because stillness is the ultimate strength; in fact, it holds the complete Creation in it.<span class="dec-tec">”</span></em></h3>
                </div>

                <div>
                    <h4><strong>A Perfect Blend of the Ancient and Modern</strong></h4>
                    <p>Yogi Ashwini is adept in the ancient sciences of Yoga, Tantra, Spiritual Healing, Science of Havans, Past-Life Visitation, Vedic Martial Arts and the Art of Mace. He can completely change the environment of a place with his amazing chanting of vedic mantras, speaks many languages fluently, and is widely travelled. With an Honours degree in Economics, a Masters in Management and a successful business, he is the author of global best-sellers on ancient sciences, and an eminent writer for leading newspapers and journals. He is an acclaimed speaker both nationally and internationally, having been invited to prestigious forums such as Oxford University, UK and Indian Institute of Management, Bangalore, and is the Honorary Editor of the spiritual magazine 'The Inner World' and the Guiding Light of Dhyan Foundation.</p>

                    <h4><strong>A True Guru in the Modern Times</strong></h4>
                    <p>After studying the being for decades, spending years in silence and having interacted with the Himalayan masters, Yogi Ashwini propounded the Sanatan Kriya, an assimilation of the eight limbs of Patanjali Ashtang Yog, as given by Sage Patanjali 4500 years back, without any dilutions and modifications. The sheer magnetism of his persona. the radiance he exudes, even above 50, and the experiences one gets just by being in his presence, are enough proof of the efficacy of the practice. He is perhaps the only Yog Guru who not only exudes but can also transfer radiance and glow... his students are a living example. Also, probably the only modern day Guru whose abilities have been experienced first hand by the doctors of IMA and are supported by the scientific and medical community.</p>

                    <p>Indian Medical Association in 2011 bore witness to the phenomenal abilities of this Yogi and the power of Sanatan Kriya , after a live demonstration by students of Yogi Ashwini. His two decades of pioneering research on anti-ageing, published in the book Sanatan Kriya: The Ageless Dimension, have found validation in recent studies by certain Western Universities.</p>

                    <div class="col-md-12 cta-info text-center quote-in-page">
                        <h3><em><span class="dec-tec">“</span>Yog is a sadhna, not a business. It cannot be bought but is given by the Guru to the shishya. The purpose of yog is to free you from the clutches of maya, any attempts to tie the subject to commerce (or maya) will cause it to lose its efficacy.<span class="dec-tec">”</span></em></h3>
                    </div>

                    <p>Having dispelled many popular myths about yoga and having changed the lives of countless people from all walks of life, Yogi Ashwini is on a mission: to make people experience the real power of yoga, in accordance with the guru-shishya parampara. The master believes that every being is unique and it is an individual journey and therefore yoga cannot be taught as a mass exercise. He maintains one-to-one interaction with all his students worldwide and accepts nothing from his shishyas.</p>

                    <div class="col-md-12 cta-info text-center quote-in-page">
                        <h3><em><span class="dec-tec">“</span>Yog is a Subject of Experience.<span class="dec-tec">”</span></em></h3>
                    </div>

                    <p>
                    Yogi Ashwini's philosophy is clear and simple, and his approach is practical. Thousands have benefited physically, emotionally, mentally and spiritually from the practice of Sanatan Kriya, which is taught across the globe free of cost.Yog is an individual's path of experience. Yogi ji believes that your own experience is what will tell you about evolution and efficacy of this path and nobody has the right except you, yourself.
                    </p>

                    <p>
                    Tests have been performed on his students by renowned doctors with amazing results on controlling the breath and heart rate. He believes in practical experience and is open for more tests by the scientific community. With perfect control over mind and body, he can prove scientifically the efficacy and phenomenal powers of the Science of yoga.
                    </p>

                    <div class="col-md-12 cta-info text-center quote-in-page">
                        <h3><em><span class="dec-tec">“</span>Only that being can tread the path of sadhna who is willing to help others.<span class="dec-tec">”</span></em></h3>
                    </div>

                    <p>
                    Yogi Ashwini insists upon charity and service as the sole means to progress on the path of sadhna. In fact, he dedicates most part of his life to service of mankind - running schools for the underprivileged (Anand Vidyalayas), protecting wildlife and looking after injured animals (Save a Cow , Feed a Dog, Help A Monkey and Befriend A Bird), countrywide daily food distribution camps (langars) , sponsoring higher education of the poor and the blind, generating employment for the under-privileged, providing medical help to humans and animals alike, to name a few.
                    </p>
                </div>
            </div>

            <div class="col-sm-12">
                <?php 
                    //sidebar name is linked to section name
                    include_once('../sidebars/' . $current_section . '.php'); 
                ?>
            </div>
        </div>

        <?php 
            //include sidebar - no effect if none exists
            include_once($server_url . '/sidebars/' . $current_section . '.php');
        ?>
    </div>
</section>
  
<?php require_once('../includes/footer.php'); ?>