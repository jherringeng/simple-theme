<?php
/* Template Name: Blog Layout 3 */
?>

<?php get_header(); ?>

<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<div class="container">
  <div id="ttr_main" class="row">
    <?php if (have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
      <div class="col-md-6 col-lg-4 pb-3">
        <div class="card card-custom bg-white border-white border-0">
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
          <div class="card-custom-img" style="background-image: url(<?php echo $url ?>);"></div>
          <!-- <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div> -->
          <div class="card-body" style="overflow-y: auto">
            <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <div class="card-text">
                <b><?php the_time('F jS, Y') ?></b>
            </div>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    <?php endwhile;
      wp_reset_postdata();
    else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
