<?php
$btn_one_link = get_theme_mod('header_phone_number', '');
$btn_one_link = get_theme_mod('header_phone_number', '');
$btn_one_link = get_theme_mod('header_phone_number', '');
$btn_one_link = get_theme_mod('header_phone_number', '');
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
                // $temp_menu = str_replace("<a", "<a itemprop='url' ", $temp_menu); // We set an attribute for menu items through replacement

                // preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matchesz); // Find all the "a" tags through the regular expression to search for the "span" tag
                // foreach ($matchesz[0] as $value) {
                //     // We are looking for a nested tag "span" in the current tag "a"
                //     if (strpos($value, "<span") === false) {  // If the current "a" tag doesn't have a "span" nested tag, use a regular expression to wrap the content of the "a" tag in a "span" and set the markup attribute to it
                //         $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);

                //         $temp_menu = str_replace($value, $temp_value, $temp_menu);
                //     } else { // If the "span" tag is found, replace it with a markup attribute
                //         $temp_value = str_replace("<span", "<span itemprop='name'", $value);

                //         $temp_menu = str_replace($value, $temp_value, $temp_menu);
                //     }
                // }
                echo $temp_menu;

                ?>
            </nav>
            <div class="h-nav__buttons">
                <a href="https://dowlegal.jffrbblxkx.cfolks.pl/kalkulator-sankcji.html" class="btn-rev">Kalkulator
                    sankcji</a>
                <a href="#" class="btn-main">Bezpłatna analiza</a>
            </div>
        </div>
    </div>
</div>