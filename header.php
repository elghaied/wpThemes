
<!doctype html>
<html <?php language_attributes(); ?> >
   <head>
    	<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
   </head>
   <body <?php body_class('medium-content-area sidebar-right medium-body-text large-headings large-icons'); ?>>
       <?php wp_body_open(); ?>

<div id="page" class="site">
    
    <a class="skip-link screen-reader-text" href="#content">
        <span>Skip to content</span>
        <span data-icon="ei-arrow-right"></span>
    </a>

	<header id="masthead" class="site-header" role="banner">
		
        <div class="header-info">
			<h1 class="header-title">Carbon</h1>
			<p class="header-meta">A bold theme for bold bloggers</p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">

            <a href="index.html" class="custom-logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />
            </a>
          
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span data-icon="ei-navicon"></span>
                <span>Menu</span>
            </button>
            
            <div class="menu-wrapper">
                
                <header class="menu-header">
                    <h2 class="menu-title">Menu</h2>
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span data-icon="ei-close"></span>
                        <span class="screen-reader-text">Close Menu</span>
                    </button>
                </header>

              
               
                <?php wp_nav_menu( array(
                    'theme_location'    => 'main',
                    'container'         => '',
                    'container_id'      => 'primary-menu',
                    'menu_class'        => 'sub-menu'
                )); ?>  

                <?php wp_nav_menu( array(
                    'theme_location'    => 'social',
                    'container'         => '',
                    'menu_id'           => 'social-icons',
                    'menu_class'        => 'social-icons'
                )); ?>  

<aside id="menu-widget-area" class="menu-widget-area">
<?php if ( is_active_sidebar( 'nav-sidebar' ) ) : ?>
         <?php dynamic_sidebar( 'nav-sidebar' ); ?>

         <?php endif; ?>
               
</aside>
            </div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
    <div id="content" class="site-content">