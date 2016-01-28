<?php get_header();  ?>

  <div class="main">

        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <div class="stuff container">
            
            <?php if ( get_field("home_title") ) : ?>
              <?php the_field("home_title") ; ?>
            <?php endif; ?>

          </div>

        <?php endwhile; // end the loop?>

  </div> <!-- /.main -->

<?php get_footer(); ?>