<?php
   /*
    Template Name: Covid Rapid Test
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section class="logo-bar">


                <div class="clutch-diag-logo">
                    <img src="/wp-content/themes/clutch/img/clutch-diag-logo.svg" alt="">
                </div>

</section>
<section id="covid-header">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2><span class="sub-text">introducing</span><br>COVID-19 Serology Test Available COVISURE™ COVID-19 IgM/IgG Rapid Test</h2>
            </div>
        </div>
    </div>
</section>
<section id="covid-test-intro">
    <div class="contianer-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-6">
                <p>The Hemosure COVISURE™ COVID-19 IgM/IgG Rapid Test is a lateral flow immunoassay test device for the rapid presumptive qualitative simultaneous detection and differentiation of IgG and IgM antibodies to SARS-CoV-2 in human whole blood, serum or plasma. It is being offered as outlined in Section IV.D of the FDA’s Policy for Diagnostic Tests for Coronavirus Disease-2019 (May 2020).</p>
            </div>
        </div>
    </div>
</section>
<section id="covid-test-policy">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 text-center">
                <div class="sub-text">under this policy</div>
                <p>The FDA does not intend to object to the development and distribution by commercial manufacturers, or development and use by laboratories, of serology tests to identify antibodies to SARS-CoV-2, where the test has been validated, notification is provided to FDA, and information along the lines of the following is included in the test reports and instructions for use:</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="test-list-wrapper">
                    <div class="test-list-inner">
                        <ul>
                            <li>This test has not been reviewed by the FDA.</li>
                            <li>Negative results do not rule out SARS-CoV-2 infection, particularly in those who have been in contact with the virus. Follow-up testing with a molecular diagnostic should be considered to rule out infection in these individuals.</li>
                            <li>Results from antibody testing should not be used as the sole basis to diagnose or exclude SARS-CoV-2 infection or to inform infection status</li>
                            <li>Positive results may be due to past or present infection with non-SARS-CoV-2 coronavirus strains, such as coronavirus HKU1, NL63, OC43, or 229E.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-wrapper">
                    <img src="/wp-content/themes/clutch/img/rapid-test-img.png" alt="">
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li><span>Test Type: </span>Rapid Antibody (IgM/IgG)</li>
                        <li><span>Specimen Type: </span>Human whole blood, serum or plasma</li>
                        <li><span>Turnaround Time: </span>Not valid before 15 minutes or after 20 minutes</li>
                        <li><span>FDA Status: </span>EUA pending</li>
                        <li><span>CLIA Complexity: </span>Highly complex</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="rapid-test-form">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <h2>Ordering Information</h2>
                <div class="sub-text-2 mb-5">To Order, please fill out the form below:</div>
                <div class="table">
                    <div class="tr">
                        <h3>Material #</h3>
                        <h3>Description</h3>
                        <h3>Pkg string</h3>
                    </div>
                    <div class="tr">
                        <p>COVIS19</p>
                        <p>COVID-19 Ig M/IgG Rapid Test</p>
                        <p>25ea/bx</p>
                    </div>
                </div>
                <div class="rapid-test-form">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 12, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="related-info">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Related Information</h2>
            </div>
            <div class="col-12">
                <div class="pdf-card-wrapper">
                    <a href="https://clutch.health/wp-content/uploads/2020/09/clutch-health-covisure-commercial-data-sheet.pdf" target="_blank" class="pdf-card">
                        <div >
                            <h3 class="mt-3">Commercial Data Sheet</h3>
                            <div class="pdf-btn">
                                Download PDF
                            </div>
                        </div>
                    </a>
                    <a href="https://clutch.health/wp-content/uploads/2020/09/clutch-health-hemosure-covisure-product-insert.pdf" target="_blank" class="pdf-card">
                        <div >
                            <h3 class="mt-3">Package Insert</h3>
                            <div class="pdf-btn">
                                Download PDF
                            </div>
                        </div>
                    </a>
                    <a href="https://clutch.health/wp-content/uploads/2020/09/clutch-health-covisure-medical-professional-guidance.pdf" target="_blank" class="pdf-card">
                        <div >
                            <h3 class="mt-3">Guidance for Medical Professionals</h3>
                            <div class="pdf-btn">
                                Download PDF
                            </div>
                        </div>
                    </a>
                    <a href="https://clutch.health/wp-content/uploads/2020/09/clutch-health-covisure-patient-guidance.pdf" target="_blank" class="pdf-card">
                        <div >
                            <h3 class="mt-3">Guidance for Patients</h3>
                            <div class="pdf-btn">
                                Download PDF
                            </div>
                        </div>
                    </a>
                    <a href="https://clutch.health/wp-content/uploads/2020/09/clutch-health-covisure-quick-guide.pdf" target="_blank" class="pdf-card">
                        <div >
                            <h3 class="mt-3">Quick Guide</h3>
                            <div class="pdf-btn">
                                Download PDF
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <p>During this extraordinary time, Clutch Diagnostics strives to provide customers with accurate product information but relies on the manufacturer for updates. Please visit the manufacturer's product website for the most current information.</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
