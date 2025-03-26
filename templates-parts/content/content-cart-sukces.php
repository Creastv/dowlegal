<?php
$avatar = get_field('zdjecie_profilowe', get_the_ID());
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
$noAvatar = "";
if (!$avatar) {
    $noAvatar = 'no-avatar';
}
?>

<article class="sukcesy-item" data-aos="fade-up">
    <div class="sukcesy-item__wrap">
        <?php if ($avatar): ?>
            <div class="sukcesy-item__img">
                <?php echo wp_get_attachment_image($avatar, 'medium'); ?>
                <svg width="711" height="736" viewBox="0 0 711 736" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_432_1267)">
                        <g opacity="0.1">
                            <path opacity="0.6"
                                d="M288.79 734.8C285.92 734.87 282.98 735 280.11 735C282.98 735 285.85 734.87 288.79 734.8ZM711 735V600.29C629.18 600.29 562.89 533.95 562.89 452.06V449.06H562.63V453.89C562.63 523.04 537.44 586.31 495.82 635.29C547.69 696.21 624.95 734.94 711.01 734.94"
                                fill="#EB5C40" />
                            <path
                                d="M565.17 0H430.17V449.45C430.24 451.34 430.17 452 430.17 453.89C430.17 535.06 363.94 600.94 282.25 600.94C200.56 600.94 134.33 535.12 134.33 453.89C134.33 372.66 200.56 306.84 282.25 306.84C334.9 306.84 381.16 334.2 407.33 375.4V201.77C369.68 183.29 327.4 172.78 282.51 172.78C126.51 172.85 0 298.67 0 453.95C0 609.23 126.51 735.06 282.59 735.06C438.67 735.06 565.18 609.23 565.18 453.95V0H565.17Z"
                                fill="#EB5C40" />
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_432_1267">
                            <rect width="711" height="735.07" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </div>
        <?php endif; ?>
        <div class="sukcesy-item__content <?php echo $noAvatar; ?>">
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