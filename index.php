<?php get_header(); ?>
<div class="container">
  <div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
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
