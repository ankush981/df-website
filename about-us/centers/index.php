<?php
    //define meta tags, if any. these will be used by header.php
    $meta_tags = '';
    $current_page = 'centers.php';
    $current_section = 'about-us';
    require_once(__DIR__ . '/../../includes/header.php'); 
?>

</script>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInLeft delay-05s">
                <div class="section-title">
                    <h2 class="head-title">Explore Dhyan Foundation Centers</h2>
                    <hr class="botm-line">                    
                </div>

                <p>Dhyan Foundation runs several centers in India and other countries. These centers are run solely on voluntary basis, and serve causes related to education, environment, animal welfare, etc. You're welcome to visit us at one of the centers and if you like what we're doing, come be a part.</p>
            </div>            
        </div>

        <br>
        
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2 text-center">
                <a href="<?php echo $server_url; ?>/about-us/centers/national-centers.php">
                    <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/national.jpg">
                    <button class="btn btn-submit">National Centers</button>
                </a>
                
            </div>
            <div class="col-sm-4 text-center">
               <a href="<?php echo $server_url; ?>/about-us/centers/international-centers.php">
                    <img src="<?php echo $server_url; ?>/assets/img/about-us/centers/international.jpg">
                    <button class="btn btn-submit">International Centers</button>
                </a>
            </div>
        </div>
        <div class="row">
            <?php 
                //sidebar name is linked to section name - no effect if file doesn't exist
                include_once(__DIR__ . '/../../includes/sidebars/' . $current_section . '.php'); 
            ?>
        </div>
    </div>
</section>
  
<?php require_once('../includes/footer.php'); ?>