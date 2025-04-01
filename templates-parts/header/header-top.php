<div class="h-top">
    <div class="h-top__wrap">
        <?php
        $phone_number = get_theme_mod('header_phone_number', '');
        $email_address = get_theme_mod('header_email_address', '');
        $address = get_option('header_address', '');
        $map = get_theme_mod('header_address_link', '');
        $short_description = get_theme_mod('header_short_description', '');
        $display_socialmedia = get_theme_mod('header_display_socialmedia', false);
        ?>
        <div class="h-top__contact">

            <ul>
                <!-- ✉️ Adres -->
                <li class="h-top-adres">
                    <?php if ($map) : ?>
                        <a href="<?php echo $map; ?>" target="_blank">
                        <?php endif; ?>
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 21.0833C11.7764 21.0833 11.5847 21.0194 11.425 20.8917C11.2653 20.7639 11.1455 20.5962 11.0656 20.3885C10.7622 19.4941 10.3788 18.6555 9.91565 17.8729C9.46842 17.0903 8.83752 16.1719 8.02294 15.1177C7.20835 14.0635 6.54551 13.0573 6.0344 12.0989C5.53926 11.1406 5.29169 9.98263 5.29169 8.62499C5.29169 6.75624 5.93856 5.17499 7.23231 3.88124C8.54203 2.57152 10.1313 1.91666 12 1.91666C13.8688 1.91666 15.45 2.57152 16.7438 3.88124C18.0535 5.17499 18.7084 6.75624 18.7084 8.62499C18.7084 10.0785 18.4288 11.2924 17.8698 12.2667C17.3268 13.225 16.6959 14.1753 15.9771 15.1177C15.1146 16.2677 14.4597 17.226 14.0125 17.9927C13.5813 18.7434 13.2219 19.542 12.9344 20.3885C12.8545 20.6121 12.7268 20.7878 12.5511 20.9156C12.3913 21.0274 12.2077 21.0833 12 21.0833ZM12 11.0208C12.6709 11.0208 13.2379 10.7892 13.7011 10.326C14.1643 9.86284 14.3959 9.29582 14.3959 8.62499C14.3959 7.95416 14.1643 7.38714 13.7011 6.92395C13.2379 6.46075 12.6709 6.22916 12 6.22916C11.3292 6.22916 10.7622 6.46075 10.299 6.92395C9.83578 7.38714 9.60419 7.95416 9.60419 8.62499C9.60419 9.29582 9.83578 9.86284 10.299 10.326C10.7622 10.7892 11.3292 11.0208 12 11.0208Z"
                                stroke="#FD5B39" />
                        </svg>

                        <span><?php //echo $address; 
                                ?><?php echo apply_filters('wpml_translate_single_string',  $address, 'Opcje Motywu', 'Header: Adres'); ?></span>
                        <?php if ($map) : ?>
                        </a>
                    <?php endif; ?>
                </li>
                <!-- ✉️ Adres e-mail -->
                <?php if (!empty($email_address)) : ?>
                    <li class="h-top-email">
                        <a href="mailto:<?php echo esc_attr($email_address); ?>">
                            <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.9167 3.24984C21.9167 2.104 20.9792 1.1665 19.8333 1.1665H3.16668C2.02084 1.1665 1.08334 2.104 1.08334 3.24984M21.9167 3.24984V15.7498C21.9167 16.8957 20.9792 17.8332 19.8333 17.8332H3.16668C2.02084 17.8332 1.08334 16.8957 1.08334 15.7498V3.24984M21.9167 3.24984L11.5 10.5415L1.08334 3.24984"
                                    stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <?php echo esc_html($email_address); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- 📞 Numer telefonu -->
                <?php if (!empty($phone_number)) : ?>
                    <li class="h-top-phone">
                        <a href="tel:<?php echo esc_attr($phone_number); ?>">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 14.805V17.43C19.251 17.6737 19.2011 17.9149 19.1034 18.1382C19.0058 18.3615 18.8626 18.5619 18.6831 18.7266C18.5035 18.8914 18.2915 19.0168 18.0607 19.0949C17.8298 19.1729 17.5852 19.2019 17.3425 19.18C14.65 18.8874 12.0636 17.9674 9.79125 16.4937C7.6771 15.1503 5.88467 13.3579 4.54125 11.2437C3.06248 8.96105 2.14222 6.36211 1.855 3.65749C1.83314 3.41553 1.86189 3.17166 1.93944 2.94141C2.01699 2.71117 2.14163 2.4996 2.30542 2.32016C2.46922 2.14073 2.66858 1.99736 2.89082 1.8992C3.11306 1.80104 3.3533 1.75022 3.59625 1.74999H6.22125C6.6459 1.74581 7.05757 1.89619 7.37954 2.17308C7.70152 2.44998 7.91182 2.83451 7.97125 3.25499C8.08205 4.09505 8.28752 4.91988 8.58375 5.71374C8.70148 6.02693 8.72696 6.36729 8.65717 6.69451C8.58738 7.02173 8.42526 7.32209 8.19 7.55999L7.07875 8.67124C8.32436 10.8618 10.1382 12.6756 12.3288 13.9212L13.44 12.81C13.6779 12.5747 13.9783 12.4126 14.3055 12.3428C14.6327 12.273 14.9731 12.2985 15.2863 12.4162C16.0801 12.7125 16.9049 12.9179 17.745 13.0287C18.17 13.0887 18.5582 13.3028 18.8357 13.6303C19.1132 13.9578 19.2607 14.3759 19.25 14.805Z"
                                    stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php echo esc_html($phone_number); ?>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="h-top__sm">
            <!-- 🌐 Ikony Social Media -->
            <?php if ($display_socialmedia) : ?>
                <?php get_template_part('templates-parts/parts/social_media'); ?>
            <?php endif; ?>
        </div>
        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
    </div>
</div>