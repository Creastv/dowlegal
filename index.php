<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php get_template_part('templates-parts/header/header', 'title');  ?>
    <div class="search_wrap">
        <?php echo wp_post_search_form();  ?>
        <?php echo wp_category_dropdown_links(); ?>
    </div>
    <div class="posts-wraper">

        <?php while (have_posts()) : the_post();
            get_template_part('templates-parts/content/content-cart-post');
        endwhile; ?>
    </div>
    <?php if (paginate_links()) { ?>
        <div class="go-pagination">
            <?php pagination_bars(); ?>
        </div>
    <?php } ?>

<?php else : ?>
    <?php get_template_part('templates-parts/header/header', 'title');  ?>
    <div class="container no-resoult">
        <h2 class='text-center'><?php _e('Nic nie znaleziono', 'go'); ?></h2>
        <?php get_template_part('searchform'); ?>
    </div>


<?php endif; ?>

<?php get_footer();
