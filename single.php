<?php get_header();?>

     
<center>
<h1>single</h1
<?php if ( have_posts()) : ?>

<div class="posts">

    <?php  while(have_posts()) : ?>

    <?php the_post(); ?>

    <div class="posts_post">

    <h2> <?=the_title();?></h2>
    
    </div>
    <div class="post_content">
    <?=the_content();?>
  

    
    </div>
    
    
<hr>
 
  
    <?php endwhile; ?>

</div>

  <?php else: ?>
    <h1> kom tillbaka senare!</h1>
  <?php endif; ?>






 </center>  

 <?php get_footer();?>

