<article class="post <?php echo $post->ID; ?>">
    <header class="post__img">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail($post->ID)) : ?>
                <?php the_post_thumbnail('post-futured', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?> ">
            <?php endif; ?>
        </a>
    </header>
    <div class="post__content">
        <div class="entry-term">
            <?php $term_list = wp_get_post_terms(get_the_id(), 'category'); ?>
            <?php foreach ($term_list as $term): ?>
                <a href="<?php echo get_term_link($term->term_id, 'category'); ?>"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
        </div>
        <h2 class="entry-title ">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p class="entry-content"><?php echo custom_excerpt(30); ?></p>
    </div>
</article>