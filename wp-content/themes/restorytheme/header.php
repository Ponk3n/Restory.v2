<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restory</title>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>
    <div class="main-wrapper">
        <header>
            <nav class="navbar navbar-expand-md sticky-top myCustomNavbar">
                <a class="navbar-brand myLogo" href="#">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" class="mb-2 mx-auto logo" alt="Restory" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars myIcon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
                        )
                    );
                    ?>
                </div>
            </nav>
        </header>