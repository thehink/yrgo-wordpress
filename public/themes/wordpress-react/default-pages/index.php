<?php

// programmatically create some basic pages, and then set Home and Blog
// setup a function to check if these pages exist
function the_slug_exists($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM ". $wpdb->posts ." WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}

// change the Sample page to the home page
if (isset($_GET['activated']) && is_admin()){
    $home_page_title = 'Home';
    $home_page_content = '';
    $home_page_check = get_page_by_title($home_page_title);
    $home_page = array(
	    'post_type' => 'page',
	    'post_title' => $home_page_title,
	    'post_content' => $home_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'home'
    );

    if(!isset($home_page_check->ID) && !the_slug_exists('home')){
        $home_page_id = wp_insert_post($home_page);
    }
}

// create the blog page
if (isset($_GET['activated']) && is_admin()){
    $about_page_title = 'About';
    $about_page_content = '';
    $about_page_check = get_page_by_title($about_page_title);
    $about_page = array(
	    'post_type' => 'page',
	    'post_title' => $about_page_title,
	    'post_content' => $about_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'about'
    );

    if(!isset($about_page_check->ID) && !the_slug_exists('about')){
        $about_page_id = wp_insert_post($about_page);
    }
}
// create the site map page
if (isset($_GET['activated']) && is_admin()){
    $contact_page_title = 'Contact';
    $contact_page_check = get_page_by_title($contact_page_title);
    $contact_page = array(
	    'post_type' => 'page',
	    'post_title' => $contact_page_title,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'site-map'
    );
    if(!isset($contact_page_check->ID) && !the_slug_exists('contact')){
        $contact_page_id = wp_insert_post($contact_page);
    }
}

if (isset($_GET['activated']) && is_admin()){
	// Set the blog page
	// $blog = get_page_by_title( 'Blog' );
	// update_option( 'page_for_posts', $blog->ID );
    //
	// // Use a static front page
	// $front_page = 2; // this is the default page created by WordPress
	// update_option( 'page_on_front', $front_page );
	// update_option( 'show_on_front', 'page' );
}
