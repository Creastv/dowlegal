<?php if (is_single()) : ?>
<div class="post-author">

    <div class="author-info">
        <div class="author-avatar">
            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
        </div>
        <div class="author-details">
            <span>O autorze</span>
            <h3><?php echo get_the_author_meta('display_name'); ?></h3>
            <p><?php echo get_the_author_meta('description'); ?></p>
        </div>
    </div>
</div>
<?php endif; ?>