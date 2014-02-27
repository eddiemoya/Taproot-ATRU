<?php

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
         $items .= '<li id="nav-search">' . get_search_form(  false) . '</li>';

    return $items;
}