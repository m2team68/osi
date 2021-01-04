<form class="search-form" action=" <?php echo esc_url(get_home_url('/')); ?>" method="get">
  <div class="input-group">
    <input type="search" class="input-round form-control" placeholder="<?php  esc_attr_e('Search','jonny'); ?>" name="s" title="<?php  esc_attr_e('Search for:','jonny'); ?>">
    <span class="input-group-btn">
      <button class="btn" type="submit"><span class="icon-arrow-right"></span></button>
    </span>
  </div>
</form>