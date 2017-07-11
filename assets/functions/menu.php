<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'bullets' ),   // Main nav in header
		'footer-links' => __( 'Footer Links', 'bullets' ) // Secondary nav in footer
	)
);

// The Top Menu
function bullets_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'menu js-menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} 

// The Footer Menu
function bullets_footer_links() {
    wp_nav_menu(array(
        'container' => 'false',                         // Remove nav container
        'menu' => __( 'Footer Links', 'bullets' ),      // Nav name
        'menu_class' => 'menu menu--footer',                         // Adding custom nav class
        'theme_location' => 'footer-links',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => '',                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()                             // Fallback function
    ));
} /* End Footer Menu */

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth=0, $args=array(), $id = 0 ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"menu\">\n";
    }

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $output .= '<li class="menu__item"><a href="' . $item->url . '" class="menu__link"><span>' . esc_attr($item->title);
    }

    function end_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $output .= '</span></a></li>';
    }
}

// Header Fallback Menu
function bullets_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      						// Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                           // Before each link
        'link_after' => ''                             // After each link
	) );
}


// Add active class to menu
function required_active_nav_class( $classes, $item ) {
    if ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );