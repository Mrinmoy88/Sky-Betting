<?php 
/*
Template Name: home
*/
get_header();
?>

<!-- **************** MAIN CONTENT START **************** -->

        <!-- ********** Banner START ********** -->
        <section class="banner">
            <div class="bg_img">
                <?php 
                $background_image = get_field('background_image');
                if ($background_image): ?>
                    <img src="<?php echo esc_url($background_image['url']); ?>" width="1920" height="998" alt="<?php echo esc_attr($background_image['alt']); ?>">
                <?php endif; ?>
            </div>

            <div class="container-fluid">
                <div class="row bnr-con align-items-center">
                    <div class="col-md-8">
                        <div class="bnr-txt">
                            <h2><?php the_field('banner_subtitle'); ?></h2>
                            <h1><?php the_field('banner_title'); ?></h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bnr-p">
                            <p><?php the_field('banner_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            $main_image = get_field('main_image');
            if ($main_image): ?>
                <img src="<?php echo esc_url($main_image['url']); ?>" width="619" height="671" alt="<?php echo esc_attr($main_image['alt']); ?>" class="bnr_img">
            <?php endif; ?>

            <?php 
            $shadow_image = get_field('shadow_image');
            if ($shadow_image): ?>
                <img src="<?php echo esc_url($shadow_image['url']); ?>" width="892" height="550" alt="<?php echo esc_attr($shadow_image['alt']); ?>" class="bnr_img_shadow">
            <?php endif; ?>

            <img src="assets/img/bnr_icon1.png" alt class="bnr-icon bnr-icon1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon2.png" alt class="bnr-icon bnr-icon2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon3.png" alt class="bnr-icon bnr-icon3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon4.png" alt class="bnr-icon bnr-icon4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon5.png" alt class="bnr-icon bnr-icon5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon6.png" alt class="bnr-icon bnr-icon6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon9.png" alt class="bnr-icon bnr-icon7">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon8.png" alt class="bnr-icon bnr-icon8">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon12.png" alt class="bnr-icon bnr-icon9">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon10.png" alt class="bnr-icon bnr-icon10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon11.png" alt class="bnr-icon bnr-icon11">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon7.png" alt class="bnr-icon bnr-icon12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon13.png" alt class="bnr-icon bnr-icon13">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon14.png" alt class="bnr-icon bnr-icon14">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon15.png" alt class="bnr-icon bnr-icon15">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr_icon16.png" alt class="bnr-icon bnr-icon16">
        </section>
        <!-- ********** Banner End ********** -->

        <!-- ********** Popular Sec START ********** -->
        <section class="popular-sec">
            <div class="popular-top">
                <div class="container-fluid">
                    <div class="row g-4 justify-content-center">
                    <?php if( have_rows('features') ): ?>
            <?php while( have_rows('features') ): the_row(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="popu-top-box">
                        <div class="popu-top-box-con">
                            <?php $icon_svg = get_sub_field('icon_svg'); ?>
                            <?php if ($icon_svg): ?>
                                <div class="icon-container">
                                    <?php echo $icon_svg; // Output the SVG code ?>
                                </div>
                            <?php endif; ?>
                            <div class="popu-top-txt">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php 
                        $image = get_sub_field('image'); 
                        if ($image): 
                            $image_url = $image['url']; 
                        ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="" class="popu_shape1">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="popular-btm t-padd">
    <div class="container-fluid">
        <div class="row g-4 justify-content-center">
            <div class="col-12">
                <div class="heading head-text-center">
                    <h2>Online Betting Id Promotions and Offers</h2>
                    <p>Explore a range of betting bonuses, from welcome and first deposit offers to free bets and enhanced odds. Enjoy exclusive event-based bonuses for major cricket events like IPL, ICC World Cup, T-20, and more for added excitement.</p>
                    <div class="best-cricket-btn d-flex justify-content-center">
                    <a href="<?php the_field('claim_bonus_link'); ?>" target="_blank" class="main-btn">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z"
                                        stroke="#171717" stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                Claim Bonus
                </span>
            </a>
                </div>
            </div>
                </div>
            <?php
            // Query for 'popular_post' post type
            $args = array(
                'category_name' => 'most-popular-tips',
                'posts_per_page' => 3, // Number of posts to display
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="popular-btm-box">
                            <div class="popular-btm-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="popular-btm-txt">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php echo get_field('title'); ?></h3>
                                </a>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="popu-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                        <path d="M9.91667 9.91675H24.0833M24.0833 9.91675V24.0834M24.0833 9.91675L9.91667 24.0834" stroke="#999999" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found</p>';
            endif;
            ?>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular_shape4.png" width="87" height="85" alt="" class="popu_shape4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular_shape5.png" width="205" height="237" alt="" class="popu_shape5">
</div>


        </section>
        <!-- ********** Popular Sec End ********** -->

        <!-- ********** Best Cricket Sec START ********** -->
        <section class="best-cricket-sec b-padd">
            <div class="container-fluid">
                <div class="heading head-text-center">
                    <h2><?php the_field('section_heading'); ?></h2>
                    <p><?php the_field('section_subheading'); ?></p>
                </div>

                <div class="best-cricket-con">
                    <div class="ball ball1">
                    <?php $ball_image1 = get_field('ball1_image'); ?>
                        <img src="<?php echo $ball_image1['url']; ?>" width="285" height="285" alt="" class="ball-img">
                        <div class="ball-con">
                            <div class="ball-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="44" height="44"
                                                viewBox="0 0 44 44" fill="none">
                                                <path
                                                    d="M34.8333 38.5V34.8333C34.8333 32.8884 34.0607 31.0232 32.6854 29.6479C31.3102 28.2726 29.4449 27.5 27.5 27.5H16.5C14.5551 27.5 12.6898 28.2726 11.3145 29.6479C9.93927 31.0232 9.16666 32.8884 9.16666 34.8333V38.5M29.3333 12.8333C29.3333 16.8834 26.0501 20.1667 22 20.1667C17.9499 20.1667 14.6667 16.8834 14.6667 12.8333C14.6667 8.78325 17.9499 5.5 22 5.5C26.0501 5.5 29.3333 8.78325 29.3333 12.8333Z"
                                                    stroke="black" stroke-width="3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                            </div>
                            <h2><?php the_field('registered_users_text'); ?></h2>
                            <p>Registered users</p>
                        </div>
                    </div>
                    <div class="ball ball2">
                    <?php $ball_image2 = get_field('ball2_image'); ?>
                        <img src="<?php echo $ball_image2['url']; ?>" width="285" height="285" alt="" class="ball-img">
                        <div class="ball-con">
                            <div class="ball-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="44" height="44"
                                                viewBox="0 0 44 44" fill="none">
                                                <path
                                                    d="M34.8333 12.8333V7.33333C34.8333 6.8471 34.6401 6.38079 34.2963 6.03697C33.9525 5.69315 33.4862 5.5 32.9999 5.5H9.16661C8.19415 5.5 7.26151 5.88631 6.57388 6.57394C5.88625 7.26158 5.49994 8.19421 5.49994 9.16667M5.49994 9.16667C5.49994 10.1391 5.88625 11.0718 6.57388 11.7594C7.26151 12.447 8.19415 12.8333 9.16661 12.8333H36.6666C37.1528 12.8333 37.6192 13.0265 37.963 13.3703C38.3068 13.7141 38.4999 14.1804 38.4999 14.6667V22M5.49994 9.16667V34.8333C5.49994 35.8058 5.88625 36.7384 6.57388 37.4261C7.26151 38.1137 8.19415 38.5 9.16661 38.5H36.6666C37.1528 38.5 37.6192 38.3068 37.963 37.963C38.3068 37.6192 38.4999 37.1529 38.4999 36.6667V29.3333M38.4999 22H32.9999C32.0275 22 31.0948 22.3863 30.4072 23.0739C29.7196 23.7616 29.3333 24.6942 29.3333 25.6667C29.3333 26.6391 29.7196 27.5718 30.4072 28.2594C31.0948 28.947 32.0275 29.3333 32.9999 29.3333H38.4999M38.4999 22C38.9862 22 39.4525 22.1932 39.7963 22.537C40.1401 22.8808 40.3333 23.3471 40.3333 23.8333V27.5C40.3333 27.9862 40.1401 28.4525 39.7963 28.7964C39.4525 29.1402 38.9862 29.3333 38.4999 29.3333"
                                                    stroke="black" stroke-width="3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                            </div>
                            <h2><?php the_field('withdrawn_text'); ?></h2>
                            <p>Withdrawn each month</p>
                        </div>
                    </div>
                    <div class="ball ball3">
                    <?php $ball_image3 = get_field('ball3_image'); ?>
                        <img src="<?php echo $ball_image3['url']; ?>" width="285" height="285" alt="" class="ball-img">
                        <div class="ball-con">
                            <div class="ball-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="44" height="44"
                                                viewBox="0 0 44 44" fill="none">
                                                <path
                                                    d="M3.66629 38.5C3.6665 36.1918 4.21151 33.9162 5.25699 31.8583C6.30248 29.8004 7.81891 28.0183 9.68297 26.657C11.547 25.2957 13.7061 24.3935 15.9845 24.0239C18.263 23.6543 20.5965 23.8277 22.7953 24.53M35.7496 26.2167L35.0163 27.8667M30.983 38.1333L30.2496 39.7833M39.783 35.75L38.133 35.0167M27.8663 30.9833L26.2163 30.25M39.783 30.25L38.133 30.9833M27.8663 35.0167L26.2163 35.75M35.7496 39.7833L35.0163 38.1333M30.983 27.8667L30.2496 26.2167M27.4996 14.6667C27.4996 19.7293 23.3956 23.8333 18.333 23.8333C13.2703 23.8333 9.16629 19.7293 9.16629 14.6667C9.16629 9.60406 13.2703 5.5 18.333 5.5C23.3956 5.5 27.4996 9.60406 27.4996 14.6667ZM38.4996 33C38.4996 36.0376 36.0372 38.5 32.9996 38.5C29.9621 38.5 27.4996 36.0376 27.4996 33C27.4996 29.9624 29.9621 27.5 32.9996 27.5C36.0372 27.5 38.4996 29.9624 38.4996 33Z"
                                                    stroke="black" stroke-width="3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                            </div>
                            <h2><?php the_field('daily_active_users_text'); ?></h2>
                            <p>Daily active users</p>
                        </div>
                    </div>
                    <div class="best-cricket-img">
                    <?php $main_image1 = get_field('main_image1'); ?>
                        <img src="<?php echo $main_image1['url']; ?>" width="1430" height="352" alt="" class="best_cricket_img1">
                        <?php $main_image2 = get_field('small_image'); ?>
                        <img src="<?php echo $main_image2['url']; ?>" width="433" height="61" alt="" class="best_cricket_img2">
                    </div>
                    <div class="ground-shadow"></div>
                </div>

                <div class="best-cricket-btn d-flex">
                    <a href="https://api.whatsapp.com/send?phone=917384354549" target="_blank" class="main-btn">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z"
                                                stroke="#171717" stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        Get code 
                        </span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=917384354549" target="_blank" class="main-btn main-btn3">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="38" height="38" viewBox="0 0 38 38"
                                            fill="none">
                                            <path
                                                d="M3.8537 34.2817L5.98645 26.4957C4.6707 24.2172 3.97878 21.6317 3.97957 18.9835C3.98353 10.6987 10.7254 3.9585 19.0109 3.9585C23.0318 3.96008 26.8049 5.5252 29.643 8.36491C32.4804 11.2054 34.0431 14.9801 34.0415 18.9954C34.0384 27.2802 27.2949 34.0212 19.0109 34.0212H19.0046C16.4895 34.0205 14.0171 33.3895 11.8218 32.1917L3.8537 34.2817Z"
                                                fill="white"></path>
                                            <path
                                                d="M3.85374 34.6774C3.74924 34.6774 3.64791 34.6362 3.5727 34.5602C3.47374 34.4597 3.43495 34.3132 3.47216 34.1778L5.56136 26.5493C4.2662 24.2488 3.58299 21.6362 3.58457 18.9842C3.58774 10.4801 10.5077 3.5625 19.011 3.5625C23.1356 3.56408 27.0108 5.17038 29.9233 8.08529C32.8359 11.001 34.439 14.8754 34.4374 18.9952C34.4342 27.4985 27.5135 34.4169 19.011 34.4169C16.4864 34.4161 13.9887 33.7931 11.772 32.6143L3.95428 34.6639C3.92103 34.6734 3.88778 34.6774 3.85374 34.6774Z"
                                                fill="white"></path>
                                            <path
                                                d="M19.0109 3.95817C23.0318 3.95975 26.8049 5.52488 29.643 8.36459C32.4804 11.2051 34.0431 14.9798 34.0415 18.9951C34.0384 27.2799 27.2949 34.0209 19.0109 34.0209H19.0046C16.4895 34.0201 14.0171 33.3892 11.8218 32.1914L3.8537 34.2814L5.98645 26.4953C4.6707 24.2169 3.97878 21.6313 3.97957 18.9832C3.98353 10.6984 10.7254 3.95817 19.0109 3.95817ZM19.0109 3.1665C10.2899 3.1665 3.19187 10.2614 3.18791 18.9832C3.18712 21.6488 3.86003 24.2755 5.1362 26.6006L3.08974 34.0732C3.01532 34.3463 3.09132 34.6376 3.29082 34.8387C3.44124 34.9907 3.6447 35.0738 3.8537 35.0738C3.92099 35.0738 3.98828 35.0651 4.05478 35.0477L11.7237 33.0369C13.9625 34.199 16.4721 34.8126 19.0046 34.8134C27.7319 34.8134 34.83 27.7177 34.834 18.9959C34.8356 14.7692 33.1913 10.795 30.2043 7.80567C27.2158 4.81555 23.2408 3.16809 19.0109 3.1665Z"
                                                fill="#CFD8DC"></path>
                                            <path
                                                d="M27.8476 10.1588C25.4884 7.79808 22.3526 6.49737 19.0149 6.49658C12.1243 6.49658 6.52007 12.0984 6.51691 18.9843C6.51612 21.3443 7.17637 23.6417 8.4272 25.6312L8.72487 26.1038L7.46216 30.7121L12.1908 29.4723L12.6476 29.7431C14.565 30.8815 16.7642 31.4832 19.0062 31.484H19.011C25.8969 31.484 31.5011 25.8813 31.5035 18.9946C31.5043 15.6577 30.2067 12.5196 27.8476 10.1588Z"
                                                fill="#40C351"></path>
                                            <path fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M15.2537 12.7023C14.9727 12.0769 14.6766 12.0642 14.4082 12.0532C14.1889 12.0437 13.9388 12.0444 13.6886 12.0444C13.4384 12.0444 13.0315 12.1387 12.6872 12.5147C12.3428 12.8907 11.3722 13.7988 11.3722 15.6465C11.3722 17.4943 12.718 19.2803 12.9057 19.5304C13.0933 19.7806 15.5039 23.6938 19.3213 25.1996C22.4935 26.4504 23.1395 26.2018 23.8283 26.1393C24.517 26.0767 26.0505 25.2312 26.3632 24.3541C26.6759 23.4769 26.6759 22.7256 26.5825 22.5689C26.4883 22.4121 26.2381 22.3187 25.8629 22.1303C25.4876 21.9419 23.6407 21.0338 23.2963 20.9087C22.9519 20.7837 22.7017 20.7211 22.4508 21.0972C22.2006 21.4724 21.481 22.3187 21.2617 22.5689C21.0424 22.8198 20.8231 22.8515 20.4479 22.6631C20.0726 22.4747 18.8629 22.0788 17.4277 20.7995C16.3114 19.8044 15.5577 18.5749 15.3384 18.1989C15.1192 17.8236 15.3147 17.6202 15.5031 17.4325C15.6717 17.2639 15.8784 16.9939 16.0668 16.7747C16.2544 16.5554 16.3169 16.3986 16.442 16.1485C16.5671 15.8975 16.5046 15.6782 16.4104 15.4906C16.3177 15.3022 15.5878 13.4449 15.2537 12.7023Z"
                                                fill="white"></path>
                                        </svg>
                            WhatsApp Now
                        </span>
                    </a>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape1.png" alt
                                class="bc_shape bc_shape1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape2.png" alt
                                class="bc_shape bc_shape2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape3.png" alt
                                class="bc_shape bc_shape3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape4.png" alt
                                class="bc_shape bc_shape4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape5.png" alt
                                class="bc_shape bc_shape5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape6.png" alt
                                class="bc_shape bc_shape6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape7.png" alt
                                class="bc_shape bc_shape7">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape8.png" alt
                                class="bc_shape bc_shape8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bc_shape9.png" alt
                                class="bc_shape bc_shape9">
                <!-- Add other shape images here -->
            </div>
        </section>
        <!-- ********** Best Cricket Sec END ********** -->

        <!-- ********** Cricket Betting Sec START ********** -->
        <?php
        // Get the ACF field values
        $background_img = get_field('sec_background_image');
        $heading_text = get_field('heading_text');
        $description_text = get_field('description_text');
        $join_us_url = get_field('join_us_button_url');
        $whatsapp_now_url = get_field('whatsapp_now_button_url');
        $betting_img1 = get_field('betting_image_1');
        $betting_img2 = get_field('betting_image_2');
        ?>

        <section class="betting_sec">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center betting_row">
                    <?php if ($background_img): ?>
                        <div class="bg_img">
                            <img src="<?php echo esc_url($background_img['url']); ?>" width="<?php echo esc_attr($background_img['width']); ?>" height="<?php echo esc_attr($background_img['height']); ?>" alt="">
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-5">
                        <div class="heading">
                            <h2><?php echo esc_html($heading_text); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="betting_txt">
                            <p><?php echo wp_kses_post($description_text); ?></p>
                            <div class="menu-btn d-flex">
                            
                                    <a href="<?php echo esc_url($join_us_url); ?>" target="_blank" class="main-btn main-btn1">
                                        <span>
                                            <!-- SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z" stroke="#171717" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Join Us
                                        </span>
                                    </a>
                            
                            
                                    <a href="<?php echo esc_url($whatsapp_now_url); ?>" target="_blank" class="main-btn main-btn2">
                                        <span>
                                            <!-- SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                                <path d="M3.8537 34.2817L5.98645 26.4957C4.6707 24.2172 3.97878 21.6317 3.97957 18.9835C3.98353 10.6987 10.7254 3.9585 19.0109 3.9585C23.0318 3.96008 26.8049 5.5252 29.643 8.36491C32.4804 11.2054 34.0431 14.9801 34.0415 18.9954C34.0384 27.2802 27.2949 34.0212 19.0109 34.0212H19.0046C16.4895 34.0205 14.0171 33.3895 11.8218 32.1917L3.8537 34.2817Z" fill="white"></path>
                                                <path d="M3.85374 34.6774C3.74924 34.6774 3.64791 34.6362 3.5727 34.5602C3.47374 34.4597 3.43495 34.3132 3.47216 34.1778L5.56136 26.5493C4.2662 24.2488 3.58299 21.6362 3.58457 18.9842C3.58774 10.4801 10.5077 3.5625 19.011 3.5625C23.1356 3.56408 27.0108 5.17038 29.9233 8.08529C32.8359 11.001 34.439 14.8754 34.4374 18.9952C34.4342 27.4985 27.5135 34.4169 19.011 34.4169C16.4864 34.4161 13.9887 33.7931 11.772 32.6143L3.95428 34.6639C3.92103 34.6734 3.88778 34.6774 3.85374 34.6774Z" fill="white"></path>
                                                <path d="M19.0109 3.95817C23.0318 3.95975 26.8049 5.52488 29.643 8.36459C32.4804 11.2051 34.0431 14.9798 34.0415 18.9951C34.0384 27.2799 27.2949 34.0209 19.0109 34.0209H19.0046C16.4895 34.0201 14.0171 33.3892 11.8218 32.1914L3.8537 34.2814L5.98645 26.4953C4.6707 24.2169 3.97878 21.6313 3.97957 18.9832C3.98353 10.6984 10.7254 3.95817 19.0109 3.95817ZM19.0109 3.1665C10.2899 3.1665 3.19187 10.2614 3.18791 18.9832C3.18712 21.6488 3.86003 24.2755 5.1362 26.6006L3.08974 34.0732C3.01532 34.3463 3.09132 34.6376 3.29082 34.8387C3.44124 34.9907 3.6447 35.0738 3.8537 35.0738C3.92099 35.0738 3.98828 35.0651 4.05478 35.0477L11.7237 33.0369C13.9625 34.199 16.4721 34.8126 19.0046 34.8134C27.7319 34.8134 34.83 27.7177 34.834 18.9959C34.8356 14.7692 33.1913 10.795 30.2043 7.80567C27.2158 4.81555 23.2408 3.16809 19.0109 3.1665Z" fill="#CFD8DC"></path>
                                                <path d="M27.8476 10.1588C25.4884 7.79808 22.3526 6.49737 19.0149 6.49658C12.1243 6.49658 6.52007 12.0984 6.51691 18.9843C6.51612 21.3443 7.17637 23.6417 8.4272 25.6312L8.72487 26.1038L7.46216 30.7121L12.1908 29.4723L12.6476 29.7431C14.565 30.8815 16.7642 31.4832 19.0062 31.484H19.011C25.8969 31.484 31.5011 25.8813 31.5035 18.9946C31.5043 15.6577 30.2067 12.5196 27.8476 10.1588Z" fill="#40C351"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2537 12.7023C14.9727 12.0769 14.6766 12.0642 14.4082 12.0532C14.1889 12.0437 13.9388 12.0444 13.6886 12.0444C13.4384 12.0444 13.0315 12.1387 12.6872 12.5147C12.3428 12.8907 11.3722 13.7988 11.3722 15.6465C11.3722 17.4943 12.718 19.2803 12.9057 19.5304C13.0933 19.7806 15.5039 23.6938 19.3213 25.1996C22.4935 26.4504 23.1395 26.2018 23.8283 26.1393C24.517 26.0767 26.0505 25.2312 26.3632 24.3541C26.6759 23.4769 26.6759 22.7256 26.5825 22.5689C26.4883 22.4121 26.2381 22.3187 25.8629 22.1303C25.4876 21.9419 23.6407 21.0338 23.2963 20.9087C22.9519 20.7837 22.7017 20.7211 22.4508 21.0972C22.2006 21.4724 21.481 22.3187 21.2617 22.5689C21.0424 22.8198 20.8231 22.8515 20.4479 22.6631C20.0726 22.4747 18.8629 22.0788 17.4277 20.7995C16.3114 19.8044 15.5577 18.5749 15.3384 18.1989C15.1192 17.8236 15.3147 17.6202 15.5031 17.4325C15.6717 17.2639 15.8784 16.9939 16.0668 16.7747C16.2544 16.5554 16.3169 16.3986 16.442 16.1485C16.5671 15.8975 16.5046 15.6782 16.4104 15.4906C16.3177 15.3022 15.5878 13.4449 15.2537 12.7023Z" fill="white"></path>
                                            </svg>
                                            WhatsApp Now
                                        </span>
                                    </a>
                            
                            </div>
                        </div>
                    </div>
                    <?php if ($betting_img1): ?>
                        <img src="<?php echo esc_url($betting_img1['url']); ?>" width="<?php echo esc_attr($betting_img1['width']); ?>" height="<?php echo esc_attr($betting_img1['height']); ?>" alt="" class="betting_img1">
                    <?php endif; ?>
                    <?php if ($betting_img2): ?>
                        <img src="<?php echo esc_url($betting_img2['url']); ?>" width="<?php echo esc_attr($betting_img2['width']); ?>" height="<?php echo esc_attr($betting_img2['height']); ?>" alt="" class="betting_img2">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ********** Cricket Betting Sec END ********** -->

        <!-- ********** Benefit Sec START ********** -->
         <?php
        $join_us_url = get_field('join_us_button_url');
        $whatsapp_now_url = get_field('whatsapp_now_button_url');
        ?>
        <section class="benefit_sec b-padd">
            <div class="bg_img">
            <?php $benefit_background_image = get_field('benefit_background_image'); ?>
                <img src="<?php echo esc_url($benefit_background_image['url']); ?>" width="1920" height="1110" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="heading head-text-center">
                            <h2><?php the_field('benefits_heading'); ?></h2>
                            <p><?php the_field('benefits_description'); ?></p>
                        </div>
                    </div>

                    <?php if( have_rows('benefits_repeater') ): ?>
                        <?php while( have_rows('benefits_repeater') ): the_row(); ?>
                            <div class="col-lg-3 col-sm-6 col-12 p-0 benefit_col">
                                <div class="benefit_box text-center">
                                    <?php echo get_sub_field('benefit_icon'); // This can be an SVG or an image ?>
                                    <a href="#"><h3><?php the_sub_field('benefit_title'); ?></h3></a>
                                    <p><?php the_sub_field('benefit_description'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="menu-btn d-flex justify-content-center">
                    <a href="<?php echo esc_url($join_us_url); ?>" target="_blank" class="main-btn main-btn1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z" stroke="#171717" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Join Us
                        </span>
                    </a>
                    <a href="<?php echo esc_url($whatsapp_now_url); ?>" target="_blank" class="main-btn main-btn2">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="38" height="38"
                                                    viewBox="0 0 38 38" fill="none">
                                                    <path
                                                        d="M3.8537 34.2817L5.98645 26.4957C4.6707 24.2172 3.97878 21.6317 3.97957 18.9835C3.98353 10.6987 10.7254 3.9585 19.0109 3.9585C23.0318 3.96008 26.8049 5.5252 29.643 8.36491C32.4804 11.2054 34.0431 14.9801 34.0415 18.9954C34.0384 27.2802 27.2949 34.0212 19.0109 34.0212H19.0046C16.4895 34.0205 14.0171 33.3895 11.8218 32.1917L3.8537 34.2817Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M3.85374 34.6774C3.74924 34.6774 3.64791 34.6362 3.5727 34.5602C3.47374 34.4597 3.43495 34.3132 3.47216 34.1778L5.56136 26.5493C4.2662 24.2488 3.58299 21.6362 3.58457 18.9842C3.58774 10.4801 10.5077 3.5625 19.011 3.5625C23.1356 3.56408 27.0108 5.17038 29.9233 8.08529C32.8359 11.001 34.439 14.8754 34.4374 18.9952C34.4342 27.4985 27.5135 34.4169 19.011 34.4169C16.4864 34.4161 13.9887 33.7931 11.772 32.6143L3.95428 34.6639C3.92103 34.6734 3.88778 34.6774 3.85374 34.6774Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M19.0109 3.95817C23.0318 3.95975 26.8049 5.52488 29.643 8.36459C32.4804 11.2051 34.0431 14.9798 34.0415 18.9951C34.0384 27.2799 27.2949 34.0209 19.0109 34.0209H19.0046C16.4895 34.0201 14.0171 33.3892 11.8218 32.1914L3.8537 34.2814L5.98645 26.4953C4.6707 24.2169 3.97878 21.6313 3.97957 18.9832C3.98353 10.6984 10.7254 3.95817 19.0109 3.95817ZM19.0109 3.1665C10.2899 3.1665 3.19187 10.2614 3.18791 18.9832C3.18712 21.6488 3.86003 24.2755 5.1362 26.6006L3.08974 34.0732C3.01532 34.3463 3.09132 34.6376 3.29082 34.8387C3.44124 34.9907 3.6447 35.0738 3.8537 35.0738C3.92099 35.0738 3.98828 35.0651 4.05478 35.0477L11.7237 33.0369C13.9625 34.199 16.4721 34.8126 19.0046 34.8134C27.7319 34.8134 34.83 27.7177 34.834 18.9959C34.8356 14.7692 33.1913 10.795 30.2043 7.80567C27.2158 4.81555 23.2408 3.16809 19.0109 3.1665Z"
                                                        fill="#CFD8DC"></path>
                                                    <path
                                                        d="M27.8476 10.1588C25.4884 7.79808 22.3526 6.49737 19.0149 6.49658C12.1243 6.49658 6.52007 12.0984 6.51691 18.9843C6.51612 21.3443 7.17637 23.6417 8.4272 25.6312L8.72487 26.1038L7.46216 30.7121L12.1908 29.4723L12.6476 29.7431C14.565 30.8815 16.7642 31.4832 19.0062 31.484H19.011C25.8969 31.484 31.5011 25.8813 31.5035 18.9946C31.5043 15.6577 30.2067 12.5196 27.8476 10.1588Z"
                                                        fill="#40C351"></path>
                                                    <path fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M15.2537 12.7023C14.9727 12.0769 14.6766 12.0642 14.4082 12.0532C14.1889 12.0437 13.9388 12.0444 13.6886 12.0444C13.4384 12.0444 13.0315 12.1387 12.6872 12.5147C12.3428 12.8907 11.3722 13.7988 11.3722 15.6465C11.3722 17.4943 12.718 19.2803 12.9057 19.5304C13.0933 19.7806 15.5039 23.6938 19.3213 25.1996C22.4935 26.4504 23.1395 26.2018 23.8283 26.1393C24.517 26.0767 26.0505 25.2312 26.3632 24.3541C26.6759 23.4769 26.6759 22.7256 26.5825 22.5689C26.4883 22.4121 26.2381 22.3187 25.8629 22.1303C25.4876 21.9419 23.6407 21.0338 23.2963 20.9087C22.9519 20.7837 22.7017 20.7211 22.4508 21.0972C22.2006 21.4724 21.481 22.3187 21.2617 22.5689C21.0424 22.8198 20.8231 22.8515 20.4479 22.6631C20.0726 22.4747 18.8629 22.0788 17.4277 20.7995C16.3114 19.8044 15.5577 18.5749 15.3384 18.1989C15.1192 17.8236 15.3147 17.6202 15.5031 17.4325C15.6717 17.2639 15.8784 16.9939 16.0668 16.7747C16.2544 16.5554 16.3169 16.3986 16.442 16.1485C16.5671 15.8975 16.5046 15.6782 16.4104 15.4906C16.3177 15.3022 15.5878 13.4449 15.2537 12.7023Z"
                                                        fill="white"></path>
                                                </svg>
                            WhatsApp Now
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- ********** Benefit Sec END ********** -->

        <!-- ********** Play & Win Sec START ********** -->
        <section class="win_sec c-padd">
            <div class="container-fluid">
                <div class="heading head-text-center">
                    <h2><?php the_field('p_section_heading'); ?></h2>
                    <p><?php the_field('p_section_description'); ?></p>
                </div>
                <div class="row">
                    <?php if( have_rows('win_boxes') ): ?>
                        <?php while ( have_rows('win_boxes') ) : the_row(); ?>
                            <div class="col-lg-6 col-sm-6 col-12 p-0 o-1">
                                <div class="win_box <?php the_sub_field('box_class'); ?>">
                                    <?php $icon_svg = get_sub_field('icon_svg'); ?>
                                    <div class="icon-svg"><?php echo $icon_svg; ?></div>
                                    <a href="<?php the_sub_field('box_link'); ?>">
                                        <h3><?php the_sub_field('box_title'); ?></h3>
                                    </a>
                                    <p><?php the_sub_field('box_description'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="col-lg-6 col-sm-6 col-12 p-0 o-4">
                        <div class="win_btn">
                            <a href="<?php the_field('join_us_link'); ?>" target="_blank" class="main-btn">
                                <span>
                                    <?php $join_us_icon = get_field('join_us_icon'); ?>
                                    <div class="icon-svg"><?php echo $join_us_icon; ?></div>
                                    <?php the_field('join_us_text'); ?>
                                </span>
                            </a>
                            <a href="<?php the_field('whatsapp_link'); ?>" target="_blank" class="main-btn main-btn2">
                                <span>
                                    <?php $whatsapp_icon = get_field('whatsapp_icon'); ?>
                                    <div class="icon-svg"><?php echo $whatsapp_icon; ?></div>
                                    <?php the_field('whatsapp_text'); ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 p-0 o-2">
                        <div class="win_box win_box2">
                            <?php $box2_svg = get_field('box2_svg'); ?>
                            <div class="icon-svg"><?php echo $box2_svg; ?></div>
                            <a href="<?php the_field('box2_link'); ?>">
                                <h3><?php the_field('box2_title'); ?></h3>
                            </a>
                            <p><?php the_field('box2_description'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12 p-0 o-3">
                        <div class="win_box win_box3">
                            <?php $box3_svg = get_field('box3_svg'); ?>
                            <div class="icon-svg"><?php echo $box3_svg; ?></div>
                            <a href="<?php the_field('box3_link'); ?>">
                                <h3><?php the_field('box3_title'); ?></h3>
                            </a>
                            <p><?php the_field('box3_description'); ?></p>
                        </div>
                    </div>
                    <img src="<?php the_field('win_img'); ?>" width="536" height="719" alt="" class="win_img">
                </div>
            </div>

            <img src="<?php the_field('win_shape1'); ?>" alt="" class="win_shape1">
            <img src="<?php the_field('win_shape2'); ?>" alt="" class="win_shape2">
            <img src="<?php the_field('win_shape3'); ?>" alt="" class="win_shape3">
            <img src="<?php the_field('win_shape4'); ?>" alt="" class="win_shape4">
        </section>
        <!-- ********** Play & Win Sec END ********** -->

        <!-- ********** Cricket Betting Sec START ********** -->
        <section class="betting_sec betting_sec_one b-padd">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center betting_row">
                    <div class="bg_img">
                        <?php 
                        $c_background_image = get_field('c_background_image'); 
                        if ($c_background_image): ?>
                            <img src="<?php echo esc_url($c_background_image['url']); ?>" width="1688" height="317" alt>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-5">
                        <div class="heading">
                            <h2><?php the_field('c_section_heading'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="betting_txt">
                            <p><?php the_field('c_section_description'); ?></p>
                            <div class="menu-btn d-flex">
                                <a href="<?php the_field('join_us_link'); ?>" target="_blank" class="main-btn main-btn1">
                                    <span>
                                        <?php 
                                        $join_us_icon = get_field('join_us_icon'); 
                                        if ($join_us_icon): 
                                            echo $join_us_icon; 
                                        endif; 
                                        ?>
                                        <?php the_field('join_us_text'); ?>
                                    </span>
                                </a>
                                <a href="<?php the_field('whatsapp_link'); ?>" target="_blank" class="main-btn main-btn2">
                                    <span>
                                        <?php 
                                        $whatsapp_icon = get_field('whatsapp_icon'); 
                                        if ($whatsapp_icon): 
                                            echo $whatsapp_icon; 
                                        endif; 
                                        ?>
                                        <?php the_field('whatsapp_text'); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $betting_image_1 = get_field('c_betting_image_1'); 
                    if ($betting_image_1): ?>
                        <img src="<?php echo esc_url($betting_image_1['url']); ?>" width="418"
                        height="418" alt class="betting_img1">
                    <?php endif; ?>

                    <?php 
                    $betting_image_2 = get_field('c_betting_image_2'); 
                    if ($betting_image_2): ?>
                        <img src="<?php echo esc_url($betting_image_2['url']); ?>" width="294"
                        height="182" alt class="betting_img2">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ********** Cricket Betting Sec END ********** -->

        <!-- ********** License Sec START ********** -->
        <section class="license_sec">
            <div class="container-fluid">
                <div class="license_design1">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="license_con1">
                                <h3><?php the_field('license_heading'); ?></h3>
                                <?php the_field('license_description'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="license_con2">
                                <h3><?php the_field('start_betting_heading'); ?></h3>
                                <p><?php the_field('start_betting_intro'); ?></p>
                                <ul>
                                    <?php if( have_rows('start_betting_steps') ): ?>
                                        <?php while( have_rows('start_betting_steps') ): the_row(); ?>
                                            <?php the_sub_field('step_description'); ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <?php the_field('start_betting_info'); ?>
                            </div>
                        </div>
                        <?php 
                        $license_image = get_field('license_image');
                        if( $license_image ): ?>
                            <img src="<?php echo esc_url($license_image['url']); ?>" alt="<?php echo esc_attr($license_image['alt']); ?>" class="license_img">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="license_design2">
                        <div class="secSliderWrap">
                            <div class="secSlider" id="seclicenseSlider">
                                <div class="item">
                                    <div class="secItem">
                                        <div class="license_slide_con">
                                        <h3><?php the_field('license_heading'); ?></h3>
                                        <?php the_field('license_description'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="secItem">
                                        <div class="license_slide_con">
                                        <h3><?php the_field('start_betting_heading'); ?></h3>
                                            <p><?php the_field('start_betting_intro'); ?></p>
                                            <ul>
                                            <?php if( have_rows('start_betting_steps') ): ?>
                                                <?php while( have_rows('start_betting_steps') ): the_row(); ?>
                                                <?php the_sub_field('step_description'); ?>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                            </ul>
                                            <?php the_field('start_betting_info'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="secSliderNavWrap">
                                <div
                                    class="secSliderNav seclicenseSliderPrev slick-arrow">
                                    <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/left_arrow.webp"
                                        width="9" height="16" alt title>
                                </div>
                                <div
                                    class="secSliderNav seclicenseSliderNext slick-arrow">
                                    <img loading="lazy"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/right_arrow.webp"
                                        width="9" height="16" alt
                                        title>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- ********** License Sec END ********** -->
        
        <!-- ********** Cricket Online Sec START ********** -->
        <section class="online_sec t-padd">
            <div class="container-fluid">
                <div class="online_con">
                    <img src="<?php echo get_field('online_img1'); ?>" width="1688" height="482" alt="">
                    <img src="<?php echo get_field('online_img2'); ?>" width="850" height="719" alt="" class="online_img">
                    <img src="<?php echo get_field('online_shadow'); ?>" width="850" height="492" alt="" class="online_shadeow">
                    <div class="online_txt">
                        <div class="heading">
                            <h2><?php the_field('online_heading'); ?></h2>
                        </div>
                        <p><?php the_field('online_paragraph'); ?></p>
                    </div>
                </div>
            </div>
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape1.png" alt="" class="online_shape1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape2.png" alt="" class="online_shape2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape3.png" alt="" class="online_shape3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape4.png" alt="" class="online_shape4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape5.png" alt="" class="online_shape5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape6.png" alt="" class="online_shape6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape7.png" alt="" class="online_shape7">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape8.png" alt="" class="online_shape8">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online_shape9.png" alt="" class="online_shape9">
        </section>
        <!-- ********** Cricket Online Sec END ********** -->
        
        <!-- ********** Betting I'd Sec START ********** -->
        <section class="betting_id_sec b-padd">
            <div class="bg_img">
                <img src="<?php the_field('bet_background_image'); ?>" width="1920" height="1070" alt="">
            </div>
            <div class="container-fluid">
                <div class="betting_con">
                    <div class="heading head-text-center">
                        <h2><?php the_field('b_heading'); ?></h2>
                        <p><?php the_field('b_description'); ?></p>
                    </div>
                    <div class="betting_id_con">
                        <?php if( have_rows('betting_steps') ): ?>
                            <?php $counter = 1; // Initialize counter ?>
                            <?php while( have_rows('betting_steps') ): the_row(); ?>
                                <div class="bet_box">
                                    <div class="bet_box_con">
                                        <?php echo get_sub_field('step_icon'); ?>
                                        <p><?php the_sub_field('step_title'); ?></p>
                                    </div>
                                    <div class="<?php echo ($counter % 2 == 1) ? 'circleOne' : 'circleTwo'; ?>">
                                        <?php the_sub_field('step_number'); ?>
                                    </div>
                                </div>
                                <?php $counter++; // Increment counter ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="menu-btn d-flex justify-content-center">
                        <a href="<?php the_field('join_us_link'); ?>" target="_blank" class="main-btn main-btn1">
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z"
                                                    stroke="#171717" stroke-width="2.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                <?php the_field('join_us_text'); ?>
                            </span>
                        </a>
                        <a href="<?php the_field('other_button_link'); ?>" target="_blank" class="main-btn main-btn2">
                            <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="38" height="38"
                                                viewBox="0 0 38 38" fill="none">
                                                <path
                                                    d="M3.8537 34.2817L5.98645 26.4957C4.6707 24.2172 3.97878 21.6317 3.97957 18.9835C3.98353 10.6987 10.7254 3.9585 19.0109 3.9585C23.0318 3.96008 26.8049 5.5252 29.643 8.36491C32.4804 11.2054 34.0431 14.9801 34.0415 18.9954C34.0384 27.2802 27.2949 34.0212 19.0109 34.0212H19.0046C16.4895 34.0205 14.0171 33.3895 11.8218 32.1917L3.8537 34.2817Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M3.85374 34.6774C3.74924 34.6774 3.64791 34.6362 3.5727 34.5602C3.47374 34.4597 3.43495 34.3132 3.47216 34.1778L5.56136 26.5493C4.2662 24.2488 3.58299 21.6362 3.58457 18.9842C3.58774 10.4801 10.5077 3.5625 19.011 3.5625C23.1356 3.56408 27.0108 5.17038 29.9233 8.08529C32.8359 11.001 34.439 14.8754 34.4374 18.9952C34.4342 27.4985 27.5135 34.4169 19.011 34.4169C16.4864 34.4161 13.9887 33.7931 11.772 32.6143L3.95428 34.6639C3.92103 34.6734 3.88778 34.6774 3.85374 34.6774Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M19.0109 3.95817C23.0318 3.95975 26.8049 5.52488 29.643 8.36459C32.4804 11.2051 34.0431 14.9798 34.0415 18.9951C34.0384 27.2799 27.2949 34.0209 19.0109 34.0209H19.0046C16.4895 34.0201 14.0171 33.3892 11.8218 32.1914L3.8537 34.2814L5.98645 26.4953C4.6707 24.2169 3.97878 21.6313 3.97957 18.9832C3.98353 10.6984 10.7254 3.95817 19.0109 3.95817ZM19.0109 3.1665C10.2899 3.1665 3.19187 10.2614 3.18791 18.9832C3.18712 21.6488 3.86003 24.2755 5.1362 26.6006L3.08974 34.0732C3.01532 34.3463 3.09132 34.6376 3.29082 34.8387C3.44124 34.9907 3.6447 35.0738 3.8537 35.0738C3.92099 35.0738 3.98828 35.0651 4.05478 35.0477L11.7237 33.0369C13.9625 34.199 16.4721 34.8126 19.0046 34.8134C27.7319 34.8134 34.83 27.7177 34.834 18.9959C34.8356 14.7692 33.1913 10.795 30.2043 7.80567C27.2158 4.81555 23.2408 3.16809 19.0109 3.1665Z"
                                                    fill="#CFD8DC"></path>
                                                <path
                                                    d="M27.8476 10.1588C25.4884 7.79808 22.3526 6.49737 19.0149 6.49658C12.1243 6.49658 6.52007 12.0984 6.51691 18.9843C6.51612 21.3443 7.17637 23.6417 8.4272 25.6312L8.72487 26.1038L7.46216 30.7121L12.1908 29.4723L12.6476 29.7431C14.565 30.8815 16.7642 31.4832 19.0062 31.484H19.011C25.8969 31.484 31.5011 25.8813 31.5035 18.9946C31.5043 15.6577 30.2067 12.5196 27.8476 10.1588Z"
                                                    fill="#40C351"></path>
                                                <path fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M15.2537 12.7023C14.9727 12.0769 14.6766 12.0642 14.4082 12.0532C14.1889 12.0437 13.9388 12.0444 13.6886 12.0444C13.4384 12.0444 13.0315 12.1387 12.6872 12.5147C12.3428 12.8907 11.3722 13.7988 11.3722 15.6465C11.3722 17.4943 12.718 19.2803 12.9057 19.5304C13.0933 19.7806 15.5039 23.6938 19.3213 25.1996C22.4935 26.4504 23.1395 26.2018 23.8283 26.1393C24.517 26.0767 26.0505 25.2312 26.3632 24.3541C26.6759 23.4769 26.6759 22.7256 26.5825 22.5689C26.4883 22.4121 26.2381 22.3187 25.8629 22.1303C25.4876 21.9419 23.6407 21.0338 23.2963 20.9087C22.9519 20.7837 22.7017 20.7211 22.4508 21.0972C22.2006 21.4724 21.481 22.3187 21.2617 22.5689C21.0424 22.8198 20.8231 22.8515 20.4479 22.6631C20.0726 22.4747 18.8629 22.0788 17.4277 20.7995C16.3114 19.8044 15.5577 18.5749 15.3384 18.1989C15.1192 17.8236 15.3147 17.6202 15.5031 17.4325C15.6717 17.2639 15.8784 16.9939 16.0668 16.7747C16.2544 16.5554 16.3169 16.3986 16.442 16.1485C16.5671 15.8975 16.5046 15.6782 16.4104 15.4906C16.3177 15.3022 15.5878 13.4449 15.2537 12.7023Z"
                                                    fill="white"></path>
                                            </svg>
                                <?php the_field('other_button_text'); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ********** Betting I'd Sec END ********** -->
                
        <!-- ********** FAQ Sec START ********** -->
        <?php if( have_rows('faqs') ): ?>
        <section class="faq_sec c-padd">
            <div class="container-fluid">
                <div class="heading head-text-center">
                    <h2><?php the_field('faq_section_title'); // Assuming you have a field for the section title ?></h2>
                    <p><?php the_field('faq_section_description'); // Assuming you have a field for the section description ?></p>
                </div>
                <div class="faq-accordian-div">
                    <div class="faq-item">
                        <?php while( have_rows('faqs') ): the_row(); ?>
                        <details>
                            <summary>
                                <h3><?php the_sub_field('question'); ?></h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="faq_arrow">
                                    <path d="M12 8V16M12 16L8 12M12 16L16 12M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#4B4B4B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </summary>
                            <div class="faq-ans">
                                <p><?php the_sub_field('answer'); ?></p>
                            </div>
                        </details>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- ********** FAQ Sec END ********** -->
   
    <!-- **************** MAIN CONTENT END **************** -->


<?php 
get_footer();
?>