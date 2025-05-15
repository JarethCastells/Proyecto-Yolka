<?php

return [
    'title' => 'Panel Médico',
    'title_prefix' => '',
    'title_postfix' => ' | YolkaSoft',

    // Configuración básica
    'use_ico_only' => false,
    'use_full_favicon' => false,

    // Configuración de logo (solo texto)
'logo' => '<span class="brand-text-full" style="color: #DAB664">Yolka</span>',
    'logo_img' => null, // Eliminar opción de logo de imagen
    'logo_img_class' => '',
    'logo_img_xl' => null, // Eliminar opción de logo de imagen XL
    'logo_img_xl_class' => '',
    'logo_img_mini' => '<span class="brand-text-mini">Y</span>',
    'logo_img_mini_class' => '',
    'logo_img_alt' => '',
    'logo_img_height' => '',


  'preloader' => [
    'enabled' => true,
    'mode' => 'fullscreen',
    'img' => [
        'path' => 'media/logoa.png', // Ruta a tu imagen
        'style' => 'height: 100px; width: auto; animation: spin 2s linear infinite;', // Estilo con animación
    ],
    'animation' => [
        'enabled' => false // Desactivamos animación de texto
    ],
    'text' => [
        'enabled' => false
    ]
],
    // Configuración de autenticación
    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => null,
            'alt' => null,
            'style' => '',
        ],
    ],

    // Configuración de layout
    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    // Clases CSS
    'classes_body' => 'font-figtree',
    'classes_brand' => 'bg-primary-custom',
    'classes_brand_text' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_topnav' => 'navbar-white navbar-light',

    // CSS personalizado completo
    'custom_css' => '
        :root {
            --primary-color: #2e5d3fd3;
            --secondary-color: #DAB664;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --font-family-base: "Figtree", sans-serif;
        }

        /* Estilos para el texto del logo */
        .brand-text-full {
            color: var(--secondary-color) !important;
            font-family: var(--font-family-base);
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-block;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .brand-text-mini {
            color: var(--secondary-color) !important;
            font-family: var(--font-family-base);
            font-size: 2.5rem;
            font-weight: 900;
            display: none;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .sidebar-mini.sidebar-collapse .brand-text-full {
            display: none !important;
        }

        .sidebar-mini.sidebar-collapse .brand-text-mini {
            display: inline-block !important;
        }

        /* Preloader personalizado con texto giratorio */
        .preloader {
            background-color: rgba(255,255,255,0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        
        .text-spin-animation {
            color: var(--secondary-color) !important;
            font-size: 20px !important;
            font-weight: 900;
            text-transform: uppercase;
            animation: text-spin 2s linear infinite;
        }

        @keyframes text-spin {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(360deg); }
        }

        /* Estilos generales */
        body {
            font-family: var(--font-family-base);
        }
        .bg-primary-custom {
            background-color: var(--primary-color) !important;
        }
        .main-sidebar {
            background-color: var(--light-bg) !important;
        }
        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: var(--secondary-color) !important;
        }
    ',

    // Configuración del menú (solo Dashboard)
    'menu' => [
        [
            'text' => 'Dashboard',
            'url' => 'home',
            'icon' => 'fas fa-tachometer-alt',
            'icon_color' => '#DAB664',
        ]
    ],

    // Plugins
    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [],
        ],
        'Select2' => [
            'active' => false,
            'files' => [],
        ],
    ],

    'livewire' => false,
];