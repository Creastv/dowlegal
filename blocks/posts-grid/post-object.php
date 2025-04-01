<?php
$featured_posts = get_field('posty');
$col = get_field('kolumny');


if ($featured_posts): ?>
    <section class="posts-grid">
        <div class="posts-selected posts-selected--<?php echo $col; ?>">
            <?php foreach ($featured_posts as $post):
                setup_postdata($post);
                $term_list = wp_get_post_terms(get_the_id(), 'category');
            ?>

                <article class="post" data-aos="fade-up">
                    <div class="post__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    <div class="post__content">
                        <div class="entry-term">
                            <?php foreach ($term_list as $term): ?>
                                <a href="<?php echo get_term_link($term->term_id, 'category'); ?>"><?php echo $term->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p class="entry-content"><?php echo custom_excerpt(10); ?></p>
                    </div>
                </article>

            <?php endforeach; ?>
        </div>
        <?php
        wp_reset_postdata(); ?>
    </section>
<?php endif; ?>