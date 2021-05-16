<?php
/* Template Name: About Page */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="jumbotron" style='background-image: url("<?= get_template_directory_uri()?>/images/<?= misha_text_field_html() ?>"); background-size: cover;'>
    <h4 class="display-4"><?php the_title(); ?></h4>
  </div>
<?php endwhile; ?>
<?php endif; ?>

<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

<div class="card-group">
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="card">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>" class="card-img-top"></a>
      <div class="card-body">
        <a href="<?php the_permalink() ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
        <p class="card-text"><?php the_excerpt(__('(more…)')); ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  <?php
  endwhile;
  wp_reset_postdata();
  ?>
</div>

<?php get_footer(); ?>
