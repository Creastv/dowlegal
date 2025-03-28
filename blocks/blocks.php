<?php
function register_acf_block_types()
{
  acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('hero'),
    'render_template'   => 'blocks/hero/hero.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'hero'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    // 'enqueue_assets'    => function () {
    //   wp_enqueue_style('go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css');
    // }
  ));
  function enqueue_load_home()
  {
    wp_enqueue_style('go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_load_home');
  add_action('admin_enqueue_scripts', 'enqueue_load_home');
  acf_register_block_type(array(
    'name'              => 'sukcesy',
    'title'             => __('Sukcesy'),
    'render_template'   => 'blocks/sukcesy/sukcesy.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Sukcesy', 'sukcesy'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      // wp_enqueue_style('go-sukcesy',  get_template_directory_uri() . '/blocks/sukcesy/sukcesy.min.css');
      // wp_enqueue_script('go-w-mediach-js', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), '4', true);
    }
  ));
  function enqueue_load_more_script_sukcesy()
  {
    wp_enqueue_style('go-sukcesy',  get_template_directory_uri() . '/blocks/sukcesy/sukcesy.min.css');
    wp_enqueue_script('load-more-sukcesy', get_template_directory_uri() . '/blocks/sukcesy/sukcesy.js', array('jquery'), null, true);

    // Przekazanie wartości PHP do JS
    wp_localize_script('load-more-sukcesy', 'ajax_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
    ));
  }
  add_action('wp_enqueue_scripts', 'enqueue_load_more_script_sukcesy');
  add_action('admin_enqueue_scripts', 'enqueue_load_more_script_sukcesy');

  acf_register_block_type(array(
    'name'              => 'team',
    'title'             => __('Zespół'),
    'render_template'   => 'blocks/team/team.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('zespół', 'team'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-team',  get_template_directory_uri() . '/blocks/team/team.min.css');
      // wp_enqueue_script('go-w-mediach-js', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), '4', true);
    }
  ));
  function enqueue_load_more_script_team()
  {
    wp_enqueue_script('load-more-team', get_template_directory_uri() . '/blocks/team/team.js', array('jquery'), null, true);

    // Przekazanie wartości PHP do JS
    wp_localize_script('load-more-team', 'ajax_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
    ));
  }
  add_action('wp_enqueue_scripts', 'enqueue_load_more_script_team');
  add_action('admin_enqueue_scripts', 'enqueue_load_more_script_team');

  acf_register_block_type(array(
    'name'              => 'w-mediach',
    'title'             => __('W mediach'),
    'render_template'   => 'blocks/w-mediach/w-mediach.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'w-mediach'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-w-mediach',  get_template_directory_uri() . '/blocks/w-mediach/w-mediach.min.css');
      // wp_enqueue_script('go-w-mediach-js', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), '4', true);
    }
  ));
  function enqueue_load_more_script_w_mediach()
  {
    wp_enqueue_script('load-more', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), null, true);

    // Przekazanie wartości PHP do JS
    wp_localize_script('load-more', 'ajax_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
    ));
  }
  add_action('wp_enqueue_scripts', 'enqueue_load_more_script_w_mediach');
  add_action('admin_enqueue_scripts', 'enqueue_load_more_script_w_mediach');

  acf_register_block_type(array(
    'name'              => 'services',
    'title'             => __('services'),
    'render_template'   => 'blocks/services/services.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'services'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    // 'enqueue_assets'    => function () {
    //   wp_enqueue_style('go-services',  get_template_directory_uri() . '/blocks/services/services.min.css');
    // }
  ));
  function enqueue_servicios()
  {
    wp_enqueue_style('go-services',  get_template_directory_uri() . '/blocks/services/services.min.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_servicios');
  add_action('admin_enqueue_scripts', 'enqueue_servicios');
  acf_register_block_type(array(
    'name'              => 'separator',
    'title'             => __('separator'),
    'render_template'   => 'blocks/separator/separator.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'separator'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-separator',  get_template_directory_uri() . '/blocks/separator/separator.min.css');
    }
  ));

  acf_register_block_type(array(
    'name'              => 'opinions',
    'title'             => __('Opinie klientów'),
    'render_template'   => 'blocks/opinions/opinions.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('opinions'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-opinions',  get_template_directory_uri() . '/blocks/opinions/opinions.min.css');
      // wp_enqueue_script('go-w-mediach-js', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), '4', true);
    }
  ));
  acf_register_block_type(array(
    'name'              => 'in-numbers',
    'title'             => __('W liczbach'),
    'render_template'   => 'blocks/in-numbers/in-numbers.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('in-numbers'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-in-numbers',  get_template_directory_uri() . '/blocks/in-numbers/in-numbers.min.css');
      // wp_enqueue_script('go-w-mediach-js', get_template_directory_uri() . '/blocks/w-mediach/w-mediach.js', array('jquery'), '4', true);
    }
  ));

  acf_register_block_type(array(
    'name'              => 'contact',
    'title'             => __('Kontakt'),
    'render_template'   => 'blocks/contact/contact.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'contact'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-contact',  get_template_directory_uri() . '/blocks/contact/contact.min.css');
    }
  ));

  acf_register_block_type(array(
    'name'              => 'bullets',
    'title'             => __('Bullets'),
    'render_template'   => 'blocks/bullets/bullets.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'bullets'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => false,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-bullets',  get_template_directory_uri() . '/blocks/bullets/bullets.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'container',
    'title'             => __('Wązki kontener'),
    'render_template'   => 'blocks/container/container.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'container'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-container',  get_template_directory_uri() . '/blocks/container/container.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'bg',
    'title'             => __('Tło - kontener'),
    'render_template'   => 'blocks/bg/bg.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Kontener', 'bg'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-bg',  get_template_directory_uri() . '/blocks/bg/bg.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'info-contact',
    'title'             => __('Info kontakt'),
    'render_template'   => 'blocks/info-contact/info-contact.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('kontakt', 'info-contact'),
    'supports'    => [
      'align'      => false,
      'anchor'    => true,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-info-contact',  get_template_directory_uri() . '/blocks/info-contact/info-contact.min.css');
    }
  ));
  acf_register_block_type(array(
    'name'              => 'section-img',
    'title'             => __('section-img'),
    'render_template'   => 'blocks/section-img/section-img.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Img', 'section-img'),
    'supports'    => [
      'align'      => false,
      'anchor'    => false,
      'customClassName'  => true,
      'jsx'       => true,
    ],
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-section-img',  get_template_directory_uri() . '/blocks/section-img/section-img.min.css');
    }
  ));

  acf_register_block_type(array(
    'name'              => 'posts-grid',
    'title'             => __('Posty - grid'),
    'render_template'   => 'blocks/posts-grid/posts-grid.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-posts-grid',  get_template_directory_uri() . '/blocks/posts-grid/posts-grid.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'faq',
    'title'             => __('Najczęściej zadawane pytania'),
    'render_template'   => 'blocks/faq/faq.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('faq'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-faq',  get_template_directory_uri() . '/blocks/faq/faq.min.css');
      wp_enqueue_script('go-faq-init', get_template_directory_uri() . '/blocks/faq/faq.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'title',
    'title'             => __('Title'),
    'render_template'   => 'blocks/title/title.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Title'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-title',  get_template_directory_uri() . '/blocks/title/title.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'button-cus',
    'title'             => __(' Przycisk '),
    'render_template'   => 'blocks/button/button.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#c80100',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('przycisk'),
    'supports' => array('align' => true),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-button',  get_template_directory_uri() . '/blocks/button/button.min.css');
    },
  ));
}
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
  // Update path
  $path = get_template_directory() . '/blocks/acf-json';
  // Return path
  return $path;
}
