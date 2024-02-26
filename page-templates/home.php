<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<!-- home header -->
<section id="home-header">
    <div class="container-fluid header-outer">
    <div class="row">
        <div class="col-xl-6 title-block">
            <div class="subtitle mb-4 animate__fadeInLeft"><?php the_field('subtitle'); ?></div>
            <h1 class="title"><?php the_field('title'); ?></h1>
            <div class="mt-5 text-md-left text-center play-btn">
                <a href="#get-started">
                    <img src="/wp-content/themes/clutch/img/play-btn.svg" alt="">
                    <p><?php the_field('play-btn-text'); ?></p>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="get-started" data-offset=“200”>
    <div class="container-fluid">
        <div class="home-content-intro row d-flex justify-content-center wow fadeInUp" data-wow-delay=".7s"  >
            <div class="col-xl-6 text-center mt-xl-0 mt-5">
                <h2>We've Changed the Healthonomics Playing Field<br> And Put the Ball Back In Your Court.</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row home-welcome mx-0">
            <div class="col-lg-5 welcome-block-1 wow fadeInUp" data-wow-delay=".5s" >
                <div class="sub-text text-lg-right text-center mt-lg-0 mt-4">the next evolution <br>in healthcare</div>
            </div>
            <div class="col-lg-7 welcome-block-2 wow fadeInUp" data-wow-delay=".7s">
                <div class="sub-text-2 mt-5"><?php the_field('s1-subtitle'); ?></div>
                <div class="divider"></div>
                <h2><?php the_field('s1-title'); ?></h2>
                <div class="row block-2-inner">
                    <div class="col-xl-6 offset-lg-6 pl-xl-5 pl-0">
                        <p><?php the_field('s1-body'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row welcome-img wow fadeInUp mx-0" data-wow-delay=".3s">
            <div class="col-lg-8 p-0">
                <div>
                    <img src="<?php echo the_field('s1-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row home-clutch-difference justify-content-center wow fadeInUp mx-0" data-wow-delay=".3s">
            <div class="col-xl-6 pt-4 difference-block-1">
                <h2><?php the_field('s2-title'); ?></h2>
                <h3><?php the_field('s2-subtitle'); ?></h3>
                <P><?php the_field('s2-body'); ?></P>
                <div class="my-5"><a href="/clutch-difference" class="">+ THE CLUTCH DIFFERENCE</a></div>
            </div>
            <div class="col-xl-4 pt-4">
                <div><img class="img-shadow my-md-0 my-5"src="<?php echo the_field('s2-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section id="home-services">
    <div class="container">
        <div class="row text-center">
            <div class="col wow fadeInUp" data-wow-delay=".5s">
                <div class="sub-text-2 mb-3"><?php the_field('s3-subtitle'); ?></div>
                <h2 class="mb-4"><?php the_field('s3-title'); ?></h2>
                <h4><?php the_field('s3-body'); ?></h4>
            </div>
        </div>
        <div class="row clutch-services wow fadeInUp">
        <?php
            if( have_rows('cards') ):
                while( have_rows('cards') ) : the_row();
                    $title = get_sub_field('title');
                    $iconLink = get_sub_field('icon-link');
                    $body = get_sub_field('body');
                    $link = get_sub_field('btn-link');
                    $text = get_sub_field('btn-text');
                    ?>

                    <div class="col-lg-4 service-column wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-icon">
                            <img src="<?php echo $iconLink; ?>" alt="">
                        </div>
                        <div class="service-title"><?php echo $title; ?></div>
                        <p class="service-text"><?php echo $body; ?></p>
                        <div class="service-btn"><a class="btn" href="<?php echo $link; ?>"><?php echo $text; ?></a></div>
                    </div>

             <?php
                endwhile;
            endif;
            ?>

            <!--div class="col-md-4 service-column wow fadeInUp" data-wow-delay=".5s">
                <div class="service-icon">
                    <img src="/wp-content/themes/clutch/img/rx-icon.svg" alt="">
                </div>
                <div class="service-title">Clutch <span>PBM</span></></div>
                <p class="service-text">Clutch Health is a fully-managed Pharmacy Benefits and Workforce Health Management solution designed to increase coverage, lower costs, and return the profits back to you.</p>
                <div class="service-btn"><a class="btn" href="/employers/#pbm">learn more</a></div>
            </div>
            <div class="col-md-4 service-column wow fadeInUp" data-wow-delay=".7s">
                <div class="service-icon">
                    <img src="/wp-content/themes/clutch/img/screen-icon.svg" alt="">
                </div>
                <div class="service-title">Clutch <span>DIAGNOSTICS</span></></div>
                <p class="service-text">Clutch Diagnostics manages every aspect of your company’s testing program including coordinating, implementing, reporting, and tracking results.</p>
                <div class="service-btn"><a class="btn" href="/employers/#diagnostics">learn more</a></div>
            </div>
            <div class="col-md-4 service-column wow fadeInUp" data-wow-delay=".9s">
                <div class="service-icon">
                    <img src="/wp-content/themes/clutch/img/digital-icon.svg" alt="">
                </div>
                <div class="service-title">Clutch <span>DIGITAL</span></></div>
                <p class="service-text">Our data platform was developed to provide real-time, cloud-based health information tracking across a wide spectrum of issues such as Covid-19 and other major diseases. </p>
                <div class="service-btn"><a class="btn" href="/employers/#digital">learn more</a></div>
            </div-->
        </div>
    </div>
</section>
<?php get_template_part('/template-parts/cta') ?>
<?php get_footer(); ?>
