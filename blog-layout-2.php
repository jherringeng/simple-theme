<?php
/* Template Name: Blog Layout 2 */
?>

<?php get_header(); ?>

<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<div class="container">
  <div id="ttr_main" class="row">
    <?php if (have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

      <div class="col-md-3 card-container">
        <div class="card-sl">
          <div class="card-image">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>" class="img-fluid"></a>
          </div>
          <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
          <div class="card-heading">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="card-text">
              <?php the_excerpt(); ?>
          </div>
          <div class="card-text">
              <b><?php the_time('F jS, Y') ?></b>
          </div>
          <a href="<?php the_permalink(); ?>" class="card-button">Read More</a>
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
