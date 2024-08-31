<?php

get_header();

?>

<div id="primary" class="content-area" style="display:none;">
    <main id="main" class="site-main">
        <?php
        // Start the loop to get the page content
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        // Display the page title
                        the_title('<h1 class="entry-title">', '</h1>');
                        ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        // Display the page content
                        the_content();

                        // Pagination if the content is split into multiple pages
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div><!-- .entry-content -->

                    <?php
                    // If comments are open or there are comments, load the comment template
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </article><!-- #post-<?php the_ID(); ?> -->

        <?php
            endwhile;
        else :
            // If no content, include the "No posts found" template
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- ********** Banner START ********** -->
    <section class="inner-banner">
        <?php
        if (has_post_thumbnail()) {
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Retrieves the URL of the featured image
        ?>
            <img src="<?= esc_url($featured_image_url) ?>" width="1920" height="427" alt="<?= esc_attr(get_the_title()) ?>">
        <?php } ?>
        <h1>Our <?= the_title() ?></h1>
        <ul>
            <li><a href="<?=site_url('/')?>">Home</a></li>
            <li><?= the_title() ?></li>
        </ul>
    </section>
    <!-- ********** Banner End ********** -->

    <!-- ********** CBT sec START ********** -->
    <section class="privacy_sec c-padd">
        <div class="container-fluid">
            <?=the_content()?>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape1.png" alt="" class="pp_shape1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape2.png" alt="" class="pp_shape2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape3.png" alt="" class="pp_shape3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape4.png" alt="" class="pp_shape4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape5.png" alt="" class="pp_shape5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape6.png" alt="" class="pp_shape6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape7.png" alt="" class="pp_shape7">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape8.png" alt="" class="pp_shape8">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape9.png" alt="" class="pp_shape9">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/pp_shape10.png" alt="" class="pp_shape10">
    </section>
    <!-- ********** CBT sec END ********** -->

    <!-- ********** Cricket Betting Sec START ********** -->
    <section class="betting_sec betting_sec_one b-padd">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center betting_row">
                <div class="bg_img">
                    <img src="<?=the_field('image_1','option')?>" width="1688" height="317" alt="">
                </div>
                <div class="col-lg-5">
                    <div class="heading">
                        <h2><?=the_field('text_1','option')?></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="betting_txt">
                        <p><?=the_field('text_2','option')?> </p>
                        <div class="menu-btn d-flex">
                            <a href="https://api.whatsapp.com/send?phone=917384354549" target="_blank" class="main-btn main-btn1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M18.9999 21V19C18.9999 17.9391 18.5784 16.9217 17.8283 16.1716C17.0782 15.4214 16.0607 15 14.9999 15H8.99988C7.93901 15 6.9216 15.4214 6.17145 16.1716C5.42131 16.9217 4.99988 17.9391 4.99988 19V21M15.9999 7C15.9999 9.20914 14.209 11 11.9999 11C9.79074 11 7.99988 9.20914 7.99988 7C7.99988 4.79086 9.79074 3 11.9999 3C14.209 3 15.9999 4.79086 15.9999 7Z" stroke="#171717" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Join Us
                                </span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=917384354549" target="_blank" class="main-btn main-btn2">
                                <span>
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
                <img src="<?=the_field('image_2','option')?>" width="418" height="418" alt="" class="betting_img1">
                <img src="<?=the_field('image_3','option')?>" width="294" height="182" alt="" class="betting_img2">
            </div>
        </div>
    </section>
    <!-- ********** Cricket Betting Sec END ********** -->
</main>
<!-- **************** MAIN CONTENT END **************** -->

<?php
//get_sidebar(); // Include the sidebar.php file, if you have a sidebar
get_footer(); // Include the footer.php file
?>