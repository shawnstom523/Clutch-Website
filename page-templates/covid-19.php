<?php
   /*
    Template Name: Covid-19
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="page-header" class="covid-header">
    <div class="container-fluid header-inner mx-0">
        <div class="row">
            <div class="col-md-8">
                <div class="sub-text-2"><?php the_field('page_title'); ?></div>
                <div class="page-title"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section id="covid-intro" class="pt-5">
    <div class="container px-5 mx-0">
        <div class="row mx-0 d-flex justify-content-center">
            <div class="col-md-5 px-md-2 px-0 text-md-right text-center d-flex align-items-center wow fadeInUp">
                <div class="col-inner">
                <div class="sub-text-2 mb-5">leading the way</div>
                <div class="divider-wrapper d-flex justify-content-end"><div class="divider-right"></div></div>
                <h2 class="mb-4"><span>Advanced. Accurate. Secure.</span><br> Delivered directly to you.</h2>
                <p>While it can be quite difficult to navigate the changing landscape of COVID-19 testing and diagnosis, <strong>Clutch Diagnostics</strong> is leading the way. We provide individuals, groups, and businesses with innovative, world-class COVID-19 testing and reporting. </p>
                </div>
            </div>
            <div class="col-md-7 px-5 wow fadeInUp">
                <div><img src="https://clutch.health/wp-content/uploads/2020/09/covid-img-1.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 mx-0">
        <div class="row testing-options mx-0">
            <div class="col-md-8 mx-auto">
                <h2>Explore Our <span>COVID-19 Testing Options</span>:</h2>
                <div class="button-wrapper">
                    <div class="button-inner"><a href="#nasal-swab" class="btn">pcr nasal swab</a></div>
                    <div class="button-inner"><a href="#rapid-test" class="btn">rapid blood test</a></div>
                    <div class="button-inner"><a href="#comprehensive-test" class="btn">fully-managed testing</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="nasal-swab">
    <div class="container-fluid px-0 mx-0">
        <div class="row px-0 nasal-swab-row mx-0">
            <div class="col-md-6 nasal-swab-container">
                <div class="hand-img img-wrapper">
                    <img src="https://clutch.health/wp-content/uploads/2020/09/hand-glove.png" alt="">
                </div>
            </div>
            <div class="col-md-5 nasal-swab-container">
                <div class="col-inner">
                <div class="sub-text-2 mb-5">the latest in accuracy</div>
                <div class="divider-wrapper d-flex justify-content-end"><div class="divider-left"></div></div>
                <h2 class="mb-4"><span>PCR Nasal Swab Test:</span><br> The most effective way of
diagnosing COVID-19.</h2>
                <p>The COVID-19 PCR test uses a nasal swab to detect the presence of the underlying virus that causes COVID-19. Staff will be available to observe sample collection and assist with shipping samples to LabCorp for analysis.</p>
                <div class="btn-wrapper">
                    <a href="#contact" class="btn">inquire now</a>
                </div>
                </div>
            </div>
        </div>
        <div class="row kit-options-wrapper mx-0">
            <div class="col-md-10 mx-auto kit-options">
                <div class="kit-option-desc">
                    <h4>
We offer <span>THREE convenient ways of administering PCR swab tests</span> at home or work.</h4>
                </div>
                <div class="kit-option">
                    <div class="option-number"><div>1</div></div>
                    <div class="option-title">On-Site Specimen Collection</div>
                    <p>This option provides you peace of mind knowing that a trained healthcare worker can perform the test in-person at your workplace.</p>
                </div>
                <div class="kit-option">
                    <div class="option-number"><div>2</div></div>
                    <div class="option-title">At-Home Test Kits</div>
                    <p>At-home specimen collectin kits can be shipped directly to your door with step-by-step instructions and a pre-pad label and packaging to return to the lab.</p>
                </div>
                <div class="kit-option">
                    <div class="option-number"><div>3</div></div>
                    <div class="option-title">In-Office Specimen Collection</div>
                    <p>For those who prefer, we can provide quick and easy in-office self-administered specimen collection by one of our professionals at our Clutch office.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="rapid-test">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="col-inner text-xl-right text-center">
                <div class="sub-text-2 mb-5">quick and precise</div>
                <div class="divider-wrapper d-flex justify-content-end"><div class="divider-right"></div></div>
                <h2 class="mb-4"><span>COVISURE™ IgM/IgG Rapid Test</span></h2>
                <p>The <span><strong>Hemosure COVISURE™ COVID-19 IgM/IgG Rapid Test</strong></span> is a lateral flow immunoassay test device for the rapid presumptive qualitative simultaneous detection and differentiation of IgG and IgM antibodies to SARS-CoV-2 in human whole blood, serum, or plasma. It is being offered as outlined in Section IV.D of the FDA’s Policy for Diagnostic Tests for Coronavirus Disease-2019 (May 2020). This test can be self-administered and results ready in about 15 minutes.</p>
                <div class="btn-wrapper">
                    <a href="#contact" class="btn">Order Now</a>
                </div>
                </div>
            </div>
            <div class="col-xl-6 mt-xl-0 mt-5">
                <div class="img-wrapper rapid-test-img">
                    <img src="https://clutch.health/wp-content/uploads/2020/09/covid-box.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="comprehensive-test">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 offset-xl-1 text-center mb-xl-0 mb-5">
                <div class="img-wrapper">
                    <img src="https://clutch.health/wp-content/uploads/2020/09/test-img.png" alt="">
                </div>
            </div>
                <div class="col-xl-5">
                    <div class="col-inner text-xl-right text-center">
                        <div class="sub-text-2 mb-5">comprehensive testing</div>
                        <div class="divider-wrapper d-flex justify-content-end"><div class="divider-left"></div></div>
                        <h2 class="mb-4"><span>Fully Managed Employee Testing</span></h2>
                        <p>Coordinating and administrating a successful testing process is paramount for your business at this time. Understanding the impact and outcome of these tests will help you make accurate and informed decisions about the health and effectiveness of your key workforce. And that’s where we come in. </p>
                        <p>Coordinating and administrating a successful testing process is paramount for your business at this time. Understanding the impact and outcome of these tests will help you make accurate and informed decisions about the health and effectiveness of your key workforce. And that’s where we come in. </p>
                        <div class="btn-wrapper">
                            <a href="#contact" class="btn">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 testing-steps-wrapper">
                <div class="col-11 mx-auto testing-steps">
                    <p class="text-center test-intro w-100">How Our <span>Fully-Managed Employee Testing</span> Program Works:</p>
                    <div class="test-step">
                        <div class="step-icon">
                                <img src="/wp-content/themes/clutch/img/step-1.svg" alt="">
                        </div>
                        <div class="step-title">employee <span>onboarding</span>:</div>
                        <p>Support for the establishment  of COVID-19 testing and related diagnostics services needs.</p>
                    </div>
                    <div class="test-step">
                        <div class="step-icon">
                                <img src="/wp-content/themes/clutch/img/step-2.svg" alt="">
                        </div>
                        <div class="step-title">employee <span>registration</span>:</div>
                        <p>Clutch initiates registration and scheduling for identified employees.</p>
                    </div>
                    <div class="test-step">
                        <div class="step-icon">
                                <img src="/wp-content/themes/clutch/img/step-3.svg" alt="">
                        </div>
                        <div class="step-title">employee <span>testing</span>:</div>
                        <p>Specimen collection performed at our Clutch office or on-site at client location.</p>
                    </div>
                    <div class="test-step">
                        <div class="step-icon">
                                <img src="/wp-content/themes/clutch/img/step-4.svg" alt="">
                        </div>
                        <div class="step-title">employee <span>results review</span>:</div>
                        <p>Results provided to individuals with dashboards to employers to facilitate decision making.</p>
                    </div>
                    <div class="test-step">
                        <div class="step-icon">
                                <img src="/wp-content/themes/clutch/img/step-5.svg" alt="">
                        </div>
                        <div class="step-title">employee <span>procedures</span>:</div>
                        <p>Employers monitor circumstances and implement follow-up testing and monitoring.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="contact-wrapper d-flex align-items-center">
        <div class="container">
            <div class="row mx-0 d-flex justify-content-center">
                <div class="col-md-4 px-5">
                    <div class="col-inner contact-title">
                        <div class="sub-text-2 mb-5">GET MORE INFORMATION</div>
                        <h2>Interested In Our COVID-19 Testing Solutions?</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-wrapper">
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 17, 'title' => false, 'description' => false ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_template_part('/template-parts/cta') ?>
<?php get_footer(); ?>
