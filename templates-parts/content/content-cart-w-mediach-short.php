<?php
$link = get_field('link', get_the_ID());
$logo = get_field('logo', get_the_ID());
$name = get_field('nazwa_portalu', get_the_ID());
?>
<article class="media-item-short" data-aos="fade-up">
    <div class="media-item__wrap">
        <?php if ($name) : ?>
            <div class="media-item-portal">
                <span><?php echo $name; ?></span>
            </div>
        <?php endif; ?>
        <p><?php the_title(); ?><a href="<?php echo $link; ?>" target="_blank">
                <?php echo _e(' Czytaj więcej', 'go'); ?></a></p>
    </div>
</article>