<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="clearfix">

    <div id="portfolio-ajax-title" style="position: relative;">
        <h2>Girls Who Code</h2>
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
        <a target=”_blank” href="images/a-portfolio/full-screen/gwc.jpg"> <img src="images/a-portfolio/full-images/gwc.jpg" alt="Girls Who Code webpage"></a>
    </div><!-- .portfolio-single-image end -->

    <!-- Portfolio Single Content
    ============================================= -->
    <div class="col_two_fifth portfolio-single-content col_last nobottommargin">

        <!-- Portfolio Single - Description
        ============================================= -->
        <p>Girls Who Code offers free summer programs and after-school programs for girls allowing them to learn code in a fun and encouraging environment. This campaign aimed to highlight Microsoft’s partnership with Girls Who Code for their Summer Immersion programs. In addition to designing the webpage, I managed the project and produced the social media graphics with the help of an illustrator. The project was featured by the <a target=”_blank” href="https://www.huffpost.com/entry/girls-who-code_n_55ad5925e4b065dfe89f1b41"> Huffington Post.</a></p>
        <a class="button" target=”_blank” href="images/a-portfolio/full-screen/gwc.jpg">
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