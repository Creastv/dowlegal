<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="post-search-form">
    <input type="hidden" name="post_type" value="post">
    <input type="text" name="s" id="post-search" value="" placeholder="Wpisz frazę...">

    <button type="submit">Szukaj</button>
</form>