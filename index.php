<?php get_header() ?>





<center>
  <h1>index sida</h1>
<?php if ( have_posts()) : ?>

<div class="posts">
 
    <?php  while(have_posts()) : ?>

    <?php the_post(); ?>


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

<?php get_footer() ?>