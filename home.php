<!-- Header here -->
<?php get_header(); ?>


<main id="primary" class="content-area" role="main">
    <?php if ( have_posts() ) { ?>
        
        <?php while ( have_posts() ) {
            the_post(); ?>
            <?php get_template_part('template-parts/posts-list'); ?>
        <?php }
        // posts_nav_link(' // ', 'Nouveaux articles la classe', 'Vieux articles perraves');
        the_posts_pagination();
    } else { ?>
        <h1>Pas de blog !!</h1>
        <p>Pierre-Yves n'a pas fait son travail ! Il n'a pas rédigé d'articles !</p>
    <?php } ?>
    </main>   
       
    <aside id="secondary" class="widget-area" role="complementary">
  
<?php get_sidebar(); ?>
</aside><!-- #secondary -->

<?php get_footer(); ?>
    <!-- footer here  -->