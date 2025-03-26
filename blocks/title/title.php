<?php
$title = get_field('title');
$desc = get_field('description');
$label = get_field('label');
$titleTag = get_field('tag');
$link = get_field('link');

$classLink = ' ';
if ($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    $classLink = ' has-link';
}
$class_name = 'b-title';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($class_name); ?> <?php echo $classLink; ?>" data-aos="fade-up">
    <?php if ($link): ?>
        <div class="b-title__content">
        <?php endif; ?>
        <?php if ($label): ?>
            <span class="b-title__label"> <?php echo $label; ?></span>
        <?php endif; ?>
        <?php if ($title): ?>
            <<?php echo $titleTag; ?> class="b-title__title"> <?php echo $title; ?></<?php echo $titleTag; ?>>
        <?php endif; ?>
        <?php if ($desc): ?>
            <div class="b-title__desc">
                <?php echo $desc; ?>
            </div>
        <?php endif; ?>
        <?php if ($link): ?>
        </div>
    <?php endif; ?>

    <?php if ($link): ?>
        <div class="b-title__button">
            <a class="btn-rev" href="<?php echo esc_url($link_url); ?>"
                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
    <?php endif; ?>
</div>