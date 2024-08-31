<?php 
get_header();
?>



<section class="inner-banner">
    <img src="<?php echo esc_url(get_field('p_banner_image')['url']); ?>" width="1920" height="427" alt="<?php echo esc_attr(get_field('banner_image')['alt']); ?>">
    <h1><?php echo esc_html(get_field('p_banner_heading')); ?></h1>  
    <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <?php
        // Get the HTTP referrer URL
        $referrer_url = isset($_SERVER['HTTP_REFERER']) ? esc_url($_SERVER['HTTP_REFERER']) : '';
        
        // Initialize last page title variable
        $last_page_title = 'No Previous Page';

        // Check if the referrer URL is valid
        if ($referrer_url) {
            // Get the post ID from the referrer URL
            $referrer_post_id = url_to_postid($referrer_url);
            
            // If a valid post ID is found, get the title
            if ($referrer_post_id) {
                $last_page_title = get_the_title($referrer_post_id);
            }
        }

        // Display the last page title and URL
        ?>
        <?php if ($referrer_url) : ?>
            <li><a href="<?php echo esc_url($referrer_url); ?>"><?php echo esc_html($last_page_title); ?></a></li>
        <?php else : ?>
            <li><?php echo esc_html($last_page_title); ?></li>
        <?php endif; ?>
        <li><?php echo get_field('title'); ?></li>
    </ul>
</section>





        <!-- ********** Banner End ********** -->

        <!-- ********** CBT sec START ********** -->
        <section class="blog_sec c-padd">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-9 col-md-8">
    <div class="blog_details_con">
        <div class="heading">
            <h2><?php the_title(); ?></h2>
        </div>
        <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>

        <div class="bd_details d-flex justify-content-between">
            <div class="bd_date d-flex justify-content-start">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <path d="M15.0418 16.625V15.0417C15.0418 14.2018 14.7082 13.3964 14.1143 12.8025C13.5205 12.2086 12.715 11.875 11.8752 11.875H7.12516C6.28531 11.875 5.47986 12.2086 4.88599 12.8025C4.29213 13.3964 3.9585 14.2018 3.9585 15.0417V16.625M12.6668 5.54167C12.6668 7.29057 11.2491 8.70833 9.50016 8.70833C7.75126 8.70833 6.3335 7.29057 6.3335 5.54167C6.3335 3.79276 7.75126 2.375 9.50016 2.375C11.2491 2.375 12.6668 3.79276 12.6668 5.54167Z" stroke="#3D3D3D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                    <?php echo get_the_author_meta('display_name'); ?>
                </span>
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <path d="M6.33333 1.5835V4.75016M12.6667 1.5835V4.75016M2.375 7.91683H16.625M6.33333 11.0835H6.34125M9.5 11.0835H9.50792M12.6667 11.0835H12.6746M6.33333 14.2502H6.34125M9.5 14.2502H9.50792M12.6667 14.2502H12.6746M3.95833 3.16683H15.0417C15.9161 3.16683 16.625 3.87571 16.625 4.75016V15.8335C16.625 16.7079 15.9161 17.4168 15.0417 17.4168H3.95833C3.08388 17.4168 2.375 16.7079 2.375 15.8335V4.75016C2.375 3.87571 3.08388 3.16683 3.95833 3.16683Z" stroke="#3D3D3D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                    <?php echo get_the_date('F j, Y'); ?>
                </span>
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <g clip-path="url(#clip0_1_4911)">
                                              <path d="M9.96408 2.04741C9.66722 1.75046 9.26456 1.58359 8.84466 1.5835H3.16683C2.7469 1.5835 2.34418 1.75031 2.04724 2.04724C1.75031 2.34418 1.5835 2.7469 1.5835 3.16683V8.84466C1.58359 9.26456 1.75046 9.66722 2.04741 9.96408L8.93808 16.8547C9.2979 17.2123 9.78457 17.413 10.2918 17.413C10.7991 17.413 11.2858 17.2123 11.6456 16.8547L16.8547 11.6456C17.2123 11.2858 17.413 10.7991 17.413 10.2918C17.413 9.78457 17.2123 9.2979 16.8547 8.93808L9.96408 2.04741Z" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                              <path d="M5.93734 6.33317C6.15595 6.33317 6.33317 6.15595 6.33317 5.93734C6.33317 5.71872 6.15595 5.5415 5.93734 5.5415C5.71872 5.5415 5.5415 5.71872 5.5415 5.93734C5.5415 6.15595 5.71872 6.33317 5.93734 6.33317Z" fill="#3D3D3D" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_1_4911">
                                                <rect width="19" height="19" fill="white"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <?php
                                        $tags = get_the_tags();
                                        if ($tags) {
                                            $tag_names = array_map(function ($tag) {
                                                return esc_html($tag->name);
                                            }, $tags);

                                            echo implode(', ', $tag_names);
                                        }
                                        ?>
                </span>
            </div>
            <div class="bd_shape d-flex justify-content-end align-items-center">
                <span>Share this article :</span>
                <div class="bd_social d-flex justify-content-end">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                                                <circle cx="29.5" cy="29.5" r="29.5" fill="#3B5998"/>
                                                <path d="M35 20H32C30.6739 20 29.4021 20.5268 28.4645 21.4645C27.5268 22.4021 27 23.6739 27 25V28H24V32H27V40H31V32H34L35 28H31V25C31 24.7348 31.1054 24.4804 31.2929 24.2929C31.4804 24.1054 31.7348 24 32 24H35V20Z" fill="white"/>
                                            </svg>
                    </a>
                    <a href="https://wa.me/?text=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="bd_social_icon">
                    <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="29.5" cy="29.5" r="29.5" fill="#40C351"/>
                                                <path d="M18.0425 41.0644L19.7262 34.9175C18.6875 33.1187 18.1412 31.0775 18.1419 28.9869C18.145 22.4462 23.4675 17.125 30.0087 17.125C33.1831 17.1263 36.1619 18.3619 38.4025 20.6037C40.6425 22.8463 41.8762 25.8263 41.875 28.9963C41.8725 35.5369 36.5487 40.8587 30.0087 40.8587H30.0037C28.0181 40.8581 26.0662 40.36 24.3331 39.4144L18.0425 41.0644Z" fill="white"/>
                                                <path d="M18.0427 41.3769C17.9602 41.3769 17.8802 41.3444 17.8208 41.2844C17.7427 41.205 17.7121 41.0894 17.7414 40.9825L19.3908 34.96C18.3683 33.1437 17.8289 31.0812 17.8302 28.9875C17.8327 22.2737 23.2958 16.8125 30.0089 16.8125C33.2652 16.8138 36.3246 18.0819 38.6239 20.3831C40.9233 22.685 42.1889 25.7437 42.1877 28.9963C42.1852 35.7094 36.7214 41.1712 30.0089 41.1712C28.0158 41.1706 26.0439 40.6787 24.2939 39.7481L18.1221 41.3662C18.0958 41.3737 18.0696 41.3769 18.0427 41.3769Z" fill="white"/>
                                                <path d="M30.009 17.125C33.1834 17.1263 36.1621 18.3619 38.4027 20.6038C40.6427 22.8463 41.8765 25.8263 41.8752 28.9963C41.8727 35.5369 36.549 40.8587 30.009 40.8587H30.004C28.0184 40.8581 26.0665 40.36 24.3334 39.4144L18.0427 41.0644L19.7265 34.9175C18.6877 33.1187 18.1415 31.0775 18.1421 28.9869C18.1452 22.4462 23.4677 17.125 30.009 17.125ZM30.009 16.5C23.124 16.5 17.5202 22.1012 17.5171 28.9869C17.5165 31.0913 18.0477 33.165 19.0552 35.0006L17.4396 40.9C17.3809 41.1156 17.4409 41.3456 17.5984 41.5044C17.7171 41.6244 17.8777 41.69 18.0427 41.69C18.0959 41.69 18.149 41.6831 18.2015 41.6694L24.2559 40.0819C26.0234 40.9994 28.0046 41.4837 30.004 41.4844C36.894 41.4844 42.4977 35.8825 42.5009 28.9969C42.5021 25.66 41.204 22.5225 38.8459 20.1625C36.4865 17.8019 33.3484 16.5013 30.009 16.5Z" fill="#CFD8DC"/>
                                                <path d="M36.985 22.0202C35.1225 20.1564 32.6469 19.1295 30.0119 19.1289C24.5719 19.1289 20.1475 23.5514 20.145 28.9877C20.1444 30.8508 20.6656 32.6645 21.6531 34.2352L21.8881 34.6083L20.8913 38.2464L24.6244 37.2677L24.985 37.4814C26.4988 38.3802 28.235 38.8552 30.005 38.8558H30.0088C35.445 38.8558 39.8694 34.4327 39.8713 28.9958C39.8719 26.3614 38.8475 23.8839 36.985 22.0202Z" fill="#40C351"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0424 24.0282C26.8205 23.5344 26.5868 23.5244 26.3749 23.5157C26.2018 23.5082 26.0043 23.5088 25.8068 23.5088C25.6093 23.5088 25.288 23.5832 25.0162 23.8801C24.7443 24.1769 23.978 24.8938 23.978 26.3526C23.978 27.8113 25.0405 29.2213 25.1887 29.4188C25.3368 29.6163 27.2399 32.7057 30.2537 33.8944C32.758 34.8819 33.268 34.6857 33.8118 34.6363C34.3555 34.5869 35.5662 33.9194 35.813 33.2269C36.0599 32.5344 36.0599 31.9413 35.9862 31.8176C35.9118 31.6938 35.7143 31.6201 35.418 31.4713C35.1218 31.3226 33.6637 30.6057 33.3918 30.5069C33.1199 30.4082 32.9224 30.3588 32.7243 30.6557C32.5268 30.9519 31.9587 31.6201 31.7855 31.8176C31.6124 32.0157 31.4393 32.0407 31.143 31.8919C30.8468 31.7432 29.8918 31.4307 28.7587 30.4207C27.8774 29.6351 27.2824 28.6644 27.1093 28.3676C26.9362 28.0713 27.0905 27.9107 27.2393 27.7626C27.3724 27.6294 27.5355 27.4163 27.6843 27.2432C27.8324 27.0701 27.8818 26.9463 27.9805 26.7488C28.0793 26.5507 28.0299 26.3776 27.9555 26.2294C27.8824 26.0807 27.3062 24.6144 27.0424 24.0282Z" fill="white"/>
                                            </svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="29.5" cy="29.5" r="29.5" fill="#0077B5"/>
                                                <rect width="24" height="24" transform="translate(18 18)" fill="#0077B5"/>
                                                <path d="M34 26C35.5913 26 37.1174 26.6321 38.2426 27.7574C39.3679 28.8826 40 30.4087 40 32V39H36V32C36 31.4696 35.7893 30.9609 35.4142 30.5858C35.0391 30.2107 34.5304 30 34 30C33.4696 30 32.9609 30.2107 32.5858 30.5858C32.2107 30.9609 32 31.4696 32 32V39H28V32C28 30.4087 28.6321 28.8826 29.7574 27.7574C30.8826 26.6321 32.4087 26 34 26Z" fill="white"/>
                                                <path d="M24 27H20V39H24V27Z" fill="white"/>
                                                <path d="M22 24C23.1046 24 24 23.1046 24 22C24 20.8954 23.1046 20 22 20C20.8954 20 20 20.8954 20 22C20 23.1046 20.8954 24 22 24Z" fill="white"/>
                                            </svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                                                <circle cx="29.5" cy="29.5" r="29.5" fill="black"/>
                                                <path d="M18.0585 18L27.3246 30.3897L18 40.463H20.0986L28.2623 31.6437L34.8584 40.463H42L32.2125 27.3764L40.8918 18H38.7932L31.2748 26.1225L25.2001 18H18.0585Z" fill="white"/>
                                            </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="bd_img">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
            <?php endif; ?>
        </div>
        <p><?php echo get_field('main_content'); ?></p>
        <p><?php echo get_field('additional_content'); ?></p>
        <p><?php echo get_field('final_content'); ?></p>
        <div class="bd_p">
            <?php if (get_field('conclusion_icon')): ?>
                <img src="<?php echo esc_url(get_field('conclusion_icon')); ?>" alt="Conclusion Icon" class="bd_icon">
            <?php endif; ?>
            <p><?php echo get_field('conclusion_text'); ?></p>
        </div>
        <p><?php echo get_field('final_thoughts'); ?></p>
        <p><?php echo get_field('responsible_gambling'); ?></p>
  
        <div class="page-list row">
    <div class="col-6">
        <?php $prev_post = get_previous_post(); ?>
        <?php if (!empty($prev_post)) : ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>">
                <div class="back-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4.99935 6.66663L1.66602 9.99996L4.99935 13.3333" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1.66602 10H18.3327" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <div class="back-page-txt">
                        <h4>Previous Blog</h4>
                        <p><?php echo wp_trim_words(get_the_title($prev_post->ID), 4, '...'); ?></p>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div>
    <div class="col-6">
        <?php $next_post = get_next_post(); ?>
        <?php if (!empty($next_post)) : ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>">
                <div class="next-page">
                    <div class="next-page-txt">
                        <h4>Next Blog</h4>
                        <p><?php echo wp_trim_words(get_the_title($next_post->ID), 4, '...'); ?></p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M15.0007 6.66663L18.334 9.99996L15.0007 13.3333" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.334 10H1.66732" stroke="#3D3D3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </a>
        <?php endif; ?>
    </div>
</div>

<div class="bd-form">
    <h2>Leave a reply</h2>
    <form class="form_design" action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" id="commentform">
        <div class="row g-4">
            <div class="col-12">
                <textarea name="comment" placeholder="Your comment*" id="comment" required></textarea>
            </div>
            <div class="col-sm-6 col-12">
                <input type="text" placeholder="Name" name="author" id="author" required>
            </div>
            <div class="col-sm-6 col-12">
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>
            <div class="col-12">
                <div class="form-checkbox">
                    <input type="checkbox" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="main-btn d-flex align-items-center justify-content-center">Post Comment
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18 8L22 12L18 16" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12H22" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', get_the_ID()); ?>
    </form>
</div>


<div class="bd_related">
    <h2>Related blogs</h2>
    <div class="secSliderWrap">
        <div class="secSlider" id="secBlogDetailsSlider">
            <?php
            // Query for posts in the 'related-blogs' category
            $args = array(
                'category_name' => 'related-blogs', // category slug
                'posts_per_page' => -1 // Adjust this to the number of posts you want
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="item">
                        <div class="secItem">
                            <div class="cbt_box">
                                <div class="cbt_img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', ['width' => 399, 'height' => 337, 'alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="path/to/placeholder-image.png" width="399" height="337" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="cbt_txt">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <ul>
                                        <li>
                                            <div class="cbt_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                                    <path d="M15.0417 16.625V15.0417C15.0417 14.2018 14.7081 13.3964 14.1142 12.8025C13.5203 12.2086 12.7149 11.875 11.875 11.875H7.12504C6.28519 11.875 5.47973 12.2086 4.88587 12.8025C4.292 13.3964 3.95837 14.2018 3.95837 15.0417V16.625M12.6667 5.54167C12.6667 7.29057 11.2489 8.70833 9.50004 8.70833C7.75114 8.70833 6.33337 7.29057 6.33337 5.54167C6.33337 3.79276 7.75114 2.375 9.50004 2.375C11.2489 2.375 12.6667 3.79276 12.6667 5.54167Z" stroke="#845700" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <?php echo get_the_author(); ?>
                                        </li>
                                        <li>
                                            <div class="cbt_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                                    <path d="M6.33333 1.5835V4.75016M12.6667 1.5835V4.75016M2.375 7.91683H16.625M6.33333 11.0835H6.34125M9.5 11.0835H9.50792M12.6667 11.0835H12.6746M6.33333 14.2502H6.34125M9.5 14.2502H9.50792M12.6667 14.2502H12.6746M3.95833 3.16683H15.0417C15.9161 3.16683 16.625 3.87571 16.625 4.75016V15.8335C16.625 16.7079 15.9161 17.4168 15.0417 17.4168H3.95833C3.08388 17.4168 2.375 16.7079 2.375 15.8335V4.75016C2.375 3.87571 3.08388 3.16683 3.95833 3.16683Z" stroke="#845700" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <?php echo get_the_date(); ?>
                                        </li>
                                    </ul>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="cbt_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                            <path d="M8.16675 8.1665H19.8334M19.8334 8.1665V19.8332M19.8334 8.1665L8.16675 19.8332" stroke="#2B2B2B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No related blogs found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="blog_side">
        <div class="search">
            <form id="searchForm" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input type="text" class="searchTerm" name="s" id="searchQuery" placeholder="Search">
                <button type="submit" class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M11.9167 20.5833C16.7031 20.5833 20.5833 16.7031 20.5833 11.9167C20.5833 7.1302 16.7031 3.25 11.9167 3.25C7.1302 3.25 3.25 7.1302 3.25 11.9167C3.25 16.7031 7.1302 20.5833 11.9167 20.5833Z" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.7501 22.7501L18.0918 18.0918" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
            
        </div>
        <div id="searchResults"></div>
        
        <div class="blog_category">
            <h2>Pages</h2>
            <ul>
                <?php
                // Array of page slugs
                $pages = array('cricket', 'football');
                
                foreach ($pages as $page_slug) {
                    $page = get_page_by_path($page_slug);
                    if ($page) {
                        echo '<li>';
                        echo '<a href="' . esc_url(get_permalink($page->ID)) . '">';
                        echo '<h3>' . esc_html($page->post_title) . '</h3>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">';
                        echo '<path d="M7.5 5L12.5 10L7.5 15" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>';
                        echo '</svg>';
                        echo '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </div>
   

        <?php 
// Get ACF field values
$side_image = get_field('side_image');
$side_logo = get_field('side_logo');
$paragraph_text = get_field('paragraph_text');
$button_url = get_field('button_url');
$button_text = get_field('button_text');
?>

                                <div class="blog_side_img">
                                <img src="<?php echo esc_url($side_image['url']); ?>" width="400" height="356" alt="">
                                <div class="bs_img_txt">
                                    <img src="<?php echo esc_url($side_logo['url']); ?>" width="265" height="59" alt="">
                                    <p><?php echo $paragraph_text; ?></p>
                                    <a href="<?php echo $button_url; ?>" class="main-btn main-btn1">
                                        <span>
                                        <?php echo $button_text; ?>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="blog_post">
    <h2>Recent Post</h2>
    <ul>
        <?php
        // Arguments for WP_Query to fetch the latest posts
        $args = array(
            'post_type'      => 'post',       // Fetch standard posts
            'posts_per_page' => 4,            // Number of posts to display
            'orderby'       => 'date',        // Order by date
            'order'         => 'DESC'         // Descending order (newest first)
        );

        // Create a new instance of WP_Query
        $recent_posts = new WP_Query($args);

        // Check if there are posts
        if ($recent_posts->have_posts()) :
            // Loop through posts
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                // Get the post thumbnail URL
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                // Get the post date
                $post_date = get_the_date('M d, Y');
        ?>
            <li>
                <div class="blog_post_img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($thumbnail_url); ?>" width="152" height="100" alt="<?php the_title_attribute(); ?>">
                </a>
                </div>
                <div class="blog_post_txt">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M7.3335 1.8335V5.50016" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.6665 1.8335V5.50016" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.4167 3.6665H4.58333C3.57081 3.6665 2.75 4.48732 2.75 5.49984V18.3332C2.75 19.3457 3.57081 20.1665 4.58333 20.1665H17.4167C18.4292 20.1665 19.25 19.3457 19.25 18.3332V5.49984C19.25 4.48732 18.4292 3.6665 17.4167 3.6665Z" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.75 9.1665H19.25" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.3335 12.8335H7.3435" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 12.8335H11.01" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.6665 12.8335H14.6765" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.3335 16.5H7.3435" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 16.5H11.01" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.6665 16.5H14.6765" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span><?php echo esc_html($post_date); ?></span>
                    </div>
                </div>
            </li>
        <?php
            endwhile;
            // Restore original Post Data
            wp_reset_postdata();
        else:
        ?>
            <li>No recent posts found.</li>
        <?php
        endif;
        ?>
    </ul>
</div>

                            <?php 
// Get ACF field values
$bonus_image = get_field('bonus_image');
$heading_text = get_field('heading_text');
$bonus_list_items = get_field('bonus_list_items');
$b_button_url = get_field('b_button_url');
$b_button_text = get_field('b_button_text');
?>

<div class="bd_bonus">
    <?php if ($bonus_image): ?>
        <img src="<?php echo esc_url($bonus_image['url']); ?>" width="<?php echo esc_attr($bonus_image['width']); ?>" height="<?php echo esc_attr($bonus_image['height']); ?>" alt="">
    <?php endif; ?>
    <div class="bd_bonus_txt">
        <?php if ($heading_text): ?>
            <h3><?php echo esc_html($heading_text); ?></h3>
        <?php endif; ?>
        <?php if ($bonus_list_items): ?>
            <ul>
                <?php foreach ($bonus_list_items as $item): ?>
                    <li><?php echo esc_html($item['list_item']); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($button_url && $button_text): ?>
            <a href="<?php echo esc_url($b_button_url); ?>" class="main-btn main-btn2">
                <span><?php echo esc_html($b_button_text); ?></span>
            </a>
        <?php endif; ?>
    </div>
</div>

<div class="blog_tag">
    <h2>Popular Tags</h2>
    <div class="tag_name">
        <?php
        // Fetch all tags
        $tags = get_tags(array(
            'hide_empty' => false, // Show all tags, even if they are not used in any posts
        ));

        // Define page IDs for "Cricket" and "Football" pages
        $cricket_page_id = 361; // Replace with your actual Cricket page ID
        $football_page_id = 420; // Replace with your actual Football page ID

        // Get the permalinks for these pages
        $cricket_page_url = get_permalink($cricket_page_id);
        $football_page_url = get_permalink($football_page_id);

        // Check if there are any tags
        if ($tags):
            foreach ($tags as $tag):
                // Check if the tag name matches "Cricket" or "Football"
                if (strtolower($tag->name) == 'cricket') {
                    $page_url = $cricket_page_url;
                } elseif (strtolower($tag->name) == 'football') {
                    $page_url = $football_page_url;
                } else {
                    // Default to the tag archive page if it's not "Cricket" or "Football"
                    $page_url = get_tag_link($tag->term_id);
                }
        ?>
                <a href="<?php echo esc_url($page_url); ?>">
                    <?php echo esc_html($tag->name); ?>
                </a>
            <?php
            endforeach;
        else:
            ?>
            <p>No tags found.</p>
        <?php
        endif;
        ?>
    </div>
</div>


                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape1.png" alt="" class="blog_shape1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape2.png" alt="" class="blog_shape2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape3.png" alt="" class="blog_shape3 bd_shape3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape4.png" alt="" class="blog_shape4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape5.png" alt="" class="blog_shape5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape6.png" alt="" class="blog_shape6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape7.png" alt="" class="blog_shape7">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape8.png" alt="" class="blog_shape8">
        </section>


        <script>
document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var query = document.getElementById('searchQuery').value;
    var resultsContainer = document.getElementById('searchResults');
    
    fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            action: 'ajax_search',
            s: query
        })
    })
    .then(response => response.text())
    .then(data => {
        resultsContainer.innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>
        
<?php 
get_footer();

?>