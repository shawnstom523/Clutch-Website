<?php
/*
    Template Name: LIPA RX-CARD FORM
    */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>
<section id="page-header" class="rx-header">
    <div class="container-fluid header-inner">
        <div class="row">
            <div class="col-md-8">
                <!-- <div class="sub-text-2 text-left">Clutch RX</div> -->
                <img src="/wp-content/themes/clutch/img/lipa_logo.png" alt="">
                <div class="page-title"><?php the_field('page_title'); ?></div>
                <div class="header-text"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section class="steps-wrapper">
    <div id="steps" style="margin-top: -1em"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col wow fadeInUp" data-wow-delay=".5s">
                <div class="sub-text-2 mb-3"><?php the_field('subtitle'); ?></div>
                <h2 class="mb-4"><?php the_field('title'); ?></h2>
                <h4><?php the_field('body'); ?></h4>
            </div>
        </div>
        <div class="row clutch-services wow fadeInUp">
            <?php
            if (have_rows('benefits')) :
                while (have_rows('benefits')) : the_row();
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
<div id="rx-signup" class="contact-wrapper d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 px-5">
                <div class="sub-text-2 mb-3">Sign-Up</div>
                <div class="col-inner contact-title">
                    <h2>Get Your FREE Rx Savings Card Today!</h2>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-wrapper">
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => 20, 'title' => false, 'description' => false)); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="cta">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-3 wow fadeInUp my-xl-0 my-2" data-wow-delay=".5s">
                <a href="/clutch-difference">
                    <div class="cta-block cta-block-1">
                        <div class="cta-subtitle">learn more</div>
                        <div class="cta-title">About Clutch</div>
                        <div class="cta-btn-wrapper">
                            <div class="cta-btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 wow fadeInUp my-xl-0 my-2" data-wow-delay=".7s">
                <a target="_blank" href="https://www.lipa.org/">
                    <div class="cta-block cta-block-2">
                        <!-- <div class="cta-subtitle">contact us</div> -->
                        <div class="cta-title">We'd love to show you a better way.</div>
                        <div class="cta-btn-wrapper">
                            <div class="cta-btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>


<?php
get_footer();