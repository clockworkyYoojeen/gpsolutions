<?php
// section headers from ACF
$content_king = get_field('section_content_king');
$challenges = get_field('section_challenges');
$solutions = get_field('section_our_solutions'); 
$client_reviews = get_field('section_client_reviews');
$we_cover = get_field('section_we_cover');

$footer_header1 = get_field('footer_header1');
$footer_header2 = get_field('footer_header2');
// section text from ACF
$content_king_text = get_field('section_content_text');
$we_cover_text = get_field('we_cover_content_text');
get_header(); ?>
    <!-- brands  -->
    <section class="brands">
    <h2>brands</h2>
    <div class="brands-images">
    <?php $banners = new WP_Query(array(
            'post_type' => 'company_banner',
            'order' => 'ASC'
        ));
        if($banners->have_posts()){
            while($banners->have_posts()){
                $banners->the_post(); ?>
                <img src="<?php echo get_field('company_banner'); ?>" alt="company" />
        <?php } ?>
    <?php } ?>
    </div>
</section>
    <!-- end brands -->

<!-- content king -->
<section class="content-king">
    <div class="content-king-cont">
        <div class="content-king-image">
            <img src="<?php echo get_template_directory_uri();  ?>/assets/img/content.png" alt="devices">
        </div>
        <div class="content-king-text">
            <h2 class="common-header"><?php echo $content_king; ?></h2>
            <p class="common-text">
                <?php echo $content_king_text; ?>
            </p>
        </div>
    </div>
</section>
<!-- end content king  -->

<!-- chalenges -->
<section class="challenges">
    <h2 class="common-header">
        <?php echo $challenges; ?>
    </h2>
    
    <div class="challenges-cont">
        <?php
        $challenges = new WP_Query(array(
            'post_type' => 'challenge')
        );
        if($challenges->have_posts()){
            while($challenges->have_posts()){
                $challenges->the_post();
                ?>
        <div class="challenge-card">
            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="content monitoring">
            <div class="challenge-header-cont">
                <h3>
                    <?php the_title(); ?> 
                </h3>
            </div>
            <p class="common-text">
                <?php echo get_the_content(); ?>
            </p>
        </div>
            <?php } 
        }
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- end challenges -->

<!-- our solutions -->
<section class="our-solutions">
    <h2 class="common-header">
        <?php echo $solutions; ?>
    </h2>
    <div class="our-solutions-cont">
        <?php $solutions = new WP_Query(array(
            'post_type' => 'solution',
        ));
        if($solutions->have_posts()){
            while($solutions->have_posts()){
                $solutions->the_post(); ?>
        <div class="our-solutions-card">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="content monitoring">
            <div class="solutions-header-cont">
                <h3>
                    <?php echo get_the_title(); ?>
                </h3>
            </div>
            <p class="common-text">
                <?php echo get_the_content(); ?>
            </p>
            <button class="solutions-btn">
                Learn more
            </button>            
        </div>
            <?php }
        }
        wp_reset_postdata(); ?>


    </div>
</section>
<!-- end our solutions -->

<!-- trusted -->
<section class="trusted">
    <h2 class="common-header">
        <?php echo $client_reviews; ?>
    </h2>
<div class="client-slider-cont">
<?php $reviews = new WP_Query(array(
            'post_type' => 'review',
            'order' => 'ASC',
        ));
        if($reviews->have_posts()){
            while($reviews->have_posts()){
                $reviews->the_post(); ?>
    <div class="client-slide-wrapper">
        <div class="client-slide-item">
            <div class="client-slide-row">    
                <div class="client">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="client review">
                    <div class="client-info">
                        <h5><?php echo get_field('client_name'); ?></h5>
                        <p class="client-position"><?php echo get_field('client_position'); ?></p>
                        <p class="client-company"><?php echo get_field('client_company_name'); ?></p>
                    </div>
                </div>
                <div class="client-banner">
                    <h5><?php echo get_field('company_short_name'); ?></h5>
                    <p><?php echo get_field('client_company_description'); ?></p>
                </div>
            </div>
            <p class="client-review">
            <?php echo get_field('client_review'); ?>
            </p>
        </div>
</div>
<?php } ?>
<?php } ?>
</div>
</section>
<!-- end trusted -->

<!-- we-cover  -->
<section class="we-cover">
    <h2 class="common-header">
        <?php echo $we_cover; ?>
    </h2>
    <p class="common-text">
        <?php echo $we_cover_text; ?>
    </p>
</section>
<!-- end we cover -->

<!-- channels -->
<section class="channels">
    <div class="channel-types">
        <h2>Channel Types Supported</h2>
        <div class="channel-types-cont">
        <?php $channel_types = new WP_Query(array(
            'post_type' => 'channel_type',
            'order' => 'ASC'
        ));
        if($channel_types->have_posts()){
            while($channel_types->have_posts()){
                $channel_types->the_post(); ?>
            <div class="channel-item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="channel">
                <p><?php the_title(); ?></p>
            </div>
            <?php }
            wp_reset_postdata(); ?>
        <?php } ?>
        </div>
        <p class="other-types">
            ...and any other types required
        </p>
    </div>
    <div class="key-channels">
        <h2>Key Channels already on our list</h2>
        <div class="key-channels-cont">
            <div class="key-channel-column c1">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel1.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel2.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel3.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel4.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel5.png" alt="channel">
            </div>
            <div class="key-channel-column c2">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel6.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel7.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel8.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel9.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel10.png" alt="channel">
            </div>
            <div class="key-channel-column c3">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel11.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel12.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel13.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel14.png" alt="channel">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/key_channel15.png" alt="channel">
            </div>
        </div>
        <div class="button-cont">
            <button>See more channels</button>
        </div>
    </div>
</section>
<!--end channels -->

<!-- white space -->
<section class="white-space">
    <h2>white space</h2>
</section>
<!-- end white space -->

<!-- contact -->
<section class="contact">
    <div class="blue-cover"></div>
    <div class="contact-cont">
        
        <div class="contact-left">
        <?php echo do_shortcode( '[contact-form-7 id="39" title="Untitled"]' ); ?>
        </div>
        <div class="contact-right">
            <div class="get_in">
                <h3><?php echo $footer_header2; ?></h3>
                <p>Fill out the form and schedule a consultation with our experts at the time convenient for you.</p>
                <p>Get an answer in no more than 24 hours.</p>
                <p>Get a consultation and check the viability of your project idea with our experts.</p>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->
<?php
get_footer(); ?>