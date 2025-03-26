<?php
$label = get_field('label');
$title = get_field('title');
$desc = get_field('description');
$numbers = get_field('numbers');
?>

<div class="b-in-number" data-aos="fade-up">
    <div class="b-in-mumbers__wrap">
        <div class="b-in-mumbers__kv">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/blocks/in-numbers/numbers-kv.png"
                alt="<?php echo $title; ?>">
        </div>
        <div class="b-in-mumbers__content">
            <?php if ($label) : ?>
                <span class="label"><?php echo $label; ?></span>
            <?php endif; ?>
            <?php if ($title) : ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if ($desc) : ?>
                <?php echo $desc; ?>
            <?php endif; ?>

            <?php if ($numbers): ?>
                <div class="b-in-numbers__numbers">
                    <?php foreach ($numbers as $number) : ?>
                        <div class="item" data-aos="zoom-out-right">
                            <?php if ($number['number']) : ?>
                                <span>
                                    <?php if ($number['prefiks_number']) : ?>
                                        <?php echo $number['prefiks_number']; ?>
                                    <?php endif; ?>
                                    <i class="counter" data-target="<?php echo $number['number']; ?>">
                                        <?php echo $number['number']; ?>
                                    </i>
                                    <?php if ($number['sufiks_number']) : ?><?php echo $number['sufiks_number']; ?><?php endif; ?>
                                </span>
                            <?php endif; ?>
                            <?php if ($number['desc']) : ?>
                                <p><b><?php echo $number['desc']; ?></b></p>
                            <?php endif; ?>
                            <?php if ($number['hover_desc']) : ?>
                                <p class="slide"><?php echo $number['hover_desc']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll(".counter");

        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.5 // Kiedy 50% elementu jest widoczne
        };

        const startCounter = (entry) => {
            const target = entry.target;
            const targetValue = parseInt(target.getAttribute("data-target"));
            let count = 0;
            const duration = 2000; // Czas animacji w milisekundach
            const increment = targetValue / (duration / 16); // Przyrost na każdą klatkę (ok. 16ms)

            const updateCounter = () => {
                count += increment;
                if (count >= targetValue) {
                    target.textContent = targetValue;
                } else {
                    target.textContent = Math.floor(count);
                    requestAnimationFrame(updateCounter);
                }
            };

            updateCounter();
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter(entry);
                    observer.unobserve(entry.target); // Odłącza obserwację po starcie animacji
                }
            });
        }, options);

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>