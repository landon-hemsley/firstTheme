<?php
get_header();
?>
<div class="row side-padded;">
    <div class="col-sm-8 col-md-9 single-body">
    <?php 
        if ( have_posts() ) { 
            while ( have_posts() ) {
                the_post();
                get_template_part('template-parts/single/content', get_post_format(get_the_ID()));
            }
            echo "<div class='elegance-single-post-meta'>";
                elegance_post_links();
                elegance_post_categories();
                the_tags('<div class="elegance-tag-list"><span class="elegance-tag glyphicon glyphicon-tags">',
                '</span><span class="elegance-tag glyphicon glyphicon-tags">',
                '</span></div>');
            echo "</div>";
        }
        if(comments_open() || get_comments_number()) comments_template();
    ?>
    </div>
    <div class="col-sm-4 col-md-3 single-sidebar"><?php get_sidebar();?></div>
</div>
<?php
get_footer();

