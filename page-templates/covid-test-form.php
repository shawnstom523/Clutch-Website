<?php
   /*
    Template Name: covid test form
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section class="steps-wrapper">
    <div id="steps" style="margin-top: -1em"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 mx-auto wow fadeInUp" data-wow-delay=".5s">
                <div class="sub-text-2 mb-3"><?php the_field('subtitle'); ?></div>
                <h2 class="mb-4"><?php the_field('title'); ?></h2>
                <p>Thank you for choosing Clutch Health for your diagnostic needs. Once you complete the below form, an email will be sent on how to view your results.</p>
                <h4><?php the_field('body'); ?></h4>
                    <div class="test-kit-img"><img src="https://clutch.health/wp-content/uploads/2020/09/default.jpeg" alt=""></div>
            </div>
        </div>
        <div class="row clutch-services wow fadeInUp">
        <?php
            if( have_rows('benefits') ):
                while( have_rows('benefits') ) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $about = get_sub_field('about');
                    ?>

                    <div class="col-md-4 service-column wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-icon">
                            <img src="<?php echo $icon; ?>" alt="">
                        </div>
                        <div class="service-title"><?php echo $title; ?></div>
                        <p class="service-text"><?php echo $about; ?></p>

                    </div>

             <?php
                endwhile;
            endif;
            ?>
        </div>
        <!-- <div class="service-btn text-center"><a class="btn" href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a></div> -->
    </div>
</section>
<section style="background-color: #2f1d57;">
    <div class="conatiner">
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="form-wrapper">
                    <script type="text/javascript" src="https://hipaa.jotform.com/jsform/202606090601039"></script>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('/template-parts/cta');
      get_footer();
?>
