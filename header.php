<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="google-site-verification" content="EecTcvdM0xO2hTF18KPt-aHk1WlgoacxMqV7DU-UW0Y" />
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Radley:ital@0;1&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header" class="js-header " itemscope itemtype="http://schema.org/WPHeader">
        <?php get_template_part('templates-parts/header/header', 'middle'); ?>
        <?php get_template_part('templates-parts/header/header', 'bottom'); ?>
    </header>
    <main id="main">
        <div class="container">
            <div class="row">