<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
        <?php 
          if( have_posts() ) {
            while (have_posts()){
              // the_post();
              // the_title();
              ?>
              <article class="blog-post">
                <h3><?php the_title(); ?></h3>
                
                <p>
                  Posted on 
                  <a href="<?php echo get_day_link(); ?>">
                    <?php the_time('F j, Y g:i a'); ?> 
                  </a>
                  by 
                  <a href="<?php 
                    $author_id = get_the_author_meta('ID');
                    $author_nickname = get_the_author_meta('user_nicename');
                    echo get_author_posts_url($author_id, $author_nickname); 
                  ?>">
                    <?php the_author(); ?>
                  </a>
                </p>

              <?php 
                echo get_avatar("david.c.dales@gmail.com", 96);
              ?>
              <?php the_excerpt(); ?>
                
              </article>
              <?php
              }
            }
        ?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>