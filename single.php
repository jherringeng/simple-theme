
<?php get_header(); ?>
<div class="container">
  <div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-9 col-sm-9 col-md-9 col-xs-12">

      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="blog-content col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="blog-image-container">
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <img src="<?php echo $url ?>" class="img-fluid rounded blog-image">
              <div class="blog-text-container"><h2><?php the_title(); ?></h2></div>
            </div>
            <h6>Posted on <?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a></h6>
            <p><?php the_content(__('(more...)')); ?></p>
            <?php if ( comments_open() || get_comments_number() ) :
          		comments_template();
          	endif; ?>
        <?php endwhile; ?>
            <div class="blog-buttons">
              <button class="btn btn-primary btn-blog-iterator"><?= get_previous_post_link(); ?></button>
              <button class="btn btn-primary btn-blog-iterator"><?= get_next_post_link(); ?></button>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div id="ttr_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="sticky-top">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
