 <?php
    $style = get_field('style');
    ?>
 <?php if ($style == 1) : ?>
     <!-- 🔹 FILTRACJA PO TAXONOMII -->
     <?php
        $terms = get_terms(array(
            'taxonomy'   => 'rok', // Zmień na swoją nazwę taksonomii
            'hide_empty' => true,
        ));

        if (!empty($terms) && !is_wp_error($terms)) {
            // Sortowanie w odwrotnej kolejności alfabetycznej (od Z do A)
            usort($terms, function ($a, $b) {
                return strcasecmp($b->name, $a->name);
            });
        ?>
         <ul id="filter-category">
             <li data-slug="all" class="active">Wszystkie</li>
             <?php foreach ($terms as $term) : ?>
                 <li data-slug="<?php echo esc_attr($term->slug); ?>">
                     <?php echo esc_html($term->name); ?>
                 </li>
             <?php endforeach; ?>
         </ul>
     <?php } ?>
     <!-- 🔹 POSTY -->
     <div id="media-list">
         <?php
            $args = array(
                'post_type'      => 'w-media',
                'posts_per_page' => 10,
                'post_status'    => 'publish',
                'paged'          => 1,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                 <?php get_template_part('templates-parts/content/content', 'cart-w-mediach'); ?>
         <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
     </div>

     <!-- 🔹 PRZYCISK "WCZYTAJ WIĘCEJ" -->
     <?php if ($query->found_posts > 10) { ?>
         <div class="load-more-wrap">
             <button id="load-more" data-page="1" data-category="all">Wczytaj więcej
                 <svg width="32" height="32" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M18 7.5L18 28.5M18 28.5L28.5 18M18 28.5L7.5 18" stroke="#FD5B39" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" />
                 </svg>
             </button>
         </div>
     <?php } ?>

 <?php else : ?>
     <div id="media-list-short">
         <?php
            $args = array(
                'post_type'      => 'w-media',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                 <?php get_template_part('templates-parts/content/content', 'cart-w-mediach-short'); ?>
         <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
     </div>

 <?php endif; ?>