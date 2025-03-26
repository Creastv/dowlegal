<?php
$col = get_field('bullets_col');
$classCol = "";
if ($col == 2) {
    $classCol  = 'four-col';
}
?>

<?php if (have_rows('bullets')): ?>
    <div class="bullets-container <?php echo $classCol; ?>">
        <?php while (have_rows('bullets')): the_row(); ?>

            <?php
            $icon = get_sub_field('ikona');
            $title = get_sub_field('tutul');
            $description = get_sub_field('opis');
            $color = get_sub_field('kolor');
            $class = '';
            if (!empty($color)) {
                $class = "white-content";
            }
            ?>
            <div class="bullet-item" data-aos="fade-up">
                <div class="bullet-item__wrap">
                    <?php if ($icon): ?>
                        <div class="bullet-icon <?php echo $class; ?>">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ($title): ?>
                        <p class="bullet-title <?php echo $class; ?>"> <?php echo $title; ?> </p>
                    <?php endif; ?>

                    <?php if ($description): ?>
                        <p class="bullet-description <?php echo $class; ?>"> <?php echo esc_html($description); ?> </p>
                    <?php endif; ?>
                    <?php if ($color): ?>
                        <span class="bullet-color" style="background-color: <?php echo $color; ?>;"></span>
                    <?php endif; ?>
                </div>

            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>