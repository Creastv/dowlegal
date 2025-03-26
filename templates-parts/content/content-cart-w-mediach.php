<?php
$link = get_field('link', get_the_ID());
$logo = get_field('logo', get_the_ID());
$name = get_field('nazwa_portalu', get_the_ID());
?>
<article class="media-item" data-aos="fade-up">
    <div class="media-item__wrap">
        <?php if ($logo) : ?>
            <?php echo wp_get_attachment_image($logo, 'medium'); ?>
        <?php elseif ($name) : ?>
            <span class="media-item-portal"><?php echo $name; ?></span>
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
        <div class="excerpt"><?php the_excerpt(); ?></div>
        <a href="<?php echo $link; ?>" class="btn-rev" target="_blank"><?php echo _e('Czytaj więcej', 'go'); ?></a>
    </div>
</article>