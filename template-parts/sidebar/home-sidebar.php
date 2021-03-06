<div class="row">
    <div class="col-xs-12">
        <?php get_search_form(); ?>
    </div>
</div>
<div class="row lmh-home-sidebar">
    <div class="col-sm-4 lmh-home-sidebar-cell">
        <h2><?php _e('Post categories', 'elegance'); ?></h2>
        <ul class="lmh-home-sidebar-list">
            <?php 
                wp_list_categories(array(
                    'orderby' => 'name',
                    'show_count' => 1,
                    'style' => ''
                ));
            ?>
        </ul>
    </div>
    <div class="col-sm-4 lmh-home-sidebar-cell">
        <h2><?php _e('Blog archives', 'elegance'); ?></h2>
        <ul class="">
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
    <div class="col-sm-4 lmh-home-sidebar-cell">
        <?php 
            if(is_active_sidebar('lmh-home-page')){
                dynamic_sidebar('lmh-home-page');
            } 
        ?>
    </div>
</div>
