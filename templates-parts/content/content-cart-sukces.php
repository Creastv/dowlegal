<?php
$avatar = get_field('zdjecie_profilowe', get_the_ID());
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'medium');

?>

<article class="sukcesy-item" data-aos="fade-up">
    <div class="sukcesy-item__wrap">
        <div class="sukcesy-item__img">
            <?php // echo wp_get_attachment_image($avatar, 'medium'); 
            ?>
            <?php the_post_thumbnail('post-futured', array('alt' => get_the_title())); ?>
        </div>
        <div class="sukcesy-item__content ">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="excerpt">
                <p><?php echo custom_excerpt(); ?></p>
            </div>
            <div class="sukcesy-item__buttons">
                <?php if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" class="sukcesy-item__logo" alt="' . esc_attr(get_bloginfo('name')) . '">';
                } ?>
                <a href="<?php the_permalink(); ?>" class="btn-rev"><?php echo _e('Czytaj więcej', 'go'); ?></a>
            </div>
        </div>
    </div>
</article>