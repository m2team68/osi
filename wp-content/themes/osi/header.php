<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

</head>

<body>
<header class="osi-header">
    <div class="logo">
        <?php the_custom_logo(); ?>
    </div>
    <div class="header-menu">
        <?php wp_nav_menu([
                'container_id' => 'navigation'
        ]); ?>
    </div>
</header>