<?php
$position = get_field('nazwa_pozycji', get_the_ID());
?>
<article class="team-item-short">
    <div class="team-item__wrap">
        <?php if (has_post_thumbnail(get_the_ID())) : ?>
            <div class="team-item__img">
                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
            </div>
        <?php endif; ?>
        <div class="team-item__content">
            <h3><?php the_title(); ?></h3>
            <?php if ($position) : ?>
                <span><?php echo $position; ?></span>
            <?php endif; ?>
            <p class="entry-content"><?php echo custom_excerpt(15); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-rev"><?php echo _e('Czytaj więcej', 'go'); ?></a>
        </div>

    </div>
</article>