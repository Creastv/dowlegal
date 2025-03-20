<?php
/* Template Name: Wide narrow
 * Template Post Type: page
 * 
 * */
get_header(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry page">
    <?php get_template_part('templates-parts/header/header', 'title'); ?>
    <div class="entry-content">
        <div class="container-narrow">
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php get_footer();
