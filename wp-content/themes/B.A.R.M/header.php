<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
    
<header>


    <nav class="navbar navbar-expand-lg navbar-dark header-front">
        <a href="#" class="navbar-brand">
            <img src="<?php bloginfo('template_directory')?>/images/logo.jpg" alt="Logo RK" class="img-fluid logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <?php 

                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',

                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarNav',

                        'menu_class' => 'navbar-nav ml-auto px-3',

                        
                    )
                )

            ?>

    </nav>


</header>