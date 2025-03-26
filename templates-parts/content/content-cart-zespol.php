<?php
$position = get_field('nazwa_pozycji', get_the_ID());
?>
<article class="team-item" data-aos="fade-up">
    <div class="team-item__wrap">
        <?php if (has_post_thumbnail(get_the_ID())) : ?>
            <div class="team-item__img">
                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
            </div>
        <?php endif; ?>
        <div class="team-item__content">
            <h2><?php the_title(); ?></h2>
            <?php if ($position) : ?>
                <span><?php echo $position; ?></span>
            <?php endif; ?>
            <p class="entry-content"><?php echo custom_excerpt(30); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-rev"><?php echo _e('Czytaj więcej', 'go'); ?></a>
        </div>

    </div>
</article>