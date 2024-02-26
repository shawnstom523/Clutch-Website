<?php
   /*
    Template Name: Employers
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="page-header" class="employer-header">
    <div class="container-fluid header-inner">
        <div class="row">
            <div class="col-md-8">
                <div class="sub-text-2"><?php the_field('page_title'); ?></div>
                <div class="page-title"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section id="pbm" class="content-section mt-5">
    <div id="pharmacy-benefits" style="position: absolute; margin-top: -13em"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-xl-6 px-md-5 px-0 text-md-left text-center wow fadeInUp">
                <div class="icon-small mb-3"><img src="<?php the_field('s1-icon'); ?>" alt=""></div>
                <h2 class="mb-4"><?php the_field('s1-title'); ?></h2>
                <h3 class="mb-4"><?php the_field('s1-subtitle'); ?></h3>
                <p><?php the_field('s1-body'); ?></p>
            </div>
            <div class="col-xl-4 px-3 wow fadeInUp">
                <img class="w-100" src="<?php the_field('s1-img'); ?>" alt="">
            </div>
        </div>
        <div class="row clutch-how">
            <div class="col-12 text-center mb-5 wow fadeInUp">
                <h2><?php the_field('s2-title'); ?></h2>
            </div>
            <div class="col-12 how-grid">
                <?php
                    $i = 1;
                    if( have_rows('cards') ) :
                        while( have_rows('cards') ) : the_row();
                            $title = get_sub_field('title');
                            $icon = get_sub_field('img');
                            $about = get_sub_field('about');
                        ?>

                        <div class="how-card-wrapper wow fadeInUp">
                            <div class="how-card">
                                <div class="how-title-wrapper">
                                    <div class="how-title"><?php echo $title; ?></div>
                                </div>
                                <div class="how-content">
                                    <div class="how-icon"><img src="<?php echo $icon; ?>" alt=""></div>
                                    <div class="how-text"><?php echo $about; ?></div>
                                </div>
                            </div>
                            <?php if ($i != 4) { ?>
                                <div class="card-arrow">
                                    <img src="/wp-content/themes/clutch/img/arrow-icon.png" alt="">
                                </div>
                            <?php } ?>
                        </div>

                        <?php
                        $i++;
                        endwhile;
                    endif;
                /*
                <!-- Card Item -->
                <div class="how-card-wrapper">
                    <div class="how-card">
                        <div class="how-title-wrapper">
                            <div class="how-title">employers pay a flat monthly “per member” fee</div>
                        </div>
                        <div class="how-content">
                            <div class="how-icon"><img src="/wp-content/themes/clutch/img/how-icon-1.svg" alt=""></div>
                            <div class="how-text">While industry competitors charge large “spreads” on every prescription filled, we offer a <strong>simple, flat-fee monthly plan</strong> (per member) saving most companies up to <strong>30% on admin (PBM) costs.</strong></div>
                        </div>
                    </div>
                    <div class="card-arrow">
                        <img src="/wp-content/themes/clutch/img/arrow-icon.png" alt="">
                    </div>
                </div>
                <!-- End Card -->
                <!-- Card Item -->
                <div class="how-card-wrapper">
                    <div class="how-card">
                        <div class="how-title-wrapper">
                            <div class="how-title">members access prescriptions at cost savings</div>
                        </div>
                        <div class="how-content">
                            <div class="how-icon"><img src="/wp-content/themes/clutch/img/how-icon-2.svg" alt=""></div>
                            <div class="how-text">Our network of over <strong>60,000 pharmacies</strong> nationwide empowers members with access to the lowest prescription costs in order to eliminate their dependence on expensive drugs.</div>
                        </div>
                    </div>
                    <div class="card-arrow">
                        <img src="/wp-content/themes/clutch/img/arrow-icon.png" alt="">
                    </div>
                </div>
                <!-- End Card -->
                <!-- Card Item -->
                <div class="how-card-wrapper">
                    <div class="how-card">
                        <div class="how-title-wrapper">
                            <div class="how-title">Clutch passes all savings and rebates back to employers</div>
                        </div>
                        <div class="how-content">
                            <div class="how-icon"><img src="/wp-content/themes/clutch/img/how-icon-3.svg" alt=""></div>
                            <div class="how-text">Clutch Health passes <strong>100% of the annual rebates</strong> directly back to the employer, providing complete <strong>pricing transparency</strong> and <strong>unmatched industry savings.</strong></div>
                        </div>
                    </div>
                    <div class="card-arrow">
                        <img src="/wp-content/themes/clutch/img/arrow-icon.png" alt="">
                    </div>
                </div>
                <!-- End Card -->
                <!-- Card Item -->
                <div class="how-card-wrapper">
                    <div class="how-card">
                        <div class="how-title-wrapper">
                            <div class="how-title">employers pay a flat monthly “per member” fee</div>
                        </div>
                        <div class="how-content">
                            <div class="how-icon"><img src="/wp-content/themes/clutch/img/how-icon-4.svg" alt=""></div>
                            <div class="how-text">We arm employers with <strong>real-time data, innovative benefit strategies, cost-saving technology, analytics reporting</strong>, and <strong>pricing controls</strong> for a healthier workforce.</div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
                */ ?>
            </div>
        </div>
        <div class="row how-info">
            <div class="col-md-8 text-center mx-auto wow fadeInUp">
                <h4><?php the_field('s2-body'); ?></h4>
            </div>
        </div>
        <!--div class="row how-logos d-flex justify-content-center">
            <div class="col-md-3 text-center">
                <img src="/wp-content/themes/clutch/img/blue-cross-logo.jpg" alt="">
            </div>
            <div class="col-md-3 text-center">
                <img src="/wp-content/themes/clutch/img/90-degree-logo.jpg" alt="">
            </div>
        </div-->
    </div>
</section>
<section id="diagnostics">
    <div id="clutch-diagnostics" style="position: absolute; margin-top: -7em"></div>
    <div class="title-bar">
        <div class="title-bar-text">Clutch DIAGNOSTICS:</div>
    </div>
    <div class="container-fluid diagnostics-content">
        <div class="row diagnostic-row-1 d-flex justify-content-center">
            <div class="col-xl-4 mb-5 mb-xl-0 wow fadeInUp text-center text-xl-left">
                <img src="<?php the_field('s3-img1'); ?>" alt="">
            </div>
            <div class="col-xl-4 wow fadeInUp text-center text-xl-left">
                <div class="icon-small mb-3"><img src="<?php the_field('s3-icon'); ?>" alt=""></div>
                <div class="sub-text-2 mb-5"><?php the_field('s3-subtitle1'); ?></div>
                <div class="divider-wrapper d-flex justify-content-start"><div class="divider"></div></div>
                <h2 class="mb-4"><?php the_field('s3-title1'); ?></h2>
                <p><?php the_field('s3-body1'); ?></p>
            </div>
        </div>
        <div class="row diagnostic-row-2 d-flex justify-content-center">
            <div class="col-xl-4 d-flex align-items-center wow fadeInUp">
                <div class="col-inner text-center text-xl-right">
                    <div class="sub-text-2 mb-5"><?php the_field('s3-subtitle2'); ?></div>
                    <div class="divider-wrapper d-flex justify-content-start"><div class="divider"></div></div>
                    <h2 class="mb-4"><?php the_field('s3-title2'); ?></h2>
                    <p><?php the_field('s3-body2'); ?></p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInUp text-center text-xl-right">
                <img src="<?php the_field('s3-img2'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section id="digital">
    <div id="clutch-digital" style="position: absolute; margin-top: -7em"></div>
    <div class="title-bar digital">
        <div class="title-bar-text">Clutch DIGITAL:</div>
    </div>
    <div class="container-fluid digital-container">
        <div class="digital-row row">
            <div class="col-xl-4 offset-xl-2 d-flex align-items-center wow fadeInUp">
                <div class="col-inner text-center text-xl-right">
                    <div class="icon-small mb-3 text-center text-xl-right"><img src="<?php the_field('s4-icon'); ?>" alt=""></div>
                    <div class="sub-text-2 mb-5"><?php the_field('s4-subtitle'); ?></div>
                    <div class="divider-wrapper d-flex justify-content-start"><div class="divider"></div></div>
                    <h2 class="mb-4"><?php the_field('s4-title'); ?></h2>
                    <p><?php the_field('s4-body'); ?></p>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp text-center text-xl-right">
                <img src="/wp-content/themes/clutch/img/employer-img-4.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/template-parts/cta') ?>
<?php get_footer(); ?>
