<?php
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Pozwala na podgląd SVG w mediach
function fix_svg_display()
{
    echo '<style>
td.media-icon img[src$=".svg"] {
    width: 100px !important;
    height: auto !important;
}
</style>';
}
add_action('admin_head', 'fix_svg_display');