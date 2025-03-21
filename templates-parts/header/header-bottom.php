<?php
$btn_one_link = get_theme_mod('header_btn_one_link', '');
$btn_one_text = get_theme_mod('header_btn_one_text', '');
$btn_two_link = get_theme_mod('header_btn_two_link', '');
$btn_two_text = get_theme_mod('header_btn_two_text', '');
?>
<div class="h-nav">
    <div class="container-full">
        <div class="h-nav__wrap">
            <nav class="navbar__navigation js-navbar__navigation">
                <?php
                $navLocation = 'primary_menu';
                $temp_menu = wp_nav_menu(array(
                    'theme_location'  => $navLocation,
                    'menu_id'           => 'navbar__navigation__list',
                    'menu_class'       => 'navbar__navigation__list',
                    'container'       => false,
                    'echo'               => false,
                    'items_wrap'       => '<div class="navbar__navigation__list"><ul id="%1$s" class="%2$s js-navbar__navigation__list " itemscope itemtype="https://www.schema.org/SiteNavigationElement">%3$s </ul></div>',
                ));
                echo $temp_menu;
                ?>
            </nav>

            <div class="h-nav__buttons">
                <?php if (!empty($btn_one_link)) : ?>
                    <a href="<?php echo $btn_one_link; ?>" class="btn-rev"><?php echo $btn_one_text; ?></a>
                <?php endif; ?>
                <?php if (!empty($btn_two_link)) : ?>
                    <a href="<?php echo $btn_two_link; ?>" class="btn-main"><?php echo $btn_two_text; ?></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>