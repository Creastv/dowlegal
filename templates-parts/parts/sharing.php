<?php if (is_single()) : ?>
    <div class="post-share">
        <h3>Udostępnij ten post</h3>
        <div class="share-buttons">
            <?php 
                $post_url = get_permalink();
                $post_title = get_the_title();
            ?>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($post_url); ?>" target="_blank" class="share-btn facebook">Facebook</a>
            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($post_url); ?>&text=<?php echo urlencode($post_title); ?>" target="_blank" class="share-btn twitter">Twitter</a>
            <a href="https://www.linkedin.com/shareArticle?url=<?php echo urlencode($post_url); ?>" target="_blank" class="share-btn linkedin">LinkedIn</a>
            <a href="https://wa.me/?text=<?php echo urlencode($post_title . ' ' . $post_url); ?>" target="_blank" class="share-btn whatsapp">WhatsApp</a>
            <a href="mailto:?subject=<?php echo urlencode($post_title); ?>&body=<?php echo urlencode($post_url); ?>" target="_blank" class="share-btn email">Email</a>
            <button class="share-btn copy-link" onclick="copyPostLink()">Kopiuj link</button>
        </div>
    </div>

    <script>
        function copyPostLink() {
            const postUrl = "<?php echo esc_url($post_url); ?>";
            navigator.clipboard.writeText(postUrl).then(() => {
                alert("Link został skopiowany!");
            }).catch(err => {
                console.error("Błąd kopiowania linku: ", err);
            });
        }
    </script>
<?php endif; ?>
