<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="<?php echo home_url('/'); ?>" class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.jpeg" alt="AF Rodríguez">
            </a>
            <button class="hamburger" id="hamburger" aria-label="Menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#nosotros">Quiénes Somos</a></li>
                <li><a href="#unidades">Unidades</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#porque">¿Por qué elegirnos?</a></li>
                <li><a href="#contacto" class="nav-cta">Cotizar</a></li>
            </ul>
        </div>
    </nav>

    <!-- MOBILE DRAWER -->
    <div class="drawer-overlay" id="drawerOverlay"></div>
    <div class="drawer" id="drawer">
        <div class="drawer-header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.jpeg" alt="AF Rodríguez" class="drawer-logo">
            <button class="drawer-close" id="drawerClose" aria-label="Cerrar menú">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="drawer-nav">
            <a href="#inicio" class="drawer-link">Inicio</a>
            <a href="#nosotros" class="drawer-link">Quiénes Somos</a>
            <a href="#unidades" class="drawer-link">Unidades</a>
            <a href="#servicios" class="drawer-link">Servicios</a>
            <a href="#porque" class="drawer-link">¿Por qué elegirnos?</a>
        </nav>
        <div class="drawer-cta">
            <a href="#contacto" class="drawer-btn">Contacto</a>
        </div>
        <div class="drawer-social">
            <a href="tel:+526461234567" class="drawer-social-icon" aria-label="Teléfono">
                <i class="fas fa-phone"></i>
            </a>
            <a href="#" class="drawer-social-icon" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/526461234567" class="drawer-social-icon" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
