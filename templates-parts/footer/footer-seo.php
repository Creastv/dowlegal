<?php
$display_socialmedia = get_theme_mod('footer_display_socialmedia', false);
?>

<div class="f-site container-full">
    <div class="f-site__wrap">
        <!-- 🔹 Kolumna 1: Logo + Tekst pod logo -->
        <div class="f-col">
            <?php
            $footer_logo = get_theme_mod('footer_logo', '');
            $footer_text = get_theme_mod('footer_text_under_logo', '');
            ?>
            <div class="f-brand-info">
                <div class="f-b-info">
                    <?php if ($footer_logo) : ?>
                        <a class="f-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($footer_logo); ?>" alt="Logo" class="footer-logo">
                        </a>
                    <?php endif; ?>
                    <?php if ($footer_text) : ?>
                        <p class="f-text"><?php echo esc_html($footer_text); ?></p>
                    <?php endif; ?>
                    <?php if ($display_socialmedia) : ?>
                        <div class="h-social__wrap">
                            <span><?php _e('Bądź na bieżąco:', 'go'); ?></span>
                            <?php get_template_part('templates-parts/parts/social_media'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php
                $footer_phone = get_theme_mod('footer_phone_number', '');
                $footer_email = get_theme_mod('footer_email_address', '');
                $footer_adres = get_theme_mod('footer_address', '');
                $footer_opening = get_theme_mod('footer_opening', '');
                $footer_map = get_theme_mod('footer_map', '');
                ?>
                <div class="f-contact">
                    <ul>
                        <?php if ($footer_adres) : ?>
                            <li class="f-adres">
                                <svg width="18" height="24" viewBox="0 0 18 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 22.8332C8.74723 22.8332 8.53056 22.761 8.35001 22.6165C8.16945 22.4721 8.03403 22.2825 7.94376 22.0478C7.6007 21.0366 7.16737 20.0887 6.64375 19.204C6.1382 18.3193 5.425 17.2811 4.50417 16.0894C3.58334 14.8978 2.83403 13.7603 2.25625 12.6769C1.69653 11.5936 1.41667 10.2846 1.41667 8.74984C1.41667 6.63734 2.14792 4.84984 3.61042 3.38734C5.09098 1.90678 6.8875 1.1665 9 1.1665C11.1125 1.1665 12.9 1.90678 14.3625 3.38734C15.8431 4.84984 16.5833 6.63734 16.5833 8.74984C16.5833 10.3929 16.2674 11.7651 15.6354 12.8665C15.0215 13.9498 14.3083 15.0241 13.4958 16.0894C12.5208 17.3894 11.7806 18.4728 11.275 19.3394C10.7875 20.188 10.3813 21.0908 10.0563 22.0478C9.96598 22.3005 9.82153 22.4991 9.62292 22.6436C9.44237 22.77 9.23473 22.8332 9 22.8332ZM9 11.4582C9.75834 11.4582 10.3993 11.1964 10.9229 10.6728C11.4465 10.1491 11.7083 9.50817 11.7083 8.74984C11.7083 7.9915 11.4465 7.35053 10.9229 6.82692C10.3993 6.30331 9.75834 6.0415 9 6.0415C8.24167 6.0415 7.6007 6.30331 7.07709 6.82692C6.55348 7.35053 6.29167 7.9915 6.29167 8.74984C6.29167 9.50817 6.55348 10.1491 7.07709 10.6728C7.6007 11.1964 8.24167 11.4582 9 11.4582Z"
                                        stroke="#FD5B39" />
                                </svg>
                                <span><?php echo $footer_adres; ?></span>
                            </li>
                        <?php endif; ?>
                        <?php if ($footer_opening) : ?>
                            <li class="f-opening">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.49999 3.75016V8.50016L11.6667 10.0835M16.4167 8.50016C16.4167 12.8724 12.8722 16.4168 8.49999 16.4168C4.12774 16.4168 0.583328 12.8724 0.583328 8.50016C0.583328 4.12791 4.12774 0.583496 8.49999 0.583496C12.8722 0.583496 16.4167 4.12791 16.4167 8.50016Z"
                                        stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>
                                    <small><?php _e('Godziny otwarcia:', 'go'); ?></small><br>
                                    <?php echo esc_html($footer_opening); ?>
                                </span>

                            </li>
                        <?php endif; ?>
                        <?php if ($footer_phone) : ?>
                            <li class="f-phone">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.25 14.8051V17.4301C19.251 17.6738 19.2011 17.915 19.1034 18.1383C19.0058 18.3615 18.8626 18.562 18.6831 18.7267C18.5035 18.8915 18.2915 19.0169 18.0607 19.095C17.8298 19.173 17.5852 19.202 17.3425 19.1801C14.65 18.8875 12.0636 17.9675 9.79125 16.4938C7.6771 15.1504 5.88467 13.358 4.54125 11.2438C3.06248 8.96114 2.14222 6.3622 1.855 3.65758C1.83314 3.41562 1.86189 3.17175 1.93944 2.94151C2.01699 2.71126 2.14163 2.49969 2.30542 2.32025C2.46922 2.14082 2.66858 1.99746 2.89082 1.89929C3.11306 1.80113 3.3533 1.75031 3.59625 1.75008H6.22125C6.6459 1.74591 7.05757 1.89628 7.37954 2.17318C7.70152 2.45007 7.91182 2.8346 7.97125 3.25508C8.08205 4.09514 8.28752 4.91997 8.58375 5.71383C8.70148 6.02702 8.72696 6.36738 8.65717 6.6946C8.58738 7.02182 8.42526 7.32218 8.19 7.56008L7.07875 8.67133C8.32436 10.8619 10.1382 12.6757 12.3288 13.9213L13.44 12.8101C13.6779 12.5748 13.9783 12.4127 14.3055 12.3429C14.6327 12.2731 14.9731 12.2986 15.2863 12.4163C16.0801 12.7126 16.9049 12.918 17.745 13.0288C18.17 13.0888 18.5582 13.3029 18.8357 13.6304C19.1132 13.9579 19.2607 14.376 19.25 14.8051Z"
                                        stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <a
                                    href="tel:<?php echo esc_attr($footer_phone); ?>"><?php echo esc_html($footer_phone); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($footer_email) : ?>
                            <li class="f-email">
                                <svg width="23" height="19" viewBox="0 0 23 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.9167 3.24984C21.9167 2.104 20.9792 1.1665 19.8333 1.1665H3.16668C2.02084 1.1665 1.08334 2.104 1.08334 3.24984M21.9167 3.24984V15.7498C21.9167 16.8957 20.9792 17.8332 19.8333 17.8332H3.16668C2.02084 17.8332 1.08334 16.8957 1.08334 15.7498V3.24984M21.9167 3.24984L11.5 10.5415L1.08334 3.24984"
                                        stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <a
                                    href="mailto:<?php echo esc_attr($footer_email); ?>"><?php echo esc_html($footer_email); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($footer_map) : ?>
                            <li class="f-map">
                                <a href="<?php echo esc_attr($footer_map); ?>" class="btn-rev"
                                    target="_blank"><?php _e('Jak dojechać', 'go'); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 🔹 Kolumny 3-5: 3 menu w footerze -->
        <?php for ($i = 1; $i <= 5; $i++) :
            $menu_title = get_theme_mod("footer_menu_title_$i", '');
            $menu_id = get_theme_mod("footer_menu_$i", '');
        ?>
            <?php if ($menu_id) : ?>
                <div class="f-col">
                    <div class="calaps">


                        <?php if ($menu_title) : ?>
                            <div class="calaps__opener">
                                <h5><?php echo esc_html($menu_title); ?></h5>
                            </div>
                        <?php else: ?>
                            <div class="calaps__opener">
                                <span class="f-spacer"></span>
                            </div>
                        <?php endif; ?>
                        <div class="calaps__list">
                            <?php
                            wp_nav_menu([
                                'menu' => $menu_id,
                                'container' => 'nav',
                                'container_class' => "footer-menu-$i"
                            ]);
                            ?>
                        </div>

                    </div>
                </div>
            <?php endif; ?>
        <?php endfor; ?>


    </div>
</div>
</div>