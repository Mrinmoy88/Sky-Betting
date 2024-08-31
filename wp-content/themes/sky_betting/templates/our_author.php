<?php
/*
Template Name: Our Author
*/
get_header();

?>
<style>
    /* body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px;
    } */

    #searchResults {
        max-height: 200px;
        /* Set the maximum height for the container */
        overflow-y: auto;
        /* Enable vertical scrolling if the content exceeds the max height */
        border: 1px solid #ccc;
        /* Optional: Add a border for styling */
        padding: 10px;
        /* Optional: Add some padding for spacing */
        background-color: #f9f9f9;
        /* Optional: Background color */
    }

    /* Optional: Style the list inside the container */
    #searchResults ul {
        list-style: none;
        /* Remove bullet points */
        padding: 0;
        margin: 0;
    }

    #searchResults li {
        margin: 5px 0;
        /* Add space between list items */
    }

    #searchResults a {
        text-decoration: none;
        color: #0073aa;
        /* Link color */
    }

    #searchResults a:hover {
        color: #005177;
        /* Darken color on hover */
    }
</style>

<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- ********** Banner START ********** -->
    <section class="inner-banner">
        <img src="<?= the_field('author_banner', 'option') ?>" width="1920" height="427" alt="">
        <h1><?= the_title() ?></h1>
        <ul>
            <li><a href="<?= site_url('/') ?>">Home</a></li>
            <li><?= the_title() ?></li>
        </ul>
    </section>
    <!-- ********** Banner End ********** -->

    <!-- ********** CBT sec START ********** -->
    <section class="author_sec c-padd">
        <div class="container-fluid">
            <div class="row g-4" id="here">
                <div class="col-12">
                    <div class="search">
                        <form id="searchForm">
                            <input type="text" class="searchTerm" id="searchQuery" placeholder="What are you looking for?">
                            <div id="searchResults" style="display:none;"></div>
                            <button type="submit" class="searchButton">
                                <!-- Search Button SVG -->
                            </button>
                        </form>
                    </div>
                </div>



                <?php
                // Pagination setup
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $authors_per_page = 24; // Number of authors to display per page

                // Get all users with the role of 'author'
                $args = array(
                    'role__in' => array('author'),
                    'orderby' => 'display_name',
                    'order' => 'ASC',
                    'number' => $authors_per_page,
                    'paged' => $paged
                );
                $author_query = new WP_User_Query($args);
                $authors = $author_query->get_results();

                if (!empty($authors)) {
                    foreach ($authors as $author) {
                        //print_r($author);
                        //echo $author->user_nicename;
                ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <a href="<?= esc_url(get_author_posts_url($author->ID)) ?>">
                                <!-- <a href="<?= site_url('/author-profile/'.$author->user_nicename) ?>"> -->
                                    <div class="author_box">
                                        <img src="<?= get_avatar_url($author->ID, array('size' => 123)); ?>" width="123" height="123" alt="" class="author_img">
                                        <a href="<?= esc_url(get_author_posts_url($author->ID)) ?>">
                                            <h3><?= esc_html($author->display_name) ?></h3>
                                        </a>
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
                                                echo esc_html($total_views) . ' reads';
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                        </div>
                <?php
                    }
                } else {
                    echo 'No authors found.';
                }
                ?>


                <!-- Pagination -->
                <div class="col-12">
                    <div class="pagination">
                        <?php
                        // Total number of authors
                        $total_authors = $author_query->get_total();
                        $total_pages = ceil($total_authors / $authors_per_page);

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

                            echo '<a href="' . esc_url(get_pagenum_link($double_prev)) . '#here"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M18.7738 19.2L20.2402 17.7336L15.477 12.96L20.2402 8.18635L18.7738 6.71995L12.5338 12.96L18.7738 19.2Z" fill="#1C1C1C"></path><path d="M11.9201 19.2L13.3865 17.7336L8.62327 12.96L13.3865 8.18635L11.9201 6.71995L5.68007 12.96L11.9201 19.2Z" fill="#1C1C1C"></path></svg></a>';
                            // Display pagination


                            foreach ($pagination as $page) {
                                // Check if the page link contains the current page number and add the 'active' class
                                if (strpos($page, 'current') !== false) {
                                    // echo str_replace('page-numbers current', 'page-numbers active', $page);
                                    echo str_replace(array('<span', '</span>'), array('<a class="page-numbers active"', '</a>'), $page);
                                } else {

                                    // Get the URL from the link
                                    preg_match('/href=["\']([^"\']+)/', $page, $matches);
                                    $url = isset($matches[1]) ? $matches[1] : '';

                                    // Append the #here anchor to the URL
                                    $url_with_anchor = $url . '#' . $id;

                                    // Replace the original URL with the modified URL in the link
                                    $link_with_anchor = str_replace($url, $url_with_anchor, $page);

                                    // Output the modified link
                                    echo $link_with_anchor;
                                }
                            }

                            echo '<a href="' . esc_url(get_pagenum_link($double_next)) . '#here"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M6.90634 6.71997L5.43994 8.18637L10.2031 12.96L5.43994 17.7336L6.90634 19.2L13.1463 12.96L6.90634 6.71997Z" fill="#1C1C1C"></path><path d="M13.7599 6.71997L12.2935 8.18637L17.0567 12.96L12.2935 17.7336L13.7599 19.2L19.9999 12.96L13.7599 6.71997Z" fill="#1C1C1C"></path></svg></a>';
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ********** CBT sec END ********** -->
</main>
<!-- **************** MAIN CONTENT END **************** -->




<script>
    document.getElementById('searchForm').addEventListener('submit', function(e) {
        e.preventDefault();
        var query = document.getElementById('searchQuery').value;
        var resultsContainer = document.getElementById('searchResults');

        if (query.trim() !== '') {
            fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        action: 'ajax_author_search', // Updated action name
                        s: query
                    })
                })
                .then(response => response.text())
                .then(data => {
                    resultsContainer.style.display = 'block';
                    resultsContainer.innerHTML = 'Result Found:' + data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = 'Please provide some input!';
        }
    });
</script>

<?php
get_footer();
?>