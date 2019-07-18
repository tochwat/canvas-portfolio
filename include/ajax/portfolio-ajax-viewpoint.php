<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="clearfix">

    <div id="portfolio-ajax-title" style="position: relative;">
        <h2>Viewpoint Design</h2>
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
        <a target=”_blank” href="images/a-portfolio/full-screen/viewpoint.pdf"> <img src="images/a-portfolio/full-images/viewpoint.jpg" alt="viewpoint Brand Identity"></a>
    </div><!-- .portfolio-single-image end -->

    <!-- Portfolio Single Content
    ============================================= -->
    <div class="col_two_fifth portfolio-single-content col_last nobottommargin">

        <!-- Portfolio Single - Description
        ============================================= -->
        <p>Viewpoint Photographic Art Center is a nonprofit art gallery in Sacramento providing exhibits, workshops and student programs. This project was to create a new visual identity for Viewpoint using the existing logo and translate that look into a set of marketing materials including a sponsorship packet and rack brochure.</p>
        <a class="button" target=”_blank” href="images/a-portfolio/full-screen/viewpoint.pdf">
            <span><i class="icon-line-link" id="project-link-icon"></i>View brochure PDF</span>
        </a>
        <!-- Portfolio Single - Description End -->

        <div class="line" style="margin: 40px 0;"></div>

        <!-- Portfolio Single - Meta
        ============================================= -->
        <ul class="portfolio-meta bottommargin">
            <!-- <li><span><i class="icon-calendar3"></i>Completed:</span> February 2019</li>
            <li><span><i class="icon-lightbulb"></i>Skills:</span> Firebase / JavaScript / Moment.js</li> -->
        </ul>
        <!-- Portfolio Single - Meta End -->

       

    </div><!-- .portfolio-single-content end -->

</div>