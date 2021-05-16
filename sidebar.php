<div class="sidebar-container">
  <div>
    <h4><?php _e('Categories'); ?></h4>
    <ul> <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
  </div>
  <div>
    <h4><?php _e('Archives'); ?></h4>
    <ul > <?php wp_get_archives(); ?> </ul>
  </div>
</div>
