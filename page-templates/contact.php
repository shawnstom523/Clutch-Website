<?php
   /*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<div class="contact-wrapper d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 px-5">
                <div class="col-inner contact-title">
                    <div class="sub-text-2 mb-5">contact us</div>
                    <h2 class="text-lg-left text-center">Get In Touch To Learn More</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-wrapper">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
