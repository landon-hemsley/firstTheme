<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php

    echo get_single_post_byline();
    
    if(is_active_sidebar('lmh-single')) dynamic_sidebar('lmh-single');
    
    if(has_post_thumbnail(get_the_ID()) && !is_single_paged() ):
?>            
        <figure class="single-featured-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-hero'); ?>" />
<?php
            $caption = get_post(get_post_thumbnail_id())->post_excerpt;
            if($caption) echo sprintf('<figcaption>%s</figcaption>', $caption);
?>
        </figure>
<?php
    endif;
    printf('<div class="%s">%s</div>',
        "single-content",
        apply_filters('the_content', get_the_content()) 
    );
    wp_link_pages(array(
        'before'            =>  '<p class="elegance-single-pagination">',
        'after'             =>  '</p>',
        'next_or_number'    =>  'next'
    ));
?>
</article>
