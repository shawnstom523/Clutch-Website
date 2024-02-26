<?php
   /*
    Template Name: Difference
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="page-header" class="difference-header">
    <div class="container-fluid header-inner">
        <div class="row">
            <div class="col-md-8">
                <div class="sub-text-2"><?php the_field('page_title'); ?></div>
                <div class="page-title"><?php the_field('header_text'); ?></div>
            </div>
        </div>
    </div>
</section>
<section id="difference-sec-1" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 px-xl-5 px-0 text-xl-right text-center d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                <div class="col-inner">
                    <div class="sub-text-2 mb-5"><?php the_field('s1-subtitle'); ?></div>
                    <div class="divider-wrapper d-flex justify-content-end"><div class="divider"></div></div>
                    <h2 class="mb-4"><?php the_field('s1-title'); ?></h2>
                    <?php the_field('s1-body'); ?>
                </div>
            </div>
            <div class="col-xl-6 px-5 wow fadeInUp" data-wow-delay=".7s">
                <div><img src="<?php the_field('s1-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section id="difference-sec-2" class="content-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-4 order-xl-1 order-2 mr-5 wow fadeInUp">
                <div><img class="img-shadow mt-5 mt-md-0"src="<?php the_field('s2-img'); ?>" alt=""></div>
            </div>
            <div class="col-xl-5 order-1 order-xl-1 mt-5 mt-xl-5 wow fadeInUp">
                <h2 class="mb-3"><?php the_field('s2-title'); ?></h2>
                <h3 class="mb-3"><?php the_field('s2-subtitle'); ?></h3>
                <?php the_field('s2-body'); ?>
            </div>
        </div>
    </div>
</section>
<section id="clutch-team">
    <div id="clutch_team" style="margin-top: -10em; position: absolute;"></div>
    <div class="container">
        <div class="row team-title wow fadeInUp">
            <div class="col">
                <h2>The Clutch Health Team</h2>
            </div>
        </div>
        <div class="row team-grid w-100">
        <?php
            if( have_rows('employee') ):
                while( have_rows('employee') ) : the_row();
                    $img = get_sub_field('img');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    $about = get_sub_field('about');

                    if ( !$img ) {
                        $img = '';
                    }
            ?>
                <div class="col-lg-4 grid-item wow fadeInUp">
                    <div class="team-image"><img src="<?php echo $img; ?>" alt=""></div>
                    <div class="team-name"><?php echo $name; ?></div>
                    <div class="team-title"><?php echo $title; ?></div>
                    <div class="team-description"><p><?php echo $about; ?></p></div>
                </div>
            <?php
                endwhile;
            endif;
        ?>
        <?php get_template_part('/template-parts/cta') ?>
        <?php get_footer(); ?>

            <!--div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Reuben Buckareff</div>
                <div class="team-title">chief executive officer</div>
                <div class="team-description"><p>Reuben has been involved in the healthcare industry for more than 25 years as a serial entrepreneur building several companies including a multinational medical records services business. He has a passion for finding solutions to challenging problems and how using technology can improve the healthcare experience for both providers and consumers. Using his experience working with large national hospital providers, health insurance companies and government entities, Reuben is working on creating an environment for consumers to make better decisions on how to purchase healthcare products and services.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Randy Mire</div>
                <div class="team-title">Pharm.D., President</div>
                <div class="team-description"><p>Randy has been involved in the pharmacy business since 2007. He has obtained multiple pharmacies and other healthcare-related businesses that he leads on a daily basis. Randy is also the CEO and President of Gem Drugs Inc. Using his entrepreneurial work experience and education from Loyola University and Xavier University, Randy is focused on giving the people of Louisiana the highest pharmaceutical care possible. He holds the highest standard of accreditation on both state and national levels. He is a member of the Louisiana Independent Pharmacists Association and the Louisiana Society of Health-System Pharmacists.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Cindy Meyer</div>
                <div class="team-title">Chief operating Officer</div>
                <div class="team-description"><p>Cindy has 20+ years working with the DoD and CDC. She implements strategic business operations, establishes long-term goals and objectives while promoting our culture and vision as a new, innovative and disruptive healthcare technology company in today's market.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Matt Johnston</div>
                <div class="team-title">Chief Financial Officer</div>
                <div class="team-description"><p>Matt has over 10 years of experience as a Certified Public Accountant (CPA). He focuses on operational excellence, exceptional client service, and digital finance capabilities.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Mathew Harrowing</div>
                <div class="team-title">Chief Technology Officer</div>
                <div class="team-description"><p>With over 25 years of experience, Mathew is an IT professional specializing in the application of disruptive technologies to business processes. He is focused on disrupting the healthcare industry by bringing new data-driven insights to the industry, improving customer experience and reducing process and operational costs.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Jason Young</div>
                <div class="team-title">Chief Customer Experience Officer</div>
                <div class="team-description"><p>Jason has 20+ years of experience creating remarkable customer experiences that are memorable and meaningful. He believes empathetically listening to the customer, valuing them,  and meeting their need is the best way to show care and resolve their concerns.</p></div>
            </div>
            <!--div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Andrew Crytser</div>
                <div class="team-title">CHIEF OPERATING OFFICER</div>
                <div class="team-description"><p>Cindy has 20+ years working with the DoD and CDC. She implements strategic business operations, establishes long-term goals and objectives while promoting our culture and vision as a new, innovative and disruptive healthcare technology company in today's market.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Wade Williams</div>
                <div class="team-title">Director of Product</div>
                <div class="team-description"><p>Wade has over 10 years of experience in bringing exciting and innovative products to market. He is focused on maximizing our technology to create the most insightful and valuable features for our users.</p></div>
            </div>
            <div class="col-md-4 grid-item">
                <div class="team-image"><img src="/wp-content/themes/clutch/img/team-placeholder.jpg" alt=""></div>
                <div class="team-name">Jeanne Maylon</div>
                <div class="team-title">Pharm.D., Clinical<br>Pharmacy Manager</div>
                <div class="team-description"><p>Jeanne brings over 25 years of experience in both retail pharmacy operations and management as well as cli
