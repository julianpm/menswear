<?php get_header();  ?>

  <div class="main">
    <div class="container">

      <div class="content">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <div class="stuff">
            
            <?php if ( get_field("home_title") ) : ?>
              <?php the_field("home_title") ?>
            <?php endif; ?>

          </div>

        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->

    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>