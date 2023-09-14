<?php
/*
Plugin Name: Page Visit Counter
Description: A simple plugin to count page visits and display active users.
Version: 1.0
Author: Bhavya Gupta
*/

// Function to initialize the page visit counter and time tracking
function initialize_page_visit_counter() {
    $current_page_id = get_the_ID(); // Get the current page or post ID
    $visits = get_post_meta($current_page_id, 'page_visit_counter', true); // Get the visit count from post meta

    // If the visit count is empty (first visit), initialize it to 0
    if (empty($visits)) {
        $visits = 0;
        add_post_meta($current_page_id, 'page_visit_counter', $visits, true); // Add the initial visit count to post meta
    }

    // Enqueue JavaScript for time tracking
    wp_enqueue_script('time-tracking', plugin_dir_url(__FILE__) . 'time-tracking.js', array('jquery'), '1.0', true);
}
add_action('wp', 'initialize_page_visit_counter'); // Hook to WordPress to run this function during initialization

// Function to display the page visit counter, active users, and time spent
function display_page_visit_counter() {
    $current_page_id = get_the_ID(); // Get the current page or post ID
    $visits = get_post_meta($current_page_id, 'page_visit_counter', true); // Get the visit count from post meta
    echo "Number of times this page was visited: " . esc_html($visits); // Escape output
}

// Function to increment the page visit counter
function increment_page_visit_counter() {
    if (is_single() || is_page()) { // Check if the current context is a single post or a page
        $current_page_id = get_the_ID(); // Get the current page or post ID
        $visits = get_post_meta($current_page_id, 'page_visit_counter', true); // Get the visit count from post meta
        $visits++; // Increment the visit count by 1
        update_post_meta($current_page_id, 'page_visit_counter', $visits); // Update the visit count in post meta
        display_page_visit_counter(); // Display the updated visit count and active users
    }
}
add_action('wp', 'increment_page_visit_counter'); // Hook to WordPress to run this function during initialization

// Function to reset the visit count for a specific page or post (for administrators)
function reset_visit_count() {
    if (current_user_can('manage_options') && isset($_GET['reset_visit_count'])) {
        $current_page_id = get_the_ID(); // Get the current page or post ID
        update_post_meta($current_page_id, 'page_visit_counter', 0); // Reset the visit count to 0
        echo '<div class="updated"><p>Visit count has been reset to 0.</p></div>';
    }
}

// Add a "Reset Visit Count" button to the page or post editor (for administrators)
function add_reset_button() {
    global $post;
    if (current_user_can('manage_options') && is_single() || is_page()) {
        echo '<a href="' . add_query_arg('reset_visit_count', 'true', get_permalink($post->ID)) . '" class="button">Reset Visit Count</a>';
    }
}

add_action('admin_init', 'reset_visit_count'); // Hook to WordPress admin to reset visit count
add_action('edit_form_after_title', 'add_reset_button'); // Hook to add the button to the post editor

?>
