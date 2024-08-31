<?php
// Theme setup function
function sky_betting_theme_setup()
{
    // Add support for dynamic title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));


    // Add support for HTML5 features
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    // Add support for custom header
    // add_theme_support('custom-header', array(
    //     'default-image' => get_template_directory_uri() . '/assets/images/header.jpg',
    //     'width'         => 1600,
    //     'height'        => 400,
    //     'flex-height'   => true,
    //     'flex-width'    => true,
    // ));
}

// Hook the theme setup function
add_action('after_setup_theme', 'sky_betting_theme_setup');

function sky_betting_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sky-betting'),
        'footer' => __('Footer Menu', 'sky-betting'),
    ));
}
add_action('init', 'sky_betting_register_menus');




if (function_exists('acf_add_options_page')) {
    acf_add_options_page();

    acf_add_options_page(array(
        'page_title' => 'Admin Logo Settings',
        'menu_title' => 'Admin Logo',
        'menu_slug'  => 'admin-logo-settings',
        'capability' => 'manage_options',
        'redirect'   => false

    ));
}

function sky_betting_add_active_class_to_anchor($item_output, $item, $depth, $args)
{
    // Check if this is the primary menu
    if ($args->theme_location == 'primary') {
        // Check if the current menu item
        if (in_array('current-menu-item', $item->classes)) {
            // Add 'active' class to the anchor tag
            $item_output = str_replace('<a ', '<a class="active" ', $item_output);
        }
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'sky_betting_add_active_class_to_anchor', 10, 4);

add_action('wp_ajax_ajax_search', 'handle_ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'handle_ajax_search');

function handle_ajax_search()
{
    if (isset($_POST['s'])) {
        $query = sanitize_text_field($_POST['s']);
        $args = array(
            's' => $query,
            'post_type' => 'post', // Adjust this to include custom post types if needed
            'posts_per_page' => 10
        );

        $search_query = new WP_Query($args);

        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
                $search_query->the_post();
?>
                <div class="search-result-item">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
            <?php
            }
        } else {
            echo '<p>No results found.</p>';
        }

        wp_die(); // This is required to terminate immediately and return a proper response
    }
}

//add_action('init', 'flush_rewrite_rules');

function ajax_author_search()
{
    if (isset($_POST['s'])) {
        $search_query = sanitize_text_field($_POST['s']);

        // Search for authors
        $author_query = new WP_User_Query(array(
            'search'         => '*' . esc_attr($search_query) . '*',
            'role__in' => array('author'),
            'search_columns' => array('display_name', 'user_nicename'),
            'number'         => 5, // Limit the number of results
            'fields'         => array('ID', 'display_name'),
        ));

        if (!empty($author_query->get_results())) {
            echo '<ul>';
            foreach ($author_query->get_results() as $author) {
                echo '<li><a href="' . get_author_posts_url($author->ID) . '">' . esc_html($author->display_name) . '</a></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No authors found.</p>';
        }
    }

    wp_die(); // Terminate the script
}

// Use a unique action name
add_action('wp_ajax_ajax_author_search', 'ajax_author_search');
add_action('wp_ajax_nopriv_ajax_author_search', 'ajax_author_search');

function track_last_page()
{
    if (!is_admin() && !is_page() && !is_single()) {
        // Only track pages and posts, not admin or other special pages
        if (!session_id()) {
            session_start();
        }
        $_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
    }
}
add_action('template_redirect', 'track_last_page');


function ajax_webstories_search()
{
    if (isset($_POST['s'])) {
        $query = sanitize_text_field($_POST['s']);
        $args = array(
            's' => $query,
            'post_type' => 'web-story', // Adjust this to include custom post types if needed
            'posts_per_page' => 10
        );

        $search_query = new WP_Query($args);

        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
                $search_query->the_post();
            ?>
                <p class="search-result-item">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>

                    </a>
                </p>
<?php
            }
        } else {
            echo '<p>No results found.</p>';
        }

        wp_die(); // This is required to terminate immediately and return a proper response
    }
}

// Use a unique action name
add_action('wp_ajax_ajax_webstories_search', 'ajax_webstories_search');
add_action('wp_ajax_nopriv_ajax_webstories_search', 'ajax_webstories_search');
