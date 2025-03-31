<?php get_header(); ?>
<div id="error" class="title-page-wraper">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>404</h1>
                <h2><?php echo __('Upss. Chyba się zgubiłeś?', 'go'); ?></h2>
                <a class="btn btn-main" href="<?php echo esc_url(home_url('/')); ?>">
                    <span><?php echo __('Wróć do strony głównej ', 'go'); ?></span></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
