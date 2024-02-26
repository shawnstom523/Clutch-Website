<?php
   /*
    Template Name: Members
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="page-header" class="members-header">
    <div class="container-fluid header-inner">
        <div class="row">
            <div class="col-md-8">
                <div class="sub-text-2"><?php the_field('page_title'); ?></div>
                <div class="page-title"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section id="member-intro" class="content-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 px-xl-2 px-0 text-md-right text-center d-flex align-items-center wow fadeInUp text-block">
                <div class="col-inner">
                <div class="sub-text-2 mb-5"><?php the_field('s1-subtitle'); ?></div>
                <div class="divider-wrapper d-flex justify-content-end"><div class="divider"></div></div>
                <h2 class="mb-4"><?php the_field('s1-title'); ?></h2>
                <?php the_field('s1-body'); ?>
                </div>
            </div>
            <div class="col-xl-7 px-5 wow fadeInUp">
                <div><img src="<?php the_field('s1-img'); ?>" alt="" width="100%"></div>
            </div>
        </div>
    </div>
</section>
<section id="member-benefits" class="content-section mt-5">
    <div id="benefits" style="position: absolute; margin-top: -10em"></div>
    <div class="container-fluid px-md-4 px-0">
        <div class="row benefit-title text-center">
            <div class="col wow fadeInUp">
                <div class="sub-text-2 mb-4"><?php the_field('s2-subtitle'); ?></div>
                <h2 class="mb-5"><?php the_field('s2-title'); ?></h2>
                <h4><?php the_field('s2-body'); ?></h4>
            </div>
        </div>
        <div class="row benefit-grid d-flex justify-content-around">
            <?php if ( have_rows('benefits') ) :
                    while ( have_rows('benefits') ) : the_row();
                        $title = get_sub_field('title');
                        $about = get_sub_field('about');

                        if ( !$title ) {
                            $title = 'benefit';
                        }
                        if ( !$about ) {
                            $about = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.';
                        }
                    ?>

                        <div class="col-md-3 benefit-grid-item mx-0">
                            <div class="benefit-title"><?php echo $title; ?></div>
                            <p><?php echo $about; ?></p>
                        </div>

            <?php endwhile;
            endif; ?>
            <!--div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit One</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit Two</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit Three</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit Four</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit Five</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-3 benefit-grid-item mx-md-5 mx-0">
                <div class="benefit-title">Benefit Six</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div-->
        </div>
    </div>
</section>
<section id="clutch-app" class="pl-md-0 pl-3 pb-5">
    <div id="app" style="position: absolute; margin-top: -12em"></div>
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-lg-6 pl-md-0 ml-md-0 phone-img wow fadeInUp">
                <img src="/wp-content/themes/clutch/img/members-img-2.png" alt="">
            </div>
            <div class="col-lg-5 wow fadeInUp">
                <div class="col-inner get-app-text text-left">
                    <div class="sub-text-2 mb-4"><?php the_field('s3-subtitle'); ?></div>
                    <div class="divider-wrapper d-flex justify-content-start"><div class="divider"></div></div>
                    <h2 class="mb-4"><?php the_field('s3-title'); ?></h2>
                    <p><?php the_field('s3-body'); ?></p>
                    <div class="btn-wrapper mt-5 mb-5 mb-md-0"><a href="https://clutch.health/contact/" class="btn">get the app</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="video-player" class="content-section pt-md-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto wow fadeInUp">
                <img src="/wp-content/themes/clutch/img/video-placeholder.jpg" alt="">
            </div>
        </div>
    </div>
</section> -->
<section id="app-img">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center wow fadeInUp">
                <img src="/wp-content/themes/clutch/img/members-img-3.png" alt="" width="100%">
            </div>
        </div>
    </div>
</section>


<?php get_template_part('/template-parts/cta') ?>
<?php get_footer(); ?>
