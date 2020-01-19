<article class="post hentry">
   <div class="entry-header"> 
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
     <p class="entry-meta"> <span class="byline"> Posted in <a href=""> <?php the_category( ' ' ); ?> </a> on <a href=""> <?php echo get_the_date(); ?> </a> </span> </p>
    </div> 
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" title="Lire la suite de <?php the_title(); ?>" class="readmore">Lire la suite</a>
</article>