<?php

get_header();
// Get the current author object
$author = get_queried_object();
// Get the categories for the current post
$categories = get_the_category();
?>

<?php
// Calculate the total view count for all posts by this author
$total_views = 0;
$author_posts = get_posts(array(
    'author' => $author->ID,
    'posts_per_page' => -1, // Get all posts
    'fields' => 'ids' // Only fetch post IDs for performance
));
foreach ($author_posts as $post_id) {
    $total_views += (int) get_post_meta($post_id, 'post_views_count', true);
}

?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- ********** Banner START ********** -->
    <section class="inner-banner">
        <img src="<?= the_field('author_banner', 'option') ?>" width="1920" height="427" alt="">
        <h1>Our Author</h1>
        <ul>
            <li><a href="<?= site_url('/') ?>">Home</a></li>
            <li><a href="<?= site_url('/our-author/') ?>">Our Author</a></li>
            <li><?= esc_html($author->first_name . ' ' . $author->last_name) ?></li>
        </ul>
    </section>
    <!-- ********** Banner End ********** -->

    <!-- ********** CBT sec START ********** -->
    <section class="author_sec c-padd">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-5 col-12">
                    <div class="author_box author_details">
                        <img src="<?= get_avatar_url($author->ID, array('size' => 123)); ?>" width="202" height="202" alt="" class="author_details_img">
                        <h3><?= esc_html($author->first_name . ' ' . $author->last_name) ?></h3>
                        <h4><?= get_field('author_profile', 'user_' . $author->ID); ?></h4>
                        <ul>
                            <li>
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/author_icon1.png" alt="">
                                 <?= count_user_posts($author->ID); ?> posts
                            </li>
                            <li>
                                <img src="<?= get_template_directory_uri(); ?>/assets/img/inner/author_icon2.png" alt=""> 
                                <?php
                                // Calculate the total view count for all posts by this author
                                $total_views = 0;
                                $author_posts = get_posts(array(
                                    'author' => $author->ID,
                                    'posts_per_page' => -1, // Get all posts
                                    'fields' => 'ids' // Only fetch post IDs for performance
                                ));
                                foreach ($author_posts as $post_id) {
                                    $total_views += (int) get_post_meta($post_id, 'post_views_count', true);
                                }
                                echo esc_html($total_views) . '  reads';
                                ?>
                            </li>
                        </ul>
                        <p><?php echo nl2br(esc_html($author->description)); // Display the author's bio 
                            ?></p>
                        <div class="author_social">
                            <a href="<?= get_field('fb', 'user_' . $author->ID); ?>">
                                <div class="author_social_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <path d="M16.9996 2.49951H14.2996C13.1061 2.49951 11.9615 2.97362 11.1176 3.81753C10.2737 4.66144 9.79961 5.80604 9.79961 6.99951V9.69951H7.09961V13.2995H9.79961V20.4995H13.3996V13.2995H16.0996L16.9996 9.69951H13.3996V6.99951C13.3996 6.76082 13.4944 6.5319 13.6632 6.36312C13.832 6.19433 14.0609 6.09951 14.2996 6.09951H16.9996V2.49951Z" stroke="#454545" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <a href="<?= get_field('yt', 'user_' . $author->ID); ?>">
                                <div class="author_social_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                        <path d="M2.74986 16.0004C2.12114 13.0333 2.12114 9.96745 2.74986 7.00039C2.83247 6.69908 2.99208 6.42446 3.21301 6.20354C3.43393 5.98261 3.70855 5.823 4.00986 5.74039C8.83696 4.9407 13.7628 4.9407 18.5899 5.74039C18.8912 5.823 19.1658 5.98261 19.3867 6.20354C19.6076 6.42446 19.7673 6.69908 19.8499 7.00039C20.4786 9.96745 20.4786 13.0333 19.8499 16.0004C19.7673 16.3017 19.6076 16.5763 19.3867 16.7972C19.1658 17.0182 18.8912 17.1778 18.5899 17.2604C13.7628 18.0602 8.83695 18.0602 4.00986 17.2604C3.70855 17.1778 3.43393 17.0182 3.21301 16.7972C2.99208 16.5763 2.83247 16.3017 2.74986 16.0004Z" stroke="white" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.49986 14.2004L13.9999 11.5004L9.49986 8.80039V14.2004Z" stroke="white" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <a href="<?= get_field('x', 'user_' . $author->ID); ?>">
                                <div class="author_social_icon author_social_icon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path d="M2.34277 2.84107H2.08646L2.23145 3.05244L7.97878 11.4311L2.36356 17.9359L2.17087 18.1591H2.46575H3.72491H3.78674L3.82713 18.1123L8.69285 12.472L12.5537 18.1004L12.594 18.1591H12.6651H17.4225H17.6788L17.5338 17.9477L11.5266 9.19078L16.8116 3.06425L17.0041 2.84107H16.7094H15.4541H15.3923L15.3519 2.88786L10.8118 8.14769L7.21151 2.8997L7.17129 2.84107H7.10019H2.34277ZM13.1531 17.0971L4.10265 3.90307H6.6122L15.6626 17.0971H13.1531Z" fill="#454545" stroke="#454545" stroke-width="0.27" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 col-12">
                    <div class="row g-4">
                        <?php
                        // Pagination setup
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $per_page = 12; // Number of posts to display per page

                        // Get posts by this author
                        $args = array(
                            'author' => $author->ID,
                            'post_status' => 'publish',
                            'posts_per_page' => $per_page, // Use posts_per_page for WP_Query
                            // 'number' => $per_page,
                            'paged' => $paged,
                        );
                        $author_posts = new WP_Query($args);

                        if ($author_posts->have_posts()) {
                            while ($author_posts->have_posts()) {
                                $author_posts->the_post();
                        ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="<?=the_permalink()?>">
                                        <div class="author_details_box">
                                            <div class="ad_head">
                                                <?php
                                                // Check if the post has categories
                                                if (! empty($categories)) {
                                                    // Loop through each category and print the name
                                                    foreach ($categories as $category) {
                                                        echo '<h4>' . ucfirst(esc_html($category->name)) . '</h4>';
                                                        break;
                                                    }
                                                }
                                                ?>

                                                <span>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/author_icon2.png" alt="">
                                                     <?= esc_html($total_views) . ' reads'; ?>

                                                </span>
                                            </div>
                                            <h3><?php the_title(); ?></h3>

                                            <ul>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M10.4163 18.3332H14.9997C15.4417 18.3332 15.8656 18.1576 16.1782 17.845C16.4907 17.5325 16.6663 17.1085 16.6663 16.6665V5.83317L12.4997 1.6665H4.99967C4.55765 1.6665 4.13372 1.8421 3.82116 2.15466C3.5086 2.46722 3.33301 2.89114 3.33301 3.33317V11.2498M11.6663 1.6665V4.99984C11.6663 5.44186 11.8419 5.86579 12.1545 6.17835C12.4671 6.49091 12.891 6.6665 13.333 6.6665H16.6663M11.148 13.0215C11.3124 12.8571 11.4428 12.662 11.5317 12.4472C11.6207 12.2325 11.6665 12.0023 11.6665 11.7698C11.6665 11.5374 11.6207 11.3072 11.5317 11.0924C11.4428 10.8777 11.3124 10.6825 11.148 10.5182C10.9836 10.3538 10.7885 10.2234 10.5737 10.1345C10.359 10.0455 10.1288 9.99971 9.89634 9.99971C9.66388 9.99971 9.4337 10.0455 9.21894 10.1345C9.00418 10.2234 8.80904 10.3538 8.64467 10.5182L4.46967 14.6948C4.27155 14.8929 4.12652 15.1376 4.04801 15.4065L3.35051 17.7982C3.32959 17.8699 3.32834 17.9459 3.34688 18.0182C3.36541 18.0906 3.40306 18.1566 3.45588 18.2095C3.5087 18.2623 3.57474 18.2999 3.6471 18.3185C3.71946 18.337 3.79547 18.3357 3.86717 18.3148L6.25884 17.6173C6.52773 17.5388 6.77249 17.3938 6.97051 17.1957L11.148 13.0215Z" stroke="#2B2B2B" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>Created -</span> <?php echo get_the_date('M d Y g:i a'); ?>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M10.1833 1.6665H9.81667C9.37464 1.6665 8.95072 1.8421 8.63816 2.15466C8.3256 2.46722 8.15 2.89114 8.15 3.33317V3.48317C8.1497 3.77544 8.07255 4.0625 7.92628 4.31553C7.78002 4.56857 7.56978 4.7787 7.31667 4.92484L6.95834 5.13317C6.70497 5.27945 6.41756 5.35646 6.125 5.35646C5.83244 5.35646 5.54503 5.27945 5.29167 5.13317L5.16667 5.0665C4.78422 4.84589 4.32987 4.78604 3.90334 4.90009C3.47681 5.01415 3.11296 5.29278 2.89167 5.67484L2.70833 5.9915C2.48772 6.37395 2.42787 6.82831 2.54192 7.25484C2.65598 7.68137 2.93461 8.04521 3.31667 8.2665L3.44167 8.34984C3.69356 8.49526 3.90302 8.70408 4.04921 8.95553C4.1954 9.20698 4.27325 9.49231 4.275 9.78317V10.2082C4.27617 10.5019 4.19971 10.7906 4.05337 11.0453C3.90703 11.2999 3.69601 11.5113 3.44167 11.6582L3.31667 11.7332C2.93461 11.9545 2.65598 12.3183 2.54192 12.7448C2.42787 13.1714 2.48772 13.6257 2.70833 14.0082L2.89167 14.3248C3.11296 14.7069 3.47681 14.9855 3.90334 15.0996C4.32987 15.2136 4.78422 15.1538 5.16667 14.9332L5.29167 14.8665C5.54503 14.7202 5.83244 14.6432 6.125 14.6432C6.41756 14.6432 6.70497 14.7202 6.95834 14.8665L7.31667 15.0748C7.56978 15.221 7.78002 15.4311 7.92628 15.6841C8.07255 15.9372 8.1497 16.2242 8.15 16.5165V16.6665C8.15 17.1085 8.3256 17.5325 8.63816 17.845C8.95072 18.1576 9.37464 18.3332 9.81667 18.3332H10.1833C10.6254 18.3332 11.0493 18.1576 11.3618 17.845C11.6744 17.5325 11.85 17.1085 11.85 16.6665V16.5165C11.8503 16.2242 11.9275 15.9372 12.0737 15.6841C12.22 15.4311 12.4302 15.221 12.6833 15.0748L13.0417 14.8665C13.295 14.7202 13.5824 14.6432 13.875 14.6432C14.1676 14.6432 14.455 14.7202 14.7083 14.8665L14.8333 14.9332C15.2158 15.1538 15.6701 15.2136 16.0967 15.0996C16.5232 14.9855 16.887 14.7069 17.1083 14.3248L17.2917 13.9998C17.5123 13.6174 17.5721 13.163 17.4581 12.7365C17.344 12.31 17.0654 11.9461 16.6833 11.7248L16.5583 11.6582C16.304 11.5113 16.093 11.2999 15.9466 11.0453C15.8003 10.7906 15.7238 10.5019 15.725 10.2082V9.7915C15.7238 9.49782 15.8003 9.20904 15.9466 8.95441C16.093 8.69978 16.304 8.48834 16.5583 8.3415L16.6833 8.2665C17.0654 8.04521 17.344 7.68137 17.4581 7.25484C17.5721 6.82831 17.5123 6.37395 17.2917 5.9915L17.1083 5.67484C16.887 5.29278 16.5232 5.01415 16.0967 4.90009C15.6701 4.78604 15.2158 4.84589 14.8333 5.0665L14.7083 5.13317C14.455 5.27945 14.1676 5.35646 13.875 5.35646C13.5824 5.35646 13.295 5.27945 13.0417 5.13317L12.6833 4.92484C12.4302 4.7787 12.22 4.56857 12.0737 4.31553C11.9275 4.0625 11.8503 3.77544 11.85 3.48317V3.33317C11.85 2.89114 11.6744 2.46722 11.3618 2.15466C11.0493 1.8421 10.6254 1.6665 10.1833 1.6665Z" stroke="#2B2B2B" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M10 12.4998C11.3807 12.4998 12.5 11.3805 12.5 9.99984C12.5 8.61913 11.3807 7.49984 10 7.49984C8.61929 7.49984 7.5 8.61913 7.5 9.99984C7.5 11.3805 8.61929 12.4998 10 12.4998Z" stroke="#2B2B2B" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>Updated -</span> <?php echo get_the_modified_date('M d Y g:i a'); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        } else {
                            echo '<p>No posts found for this author.</p>';
                        }
                        wp_reset_postdata();
                        ?>
                        <!-- Pagination -->
                        <div class="col-12">
                            <div class="pagination">
                                <?php
                                $total_posts = $author_posts->found_posts;
                                //echo $total_posts;
                                // $total_pages = $author_posts->max_num_pages;
                                $total_pages = ceil($total_posts / $per_page);
                               // echo $total_pages;
                                

                                if ($total_pages > 1) {
                                    // Calculate the double previous and double next pages
                                    $double_prev = max(1, $paged - 3);
                                    $double_next = min($total_pages, $paged + 3);

                                    $pagination = paginate_links(array(
                                        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                        'format' => '?paged=%#%',
                                        'current' => max(1, $paged),
                                        'total' => $total_pages,
                                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M15.8935 19.2L17.3599 17.7336L12.5967 12.96L17.3599 8.18635L15.8935 6.71995L9.65346 12.96L15.8935 19.2Z" fill="#1C1C1C"></path></svg>',
                                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M11.3465 6.71997L9.88013 8.18637L14.6433 12.96L9.88013 17.7336L11.3465 19.2L17.5865 12.96L11.3465 6.71997Z" fill="#1C1C1C"></path></svg>',
                                        'type' => 'array' // Return pagination as an array to customize the output
                                    ));

                                    $id = 'here';

                                    if (is_array($pagination)) {
                                        echo '<a href="' . esc_url(get_pagenum_link($double_prev)) . '#' . $id . '">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M18.7738 19.2L20.2402 17.7336L15.477 12.96L20.2402 8.18635L18.7738 6.71995L12.5338 12.96L18.7738 19.2Z" fill="#1C1C1C"></path>
                                <path d="M11.9201 19.2L13.3865 17.7336L8.62327 12.96L13.3865 8.18635L11.9201 6.71995L5.68007 12.96L11.9201 19.2Z" fill="#1C1C1C"></path>
                            </svg>
                          </a>';

                                        foreach ($pagination as $page) {
                                            if (strpos($page, 'current') !== false) {
                                                echo str_replace(array('<span', '</span>'), array('<a class="page-numbers active"', '</a>'), $page);
                                            } else {
                                                preg_match('/href=["\']([^"\']+)/', $page, $matches);
                                                $url = isset($matches[1]) ? $matches[1] : '';

                                                $url_with_anchor = $url . '#' . $id;
                                                $link_with_anchor = str_replace($url, $url_with_anchor, $page);

                                                echo $link_with_anchor;
                                            }
                                        }

                                        echo '<a href="' . esc_url(get_pagenum_link($double_next)) . '#' . $id . '">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M6.90634 6.71997L5.43994 8.18637L10.2031 12.96L5.43994 17.7336L6.90634 19.2L13.1463 12.96L6.90634 6.71997Z" fill="#1C1C1C"></path>
                                <path d="M13.7599 6.71997L12.2935 8.18637L17.0567 12.96L12.2935 17.7336L13.7599 19.2L19.9999 12.96L13.7599 6.71997Z" fill="#1C1C1C"></path>
                            </svg>
                          </a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ********** CBT sec END ********** -->
</main>
<!-- **************** MAIN CONTENT END **************** -->



<?php
get_footer();
?>