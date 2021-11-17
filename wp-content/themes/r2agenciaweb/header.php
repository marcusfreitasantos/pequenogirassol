<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Head Tags -->
    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Viewport  -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png'>
    <!-- Meta -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png">

	<meta property="og:title" content="Espaço Pequeno Girassol">
	<meta property="og:site_name" content="Espaço Pequeno Girassol">
	<meta property="og:description" content="Espaço Pequeno Girassol">	
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="600">


    <!-- Wordpress Shit -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <!-- Head Links Libraries -->
    <!-- Lightbox -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/css/lightbox.css'>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/85921d822d.js" crossorigin="anonymous"></script>

<!-- Bootstrap -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css'>
    <!-- Main CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/css/reset.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/css/style.css'>


    <!-- WOW -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/wow/animate.min.css'>
 

    <!--  Owl Carousel  -->
    <link rel='stylesheet prefetch' href='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.carousel.css'>
    <link rel='stylesheet prefetch' href='<?php echo get_template_directory_uri(); ?>/assets/libs/owl/owl.theme.default.css'>
    <!-- Google Fonts -->
    <!-- font-family: 'Rubik', sans-serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>



<!--TOPBAR-->
<section class="topbar" id="topbar">
    <div class="container topbar-content">
         <ul class="top-links">
            <li>
                 <a href="mailto:contato@espacopequenogirassol.com.br"><i class="fas fa-envelope"></i> contato@espacopequenogirassol.com.br</a>
            </li>
            <li>
                <a href="tel:557930270108"><i class="fas fa-phone"></i> 79 3027-0108</a>
             </li>
        </ul>

        <ul class="top-links">
            <li>
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</section>

<!--
==========================================================================
Header Desktop
========================================================================== -->
<header class="header" id="header">
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="logo flex-grow-1">
                    <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
                </a>
                <ul class="navbar-nav mr-auto desktop-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/quem-somos">Quem Somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pedagogia">Pedagogia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://espacopequenogirassol.com.br/#diferenciais">Diferenciais</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/turmas">Turmas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/tour_virtual">Estrutura</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galerias">Nossos Momentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Venha Conhecer</a>
                    </li>
                </ul>

               <button onclick="showMenu()" id="hamburger"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav mr-auto mobile-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/quem-somos">Quem Somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pedagogia">Pedagogia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://espacopequenogirassol.com.br/#diferenciais">Diferenciais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/turmas">Turmas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/tour_virtual">Estrutura</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galerias">Nossos Momentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Venha Conhecer</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <h1 class="breadcrumb-title"><?php wp_title(''); ?></h1>
        </div>
    </div>
</section>

