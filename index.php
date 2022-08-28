<?php get_header(); ?>
<main role="main" class="container">
<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
<?php endwhile; else: ?>
<p>There no posts to show</p>
<?php endif; ?>
</div>
</main>
    
<?php get_footer(); ?>
