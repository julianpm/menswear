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

          <div class="gallery container">
          <?php 

            $images = get_field('home_gallery');

            if( $images ): ?>
                <ul class="homeGallery slider flex">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo $image['url']; ?>">
                                 <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?> 
          <!-- </div> END OF HOMEGALLERY -->         

          <?php endwhile; // end the loop?>

  </div> <!-- /.main -->

<?php get_footer(); ?>