<?php
/* Template Name: Blog Layout 1 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="jumbotron" style='background-image: url("<?= get_template_directory_uri()?>/images/<?= misha_text_field_html() ?>"); background-size: cover;'>
    <h4 class="display-4"><?php the_title(); ?></h4>
  </div>
<?php endwhile; ?>
<?php endif; ?>

<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<div class="container">
  <div id="ttr_main" class="row">
    <?php if (have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

      <div class="col-lg-4 mb-4">
        <div class="card">
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
          <a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>" class="card-img-top"></a>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
            <p class="card-text"><b><?php the_time('F jS, Y') ?></b></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More</a>
           <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
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
