<?php
    //define meta tags, if any. these will be used by header.php
    $meta_tags = '';
    $current_section = 'about-us';
    require_once(__DIR__ . '/../../includes/header.php'); 
?>

</script>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Dhyan Foundation National Centers</h2>
                    <hr class="botm-line">                    
                </div>
            </div>            
        </div>

        <br>
        
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/bengaluru.jpg" height="250">
                <h3>Bengaluru Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#bengaluru-details">Explore</button>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/dehradun.jpg" height="250">
                <h3>Dehradun Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#dehradun-details">Explore</button>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/hyderabad.jpg" height="250">
                <h3>Hyderabad Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#hyderabad-details">Explore</button>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/kolkata.jpg" height="250">
                <h3>Kolkata Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#kolkata-details">Explore</button>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/ludhiana.jpg" height="250">
                <h3>Ludhiana Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#ludhiana-details">Explore</button>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/mumbai.jpg" height="250">
                <h3>Mumbai Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#mumbai-details">Explore</button>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/pune.jpg" height="250">
                <h3>Pune Center</h3>
                <button class="btn btn-submit" data-toggle="modal" data-target="#pune-details">Explore</button>
            </div>
        </div>
        <div class="row">
                <?php 
                    //sidebar name is linked to section name - no effect if file doesn't exist
                    include_once(__DIR__ . '/../../includes/sidebars/' . $current_section . '.php'); 
                ?>
        </div>
    </div>

    <!-- Bengaluru center details -->
    <div class="modal fade" id="bengaluru-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bengaluru Center Details</h4>
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
                                    <td>Ms. Anjana</td>
                                    <td>+91-9886714558</td>
                                </tr>
                                <tr>
                                    <td>Ms. Sahana</td>
                                    <td>+91-9448335830</td>
                                </tr>
                                <tr>
                                    <td>Ms. Tejinder</td>
                                    <td>+91-9611445488</td>
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
                                    <td>The Arts Village, No. 57, 58, 60 St. Marks Road,Bangalore-560001</td>
                                    <td>Saturday</td>
                                    <td>7:45am – 9:00am</td>
                                    <td>+919886714558</td>
                                </tr>
                                <tr>
                                    <td>Asian Woman, The villa no 374, 3rd Block, Koramangala, Bengaluru</td>
                                    <td>Saturday, Sunday</td>
                                    <td>8:00am – 9:00am</td>
                                    <td>+919880212545/+919886714558</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Begaluru Center</h3>
                            <p>The Bangalore chapter of Dhyan Foundation started in July 2008 and ever since,weekend mornings are brimming with people from all walks of life -IT professionals,bankers,housewives,students,corporate executives etc.,all coming together for dhyan under the divine guidance of Yogi ji.Yogiji first stepped foot in Bangalore in October 2008 to a rapturous welcome by hundreds of eager seekers.Thereafter,he has graced the city on multiple occasions,each time the seekers are greeted by a new and divine experience of simply being in his presence.
                            </p>

                            <p>Charity and service are very close to Yogiji's heart and taking the same forward here,Dhyan members run a school for underprivileged children -Anand Vidyalaya- where free education is provided to around 55 children along with free snacks.The students are exposed to varied experiences like trips to museums,attending the Bangalore Literature Festival,science experiment lab visits,story telling sessions,"learn to bake" workshops,arts and crafts sessions, just to name a handful.Students from leading colleges of Bangalore intern at Anand Vidyalaya and share their knowledge and experience.
                            </p>

                            <p>The free Anand Vidyalaya Vocational Training Centre for Women conducts all year long tailoring programs from which hundreds of women have not only learnt the skill but are also earning a steady income by making bags for a well known supplier.The classes are also attended by recovery patients of NIMHANS Psychiatric Rehabilitation Services Department where they are not only taught the skill but also assisted to be part of the mainstream.</p>

                            <p>
                            Center activities: 

                            <ul style="list-style-type: disc;">
                                <li>Hundreds of animals are fed everyday by the dedicated volunteers of FAD,the wing of Dhyan Foundation dedicated to animals.
                                </li>

                                <li>Under the "Save a Cow" program, hundreds of cows are provided fodder daily and calves nurtured and cared for, to become healthy cows.
                                </li>

                                <li>Keeping the tradition of feeding the poor alive,workers at construction sites,the homeless and the underprivileged are provided sumptuous meals daily.On special occasions,the circle of beneficiaries extend to more locations and more people.
                                </li>

                                <li>Special seasonal drives like blanket distribution in winters,eye camps for poor students etc. are undertaken.</li>

                                <li>Vedic havans are conducted every Poornima and Amavasya and on all important and special days like Holi,Diwali,Guru Purnima,Sankranti,Shivratri etc.</li>

                                <li>Workshops have been held at various corporates like Infosys,Intel,Wipro,Cisco,HP and many more. Thousands have benefitted and continue to benefit from the amazing powers of the Sanatan Kriya.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Dehradun center details -->
    <div class="modal fade" id="dehradun-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Dehradun Center Details</h4>
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
                                    <td>Ekta Mullick</td>
                                    <td>09359739684</td>
                                </tr>
                                <tr>
                                    <td>Reena Dangwal</td>
                                    <td>09719452813</td>
                                </tr>
                                <tr>
                                    <td>Renu Joshi</td>
                                    <td>09897339940</td>
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
                                    <td>Meher Dham, Near R.T.O.</td>
                                    <td>Saturday</td>
                                    <td>5 pm</td>
                                    <td>09359739684, 09719452813, 09897339940</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/dehradun-1.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/dehradun-2.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/dehradun-3.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Dehradun Center</h3>
                            <p>Dehradun is among the oldest centres of Dhyan Foundation. Weekly langars and Sanatan Kriya sessions are part of Dhyan Foundation activities in the city. Young and old, men and women, professionals and householders have benefited from the Sanatan Kriya workshops organised here from time to time. Lately, many volunteers have taken to Dhyan Foundation's Save A Cow mission. As part of this, cows are being looked after by local volunteers around the Vasant Vihar area of the city.</p>

                            <p>In June 2013, when devastating floods and landslide hit the state and claimed several lives, simultaneous havans for healing were conducted. Vedic Havans are meant for internal and external cleansing, and to invoke peace and harmony in the environment. Dhyan Foundation has launched various campaigns committed to environment protection. As part of this, the Dehradun chapter undertook a tree-plantation drive and distributed saplings recently.</p>

                            <p>The guiding light of Dhyan Foundation, Yogi Ashwini advocates charity and service as the core of yog. In keeping with His philosophy, havans and langars are held on special days like the Maha Shivratri, Guru Purnima, Makar Sankranti, Holi and Diwali. Dhyan Foundation volunteers organise blanket distribution every winter as part of their sadhna. Yet the volunteers are aware that what are seemingly ordinary acts of charity and service, are key to liberation from the limitations of the physical self.</p>

                            <p>
                            Center activities:
                                <ul style="list-style-type: disc;">
                                    <li>Weekly langar (every Monday) at Harbanswala Village, Near Vasant Vihar, Dehradun</li>
                                    <li>Regular Amavasya and Purnima havans are conducted in Dehradun.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Hyderabad center details -->
    <div class="modal fade" id="hyderabad-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Hyderabad Center Details</h4>
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
                                    <td>Mrs. Anjali Burman</td>
                                    <td>+91-9831093133</td>
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
                                    <td>Barrackpore, Kolkata</td>
                                    <td>Daily</td>
                                    <td>7pm</td>
                                    <td>08335021900/09831093133</td>
                                </tr>
                                <tr>
                                    <td>NBCC. VIBGYOR, Community center, New Town, Rajarhat</td>
                                    <td>Sunday</td>
                                    <td>7am - 8am</td>
                                    <td>+919831093133</td>
                                </tr>
                                <tr>
                                    <td>Daga Nikunj, 25/1 Ballygunge Circular Road, Opp military Camp</td>
                                    <td>Sunday</td>
                                    <td>10:30am</td>
                                    <td>+919831093133</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/hyderabad-1.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/hyderabad-2.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Hyderabad Center</h3>
                            <p>The Hyderabad chapter began on 25th March, 2010, with a reading of a book written by Yogi Ashwini's, by luminaries including the Ex-Governor of Sikkim, V.Rama Rao ji, Dentist to the President of India, Dr.M.S.Gowd, well known actor, Shiva Krishna ji and popular dentist Dr. Rummy Azad. It later resonated with the soul stirring chants by Yogi ji which took the audience to a different level all together.</p>

                            <p>Ever since Sanatan Kriya became an indispensable part of our lives, and under the guidance of Yogiji, our experiences in both physical and spiritual realms grew by leaps and bounds</p>

                            <p>Today we have a regular classes and workshops running at Hyderabad for Sanatan Kriya and its other facets such as mantra chanting, havans, spiritual healing, anti-ageing and much more.</p>

                            <p>
                            Center activities:
                                <ul style="list-style-type: disc;">
                                    <li>Anand Vidyalaya: Hyderabad reaches out to almost 250 underprivileged kids through 5 branches of AV that operate in Old City, Shivam Road, Ramantapur, MNJ Cancer Hospital and Attapur.</li>
                                    <li>Daily langars and free distribution of food to kids is also carried out at some Shivam Road and Attapur center, while food and activities are organised for kids on special occasions at all centers.</li>
                                    <li>Feed a Dog initiative through seven feeding points every day</li>
                                    <li>Langars at Osmania Hospital and Koti Maternity Hospital for feeding over 400 people every day.</li>
                                    <li>Stitching classes for underprivileged women everyday at Shivam Road (10am to 1pm and 5pm to7pm) and Old City (12 pm to 3 pm).</li>
                                    <li>Monthly havans are conducted in many parts of the city.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Kolkata center details -->
    <div class="modal fade" id="kolkata-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Kolkata Center Details</h4>
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
                                    <td>Mrs. Poonam</td>
                                    <td>+919393468680</td>
                                </tr>
                                <tr>
                                    <td>Mr. Nitesh</td>
                                    <td>+919959012000</td>
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
                                    <td>Times of India</td>
                                    <td>Sunday</td>
                                    <td>9am - 10am </td>
                                    <td>+91-9393468680</td>
                                </tr>
                                <tr>
                                    <td>Dance Academy Tarnaka</td>
                                    <td>Sunday</td>
                                    <td>9am - 10am </td>
                                    <td>+91-9393468680</td>
                                </tr>
                                <tr>
                                    <td>Secunderabad Club</td>
                                    <td>Saturday</td>
                                    <td>7am - 8am </td>
                                    <td>+91-9393468680</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/kolkata-1.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/kolkata-2.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Kolkata Center</h3>

                            <p>Kolkata awaited the Living Master Yogi Ashwini's arrival... and was blessed with his arrival in April 2011. His visit involved a talk at Oxford Book Store , Saturday Club where his talk and chants left the entire hall spellbound and the instant experiences we had in his mere presence led us to start the Dhyan Foundation Kolkata Chapter.</p>

                            <p>Today, we are living and sharing the path of yog and seva as illuminated by yogiji through regular Sanatan Kriya classes, anti-ageing retreats, havans, mantra chanting workshops and much more under the Guidance of Yogiji in lines with the ancient Guru Shishya Parampara.</p>

                            <p>
                                Center activities:
                                <ul style="list-style-type: disc">
                                    <li>Along with daily langars at Kalighat, we hold food distribution outside Sai Temple, southern avenue every thursday. A van has also been acquired to enable langars to be held without disruption.</li>
                                    <li>FAD is being held at 7 points. Regular treatments for dogs are also done including surgeries when required</li>
                                    <li>DF Kolkata starts Aanand Gaushala for rescued unwanted and sick cows and is wholly managed by volunteers.</li>
                                    <li>We are also sponsoring education for girls at Udyaan care, 83 Ballygunge garden, West Bengal.</li>
                                    <li>Vedic Havans are conducted on the amavasya and purnima of every month at different venues across the city by sadhaks.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Ludhiana center details -->
    <div class="modal fade" id="ludhiana-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ludhiana Center Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
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
                                    <td>Lions Club, Udham Singh Nagar</td>
                                    <td>Sunday</td>
                                    <td>7:00am – 8:30am (Winters)</td>
                                    <td>+919814049408, +919915583963</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/ludhiana-1.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/ludhiana-2.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Ludhiana Center</h3>

                            <p>Dhyan Foundation, Ludhiana chapter is regularly involved in charitable services namely langar, cow feeding and protection, Anand Vidyalaya and FAD.</p>

                            <p>Ludhiana chapter has also undertaken the care and fodder supply to a Gaushala near village Kaind, Malerkotla Road (About 15 kms from Ludhiana city.) This gaushala was in a bad shape when volunteers of Dhyan Foundation came to know about it and immediately took the responsibility of providing the green fodder. Recently, a generator set has also been installed there to facilitate cutting of the fodder. A mini-truck drops about 1080 kgs of green fodder at 5 locations where a large number of stray cows, bulls and calves are fed. Tubs have also been placed at all such points which are filled with fresh water daily. The injured, malnourished and sick cattle are also being taken care of by the volunteers. Such cases are sent to a prominent local gaushala, Gobind Godham as well as the veterinary hospital being run by the NGO, People for Animals (PFA) for their treatment. Three calves, two bulls and five cows have been saved during last two months while one cow breathed her last on way to hospital. Mass awareness programs have also been conducted to sensitize public about menace of using polythene bags for the household garbage which proves fatal for the hungry Gauvansh feeding on it. The campaign has drawn an encouraging response.</p>

                            <p>Regular langar is organized every Thursday at Civil Hospital apart from different roadside points feeding about 1000 persons. This is in addition to the langar organized every Poornima, sakranti, and Amavasya.</p>

                            <p>The centre is running Anand Vidyalaya on the premises of a government school, Prem Nagar (behind Hathi Complex) for the last two years. The number of kids has increased to 45 from 22 since the 'Joy of Giving Week' was celebrated in first week of October 2012. Besides studies, a story telling session and story book reading is organized every Wednesday and Friday.</p>

                            <p>Under FAD, stray dogs are fed daily at 18 points in areas like Udham Singh Nagar, Tagore Nagar, Maya Nagar, Prem Nagar and Civil Lines. Sick and injured ones spotted by volunteers are sent for treatment at the PFA hospital. The volunteers feed these dogs in their residential areas as well.</p>

                            Center activities:
                            <ul style="list-style-type: disc;">
                                <li>Feed a Dog: More than 100 dogs fed daily over 20 feeding points.</li>
                                <li>Anand Vidyalaya: Monday - Friday, 3:30 pm - 5 pm at Prem Nagar</li>
                                <li>Langars: 1st Thursday - Roadside, Industrial Area. 2nd Thursday - Roadside, Jalandhar Bye Pass Road. 3rd Thursday - Civil Hospital Area. 4th Thursday - Roadside, Cheema Chowk</li>
                                <li>Havan: Amavasya and Purnima of every month</li>
                                <li>Save a Cow: Fodder supply at Gaushala near village Kaind (Malerkotla Road), Tajpur Road, Urban estate dump, Focal Point Phase-4, Focal Point Phase-7, Urban Estate 32 Sector behind Vardhman Textiles</li>
                                <li>Daily Cow Feeding drive in Ludhiana</li>
                            </ul>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Mumbai center details -->
    <div class="modal fade" id="mumbai-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mumbai Center Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
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
                                    <td>IMA Building, Behind Chandan Cinema, J.R. Mhatre Marg, Juhu</td>
                                    <td>Saturday (First, second and third)</td>
                                    <td>8:30am - 10:00am</td>
                                    <td>+91-9820262024, +91-9819825285</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/mumbai-1.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/mumbai-2.jpg">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="<?php echo $server_url; ?>/assets/img/about-us/centers/mumbai-3.jpg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>About the Mumbai Center</h3>

                            <p>In February, 2011, Mumbai played gracious host to The Living Master Yogi Ashwini. Looking back, it was a visit that will define the course of modern medical science in the times to come. A visit that changed the perception of the medical fraternity about Yog and a Yogi. 
                            </p>
                                
                            <p>The local media were very curious about the power and efficacy of yogic sciences. What baffled them even more was the fact that doctors too vouched for the power of techniques such as Sanatan Kriya and the benefits it confers upon the practitioners.Their curiosity and apprehensions about the subject vanished as they witnessed first-hand a live demonstration, at the Indian Medical Association. Click here for more.</p>

                            <p>Not too far behind the premier body, the Malad Medical Association also saw doctors thronging in great numbers to hear the Living Master unravel the mysteries of the being.</p>

                            <p>Today, we are running regular classes at the Indian Medical Association for one and all who want to step on to the ultimate journey of spirit, the authentic path of yog and self-evolution, as laid down by our ancestors many thousand years ago.</p>
                            
                            <p>
                                Center activities:
                                <ul style="list-style-type: disc;">
                                    <li>Dhyan Foundation has also adopted a village and support the Mandawane High School in the village with distribution of stationery, sports equipment.</li>
                                    <li>Vedic Havans are conducted on the amavasya and purnima of every month and on special occasions</li>
                                    <li>Daily Food distribution at Andheri west</li>
                                    <li>FAD daily for 6-8 dogs in Malad west</li>
                                    <li>Anand Vidyalaya: In 2016, 14th branch of Anand Vidyalaya was started for classes 7th & 8th at Radha bai sobhraj tahiliani high school/Heshu advani English Medium school,Chembur, Mumbai, 5:30pm everyday.</li>
                                </ul>
                            </p>

                            <p>If interested in volunteering for Feed a dog, Trip to Mandawane village, Tutoring kids at Bal Bhavan (Andheri) then please contact +91-9820262024</p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <!-- Pune center details -->
    <div class="modal fade" id="pune-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pune Center Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
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
                                    <td>917/918, Synagogue Street, Dinshaw House, Near M.G. Road, 6th floor, Camp</td>
                                    <td>Saturday, Sunday</td>
                                    <td>5:00pm - 6:15 pm</td>
                                    <td>+91-7875870837</td>
                                </tr>
                            </table>
                        </div>                      
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Details about Pune Center</h3>
                            <p>Dhyan Foundation activities in Pune commenced with Sanatan Kriya sessions at Institute of National Integration (INI). Officers and personnel at the INI were taken through the basic and advanced concepts and practices of Ashtang Yog and they practically experienced its benefits in their life. Since then, Sanatan Kriya is being practiced by all in INI every single day.</p>

                            <p>Volunteers have also conducted in the past, Sanatan Kriya Workshops at management institutes like Symbiosis Institute of Management Studies (SIMS) and at a newly started institute in Pirangut near Pune. Apart from this, regular Sanatan Kriya sessions are conducted on every Saturday evening in lines with the ancient Guru-Shishya Parampara.</p>

                            <p>Seva or charity and service has been called as the yog of kaliyug. Keeping this in mind, volunteers hold langars once in a month for the needy. Pune has also made a humble start with the campaign to feeding stray dogs recently. In December, 2013 the Pune chapter of Dhyan Foundation distributed blankets among the poor and are now planning to start distributing things suitable for every season.</p>

                            <p>
                            Center activities:
                                <ul style="list-style-type: disc">
                                    <li>FAD: 10 dogs are being fed at 4 spots every day</li>
                                    <li>Langars: Twice in a month</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</section>
  
<?php require_once(__DIR__ . '/../../includes/footer.php'); ?>