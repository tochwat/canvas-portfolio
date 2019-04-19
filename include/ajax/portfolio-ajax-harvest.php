<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="clearfix">

    <div id="portfolio-ajax-title" style="position: relative;">
        <h2>Harvest</h2>
        <div id="portfolio-navigation">
            <?php if( $previd ){ ?><a href="#" id="prev-portfolio" data-id="<?php echo $previd; ?>"><i class="icon-angle-left"></i></a><?php } ?>
            <?php if( $nextid ){ ?><a href="#" id="next-portfolio" data-id="<?php echo $nextid; ?>"><i class="icon-angle-right"></i></a><?php } ?>
            <a href="#" id="close-portfolio"><i class="icon-line-cross"></i></a>
        </div>
    </div>

    <div class="line line-sm topmargin-sm"></div>

    <!-- Portfolio Single Image
    ============================================= -->
    <div class="col_three_fifth portfolio-single-image nobottommargin">
        <a href="#"><img src="images/a-portfolio/full-images/harvest.jpg" alt=""></a>
    </div><!-- .portfolio-single-image end -->

    <!-- Portfolio Single Content
    ============================================= -->
    <div class="col_two_fifth portfolio-single-content col_last nobottommargin">

        <!-- Portfolio Single - Description
        ============================================= -->
        <p>A seasonal recipe book web app backed by a mySQL database with sequelize. The app is coded following the MVC paradigm and utilizes Bootstrap for the front-end.</p>
        <!-- Portfolio Single - Description End -->

        <div class="line" style="margin: 40px 0;"></div>

        <!-- Portfolio Single - Meta
        ============================================= -->
        <ul class="portfolio-meta bottommargin">
            <li><span><i class="icon-calendar3"></i>Completed on:</span> April 2019</li>
            <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML / CSS / Express / Sequelize / Handlebars</li>
        </ul>
        <!-- Portfolio Single - Meta End -->

        <!-- Portfolio Single - Share
        ============================================= -->
        <div class="si-share clearfix">
            <span>Share:</span>
            <div>
                <a href="#" class="social-icon si-borderless si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-rss">
                    <i class="icon-rss"></i>
                    <i class="icon-rss"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-email3">
                    <i class="icon-email3"></i>
                    <i class="icon-email3"></i>
                </a>
            </div>
        </div>
        <!-- Portfolio Single - Share End -->

    </div><!-- .portfolio-single-content end -->

</div>