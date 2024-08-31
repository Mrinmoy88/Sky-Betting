<?php
/*
Template Name: blog
*/
get_header();
?>



<section class="inner-banner">
    <img src="<?php the_field('b_banner_image'); ?>" width="1920" height="427" alt="">
    <h1><?php the_field('b_banner_heading'); ?></h1>
    <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><?php the_field('b_breadcrumb_current_page'); ?></li>
    </ul>
</section>
<!-- ********** Banner End ********** -->

<!-- ********** CBT sec START ********** -->
<section class="blog_sec c-padd">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="row g-4">
                <?php
// Set up the query arguments for pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10, // Number of posts per page
    'paged'          => $paged,
);
$query = new WP_Query($args);

// Loop through posts
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
        <div class="col-lg-4 col-sm-6 col-12 blog-col">
            <div class="cbt_box">
                <div class="cbt_img">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('width' => '399', 'height' => '337', 'alt' => get_the_title())); ?>
                        <?php else : ?>
                            <img src="assets/img/inner/default_image.png" width="399" height="337" alt="">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="cbt_txt">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <ul>
                        <li>
                            <div class="cbt_icon">
                            <?php echo get_avatar(get_the_author_meta('ID'), 19); ?>
                                <!-- Admin Text -->
                               
                            </div>
                            <?php echo get_the_author_meta('display_name'); ?>
                        </li>
                        <li>
                            <div class="cbt_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M6.33333 1.5835V4.75016M12.6667 1.5835V4.75016M2.375 7.91683H16.625M6.33333 11.0835H6.34125M9.5 11.0835H9.50792M12.6667 11.0835H12.6746M6.33333 14.2502H6.34125M9.5 14.2502H9.50792M12.6667 14.2502H12.6746M3.95833 3.16683H15.0417C15.9161 3.16683 16.625 3.87571 16.625 4.75016V15.8335C16.625 16.7079 15.9161 17.4168 15.0417 17.4168H3.95833C3.08388 17.4168 2.375 16.7079 2.375 15.8335V4.75016C2.375 3.87571 3.08388 3.16683 3.95833 3.16683Z" stroke="#845700" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                            </div>
                            <?php the_time('F j, Y'); ?>
                        </li>
                    </ul>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
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
    $total_pages = $query->max_num_pages;
    if ($total_pages > 1) : ?>
        <div class="col-12">
            <div class="pagination">
                <?php if ($paged > 1) : ?>
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
                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <a class="<?php if ($i == $paged) echo 'active'; ?>" href="<?php echo get_pagenum_link($i); ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>

                <!-- Next Page Link -->
                <?php if ($paged < $total_pages) : ?>
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
            <div class="col-lg-3 col-md-4">
                <div class="blog_side">
                    <div class="search">
                        <form id="searchForm" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <input type="text" class="searchTerm" name="s" id="searchQuery" placeholder="Search">
                            <button type="submit" class="searchButton">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <path d="M11.9167 20.5833C16.7031 20.5833 20.5833 16.7031 20.5833 11.9167C20.5833 7.1302 16.7031 3.25 11.9167 3.25C7.1302 3.25 3.25 7.1302 3.25 11.9167C3.25 16.7031 7.1302 20.5833 11.9167 20.5833Z" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.7501 22.7501L18.0918 18.0918" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    $b_side_image = get_field('b_side_image');
                    $b_side_logo = get_field('b_side_logo');
                    $b_paragraph_text = get_field('b_paragraph_text');
                    $b_button_url = get_field('b_button_url');
                    $b_button_text = get_field('b_button_text');
                    ?>

                    <div class="blog_side_img">
                        <img src="<?php echo esc_url($b_side_image['url']); ?>" width="400" height="356" alt="">
                        <div class="bs_img_txt">
                            <img src="<?php echo esc_url($b_side_logo['url']); ?>" width="265" height="59" alt="">
                            <p><?php echo $b_paragraph_text; ?></p>
                            <a href="<?php echo $b_button_url; ?>" class="main-btn main-btn1">
                                <span>
                                    <?php echo $b_button_text; ?>
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
                                            <img src="<?php echo esc_url($thumbnail_url); ?>" width="152" height="100" alt="<?php the_title_attribute(); ?>">
                                        </div>
                                        <div class="blog_post_txt">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                            <div class="date">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                    <path d="M7.3335 1.8335V5.50016" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 1.8335V5.50016" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17.4167 3.6665H4.58333C3.57081 3.6665 2.75 4.48732 2.75 5.49984V18.3332C2.75 19.3457 3.57081 20.1665 4.58333 20.1665H17.4167C18.4292 20.1665 19.25 19.3457 19.25 18.3332V5.49984C19.25 4.48732 18.4292 3.6665 17.4167 3.6665Z" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.75 9.1665H19.25" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.3335 12.8335H7.3435" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11 12.8335H11.01" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 12.8335H14.6765" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.3335 16.5H7.3435" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11 16.5H11.01" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14.6665 16.5H14.6765" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape3.png" alt="" class="blog_shape3">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape4.png" alt="" class="blog_shape4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape5.png" alt="" class="blog_shape5">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape6.png" alt="" class="blog_shape6">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape7.png" alt="" class="blog_shape7">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner/blog_shape8.png" alt="" class="blog_shape8">
</section>
<!-- ********** CBT sec END ********** -->


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