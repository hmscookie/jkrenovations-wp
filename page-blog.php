<?php get_header(); ?>
<nav class="wrapper">
      <ul>
        <li><a href="http://localhost:3000/jkRenovation/">HOME</a></li>
    </ul>
</nav>
<main class="wrapper">
  <div class="wrapper blog-post">
    <div>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h1><?php the_field('blog'); ?> </h1>
            
            <?php // Start the individual posts  ?>
            <?php while(have_rows('blog_title')) : the_row(); 
             ?>
            <div class="individual-post">
                <?php $postimage = get_sub_field('post_image') ?>
                <img src="<?php echo $postimage['url'] ?>" alt="">
                <h3><?php the_sub_field('post_title') ?></h3>
                <p><?php the_sub_field('post_date') ?></p>
                <p><?php the_sub_field('post_blurb') ?></p>
              <?php endwhile ?>
            </div>
            
    </div> <!-- /,content -->
    <?php endwhile; // end the loop?>

  </div> <!-- /.wrapper -->
</main> <!-- /.main -->

<?php get_footer(); ?>