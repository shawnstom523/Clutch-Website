<?php
   /*
    Template Name: Privacy Policy
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="page-header" class="policy-header">
    <div class="container-fluid header-inner">
        <div class="row">
            <div class="col-md-8">
                <div class="sub-text-2"><?php the_field('page_title'); ?></div>
                <div class="page-title"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section id="privacy-policy">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="policy-wrapper">
                    <?php the_field('privacy_policy'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('/template-parts/cta') ?>
<?php get_footer(); ?>
