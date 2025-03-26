<article data-aos="fade-up">
    <header class="entry-header text-center">
        <h1 class="entry-title ">
            <?php the_title(); ?>
        </h1>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <div class="entry-term">
            <?php $term_list = wp_get_post_terms(get_the_id(), 'category'); ?>
            <?php foreach ($term_list as $term): ?>
                <a href="<?php echo get_term_link($term->term_id, 'category'); ?>"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
        </div>
        <span class="entry-date"> <?php _e('Opublikowano', 'go'); ?><b> <?php the_date(); ?></b></span>
        <?php the_post_thumbnail('large', array('alt' => get_the_title(), 'title' => get_the_title()));
        ?>
    </header>
    <div class="entry-content entry-content__wrap">
        <?php echo do_shortcode('[addtoany]'); ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php if (is_single()) :
                get_template_part('templates-parts/parts/author');
            endif; ?>
        </div>

    </div>

</article>