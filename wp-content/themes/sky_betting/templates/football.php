<?php 
/*
Template Name: football
*/
get_header();
?>


<!-- ********** Banner START ********** -->
<section class="inner-banner">
    <img src="<?php the_field('f_banner_image'); ?>" width="1920" height="427" alt="">
    <h1><?php the_field('f_banner_heading'); ?></h1>
    <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><?php the_field('f_breadcrumb_current_page'); ?></li>
    </ul>
</section>

        <!-- ********** Banner End ********** -->

        <!-- ********** CBT sec START ********** -->
        <section class="cbt_sec c-padd">
    <div class="container-fluid">
        <div class="row g-4">
        <?php
// Define the number of posts per page
$posts_per_page = 8;

// Get the current page number
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query for posts in the 'cricket-betting-tips' category
$query = new WP_Query(array(
    'category_name' => 'cricket-betting-tips',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
));

// Get the total number of pages
$total_pages = $query->max_num_pages;

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post();
        // Post loop content here (similar to what you had above)
        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $post_date = get_the_date('F j, Y');
        ?>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="cbt_box">
                <div class="cbt_img">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($thumbnail); ?>" width="399" height="337" alt="<?php the_title_attribute(); ?>">
                    </a>
                </div>
                <div class="cbt_txt">
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <ul>
                        <li>
                            <div class="cbt_icon">
                                <?php echo get_avatar(get_the_author_meta('ID'), 19); ?>
                            </div>
                            <?php echo get_the_author_meta('display_name'); ?>
                        </li>
                        <li>
                            <div class="cbt_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M6.33333 1.5835V4.75016M12.6667 1.5835V4.75016M2.375 7.91683H16.625M6.33333 11.0835H6.34125M9.5 11.0835H9.50792M12.6667 11.0835H12.6746M6.33333 14.2502H6.34125M9.5 14.2502H9.50792M12.6667 14.2502H12.6746M3.95833 3.16683H15.0417C15.9161 3.16683 16.625 3.87571 16.625 4.75016V15.8335C16.625 16.7079 15.9161 17.4168 15.0417 17.4168H3.95833C3.08388 17.4168 2.375 16.7079 2.375 15.8335V4.75016C2.375 3.87571 3.08388 3.16683 3.95833 3.16683Z" stroke="#845700" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <?php echo esc_html($post_date); ?>
                        </li>
                    </ul>
                    <p><?php the_excerpt(); ?></p>
                    <div class="cbt_btn">
                        <a href="<?php the_permalink(); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M8.16675 8.1665H19.8334M19.8334 8.1665V19.8332M19.8334 8.1665L8.16675 19.8332" stroke="#2B2B2B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;

    // Pagination section
    if ($total_pages > 1): ?>
        <div class="col-12">
            <div class="pagination">
                <?php if ($paged > 1): ?>
                    <!-- First Page Link -->
                    <a href="<?php echo get_pagenum_link(1); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <path d="M18.7738 19.2L20.2402 17.7336L15.477 12.96L20.2402 8.18635L18.7738 6.71995L12.5338 12.96L18.7738 19.2Z" fill="#1C1C1C"/>
                                    <path d="M11.9201 19.2L13.3865 17.7336L8.62327 12.96L13.3865 8.18635L11.9201 6.71995L5.68007 12.96L11.9201 19.2Z" fill="#1C1C1C"/>
                                </svg>
                    </a>
                    <!-- Previous Page Link -->
                    <a href="<?php echo get_pagenum_link($paged - 1); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <path d="M15.8935 19.2L17.3599 17.7336L12.5967 12.96L17.3599 8.18635L15.8935 6.71995L9.65346 12.96L15.8935 19.2Z" fill="#1C1C1C"/>
                                </svg>
                    </a>
                <?php endif; ?>

                <!-- Pagination Numbers -->
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a class="<?php if ($i == $paged) echo 'active'; ?>" href="<?php echo get_pagenum_link($i); ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>

                <!-- Next Page Link -->
                <?php if ($paged < $total_pages): ?>
                    <a href="<?php echo get_pagenum_link($paged + 1); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <path d="M11.3465 6.71997L9.88013 8.18637L14.6433 12.96L9.88013 17.7336L11.3465 19.2L17.5865 12.96L11.3465 6.71997Z" fill="#1C1C1C"/>
                                </svg>
                    </a>
                    <!-- Last Page Link -->
                    <a href="<?php echo get_pagenum_link($total_pages); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <path d="M6.90634 6.71997L5.43994 8.18637L10.2031 12.96L5.43994 17.7336L6.90634 19.2L13.1463 12.96L6.90634 6.71997Z" fill="#1C1C1C"/>
                                    <path d="M13.7599 6.71997L12.2935 8.18637L17.0567 12.96L12.2935 17.7336L13.7599 19.2L19.9999 12.96L13.7599 6.71997Z" fill="#1C1C1C"/>
                                </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif;

    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>

        </div>
    </div>
</section>



<?php 
get_footer();

?>