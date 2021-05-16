<?php
/* Template Name: ContactPage */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="jumbotron" style='background-image: url("<?= get_template_directory_uri()?>/images/banner_leader.jpg"); background-size: cover;'>
    <h4 class="display-4"><?php the_title(); ?></h4>
  </div>
<?php endwhile; ?>
<?php endif; ?>

<div class="container contact">
  <div id="ttr_main" class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(__('(more...)')); ?></p>
      </div>
    <?php endwhile; endif; ?>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <img class="img-fluid rounded" src="<?= get_template_directory_uri() . '/images/profile-jah.jpg' ?>">
    </div>
    <div>

    </div>
  </div>
</div>

<?php get_footer(); ?>
