<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>" class="img-fluid rounded"></a>
  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
  <h6>Posted on <?php the_time('F jS, Y') ?></h6>
  <p><?php the_excerpt(); ?></p>
</div>
