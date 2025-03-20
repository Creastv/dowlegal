<?php
$map = get_field('mapa');
$logo = get_field('logo');
$desc = get_field('dopisek_logo');
?>

<div class="b-contact">
    <div class="b-contact__wrap">
        <div class="left">
            <?php if ($map): ?>
            <?php echo $map; ?>
            <?php endif; ?>
        </div>
        <div class="right">
            <div class="top">
                <?php if ($logo): ?>
                <div class="logo">
                    <?php echo wp_get_attachment_image($logo, 'large'); ?>
                </div>
                <?php endif; ?>
                <?php if ($desc): ?>
                <p>
                    <b> <?php echo $desc; ?></b>
                </p>
                <?php endif; ?>
            </div>
            <div class="right_wrap">
                <InnerBlocks />
            </div>
        </div>
    </div>
</div>