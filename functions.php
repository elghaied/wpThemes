<?php
function pe_enqueue_stylesheets() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,700,700i|Space+Mono&display=swap', array(), null);
    wp_enqueue_style( 'carbon', get_template_directory_uri() . '/css/style.css', array('fonts'), null);
    wp_enqueue_style( 'jsdelivr', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css', array('fonts'), null);
	wp_enqueue_script( 'jsdelivr-js', 'https://cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js', array(), null, false );

	wp_enqueue_script( 'detection', get_template_directory_uri() . '/js/detection.js', array(), null, false );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
	wp_enqueue_script( 'skip-link-focus-fix.js', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), null, true );


    
}
add_action( 'wp_enqueue_scripts', 'pe_enqueue_stylesheets' );

add_theme_support( 'title-tag' );
add_theme_support( 'menu' );

/* Déclarer des emplacements de menu */
register_nav_menus( array(
    'main'      => 'Menu Principal',
    'social'    => 'Réseaux sociaux'
) );

/* sidebars */
register_sidebar( array(
	'id'    => 'footer-sidebar-1',
	'name'  => 'Pied de page #1',
	'before_widget' => '<section  class="widget">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id'    => 'footer-sidebar-2',
	'name'  => 'Pied de page #2',
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id'    => 'footer-sidebar-3',
	'name'  => 'Pied de page #3',
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

// nav

register_sidebar( array(
	'id'    => 'nav-sidebar',
	'name'  => 'nav-sidebar',
	'before_widget' => '<aside class="widget menu-widget">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

// footer 

register_sidebar( array(
	'id'    => 'bottom-sidebar-1',
	'name'  => 'bottom sidebar 1#',
	'before_widget' => '<section  id="%1$s" class="footer-widget widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id'    => 'bottom-sidebar-2',
	'name'  => 'bottom sidebar 2#',
	'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id'    => 'bottom-sidebar-3',
	'name'  => 'bottom sidebar 3',
	'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="h5 widget-title">',
	'after_title'   => '</h2>'
) );