</div><!-- #content -->

<footer id="colophon" class="site-footer" >

    <aside id="footer-widget-area" class="footer-widget-area" role="complementary">
    
<div class="footer-widgets">
    <?php if ( is_active_sidebar( 'bottom-sidebar-1' ) ) : ?>
    
    <?php dynamic_sidebar( 'bottom-sidebar-1' ); ?>

<?php endif; ?>
<?php if ( is_active_sidebar( 'bottom-sidebar-2' ) ) : ?>

    <?php dynamic_sidebar( 'bottom-sidebar-2' ); ?>

    <?php endif; ?>
    
<?php if ( is_active_sidebar( 'bottom-sidebar-3' ) ) : ?>

    <?php dynamic_sidebar( 'bottom-sidebar-3' ); ?>

    <?php endif; ?>

    </div>
    </aside>
    <?php wp_footer(); ?>
</footer> 


</body>
</html>
