<?php
$reviews = get_field('reviews');
?>

<?php if ($reviews):  ?>
    <div id="reviews-list-carousel" data-aos="fade-up">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($reviews as $review) :
                    $avatar = $review['avatar'];
                    $name = $review['name'];
                    $rev = $review['review'];

                ?>
                    <div class="swiper-slide">
                        <article class="review-item">
                            <div class="review-item__wrap">
                                <?php if ($avatar): ?>
                                    <div class="review-item__img">
                                        <?php echo wp_get_attachment_image($avatar, 'thumbnail');; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="review-item__content">
                                    <?php if ($name): ?>
                                        <h3><?php echo $name; ?></h3>
                                    <?php endif; ?>
                                    <?php if ($rev): ?>
                                        <div class="excerpt">
                                            <p><?php echo $rev; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="nav-swiper">
                <div class="s-next"><svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 14L14 22M14 22L22 30M14 22H30M42 22C42 33.0457 33.0457 42 22 42C10.9543 42 2 33.0457 2 22C2 10.9543 10.9543 2 22 2C33.0457 2 42 10.9543 42 22Z"
                            stroke="#BEBEBE" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="s-prev">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 32L32 24M32 24L24 16M32 24L16 24M4 24C4 12.9543 12.9543 4 24 4C35.0457 4 44 12.9543 44 24C44 35.0457 35.0457 44 24 44C12.9543 44 4 35.0457 4 24Z"
                            stroke="#BEBEBE" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                prevEl: "#reviews-list-carousel .s-next",
                nextEl: "#reviews-list-carousel .s-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

<?php endif; ?>