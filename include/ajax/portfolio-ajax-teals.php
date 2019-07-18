<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="clearfix">

    <div id="portfolio-ajax-title" style="position: relative;">
        <h2>TEALS Website</h2>
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
        <a target=”_blank” href="images/a-portfolio/full-screen/teals.jpg"> <img src="images/a-portfolio/full-images/teals.jpg" alt="teals website design"></a>
    </div><!-- .portfolio-single-image end -->

    <!-- Portfolio Single Content
    ============================================= -->
    <div class="col_two_fifth portfolio-single-content col_last nobottommargin">

        <!-- Portfolio Single - Description
        ============================================= -->
        <p>TEALS (Technology Education and Literacy in Schools) is an organization with a goal of increasing the number of computer science courses in high schools around the country. In order to achieve this goal they utilize a strategy of encouraging tech industry professionals to volunteer time in classrooms to “team-teach” computer science courses, not only teaching the students but teaching local teachers how to continue teaching the course on their own in the future. With a rapidly approaching deadline for when the CEO of Microsoft was planning on announcing the TEALS organization at a conference, our team was enlisted to quickly revamp the TEALS website. Due to this extremely quick turnaround I served as the project lead but also as the designer for this website (utilizing illustrations and photography we had previously produced). I rapidly iterated different versions of the page and coordinated directly with the TEALS team and executives at Microsoft to quickly design, produce and launch this website.</p>
        <a class="button" target=”_blank” href="images/a-portfolio/full-screen/teals.jpg">
            <span><i class="icon-line-link" id="project-link-icon"></i>View screenshot</span>
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