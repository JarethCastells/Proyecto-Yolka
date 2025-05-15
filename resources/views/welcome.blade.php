<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#2e5d3f">
    <title>YolkaSoft - Paraíso Residences</title>
    
    <!-- Preconexiones y precarga de recursos -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preload" href="{{ asset('media/video.mp4') }}" as="video">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('media/favicon.ico') }}" type="image/x-icon">
</head>

<body class="font-sans antialiased">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('media/logoa.png') }}" class="brand-logo" alt="YolkaSoft Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                             <li class="nav-item">
    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">
        Iniciar Sesión
    </a>
</li>
                        @else
                            <li class="nav-item">
    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">
        Iniciar Sesión
    </a>
</li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Banner principal con video -->
    <section class="banner">
        <div class="banner-overlay"></div>
        <video class="banner-video" id="bgVideo" autoplay muted loop playsinline>
            <source src="{{ asset('media/video.mp4') }}" type="video/mp4">
            <source src="{{ asset('media/video.webm') }}" type="video/webm">
            Tu navegador no soporta la reproducción de video.
        </video>
        
        <img src="{{ asset('media/PARAÍSO DORADO.png') }}" alt="Paraíso Residences" class="banner-decoration" loading="lazy">
        
     
        
        <div class="banner-content">
            <h1 class="slogan">Creando experiencias únicas</h1>
            <p class="subtext">Paraíso Residences</p>
            <a href="#about" class="btn btn-primary scroll-btn">Conoce más</a>
        </div>
    </section>
    
    <!-- Contenido principal -->
    <main class="main-content">
        <!-- Sección Sobre Nosotros -->
        <section id="about" class="container content-section">
            <h2>Sobre Nosotros</h2>
            <p class="lead">Yolka se dedica a crear experiencias inolvidables en Teotihuacán. Disfruta de una estancia única con vistas espectaculares y comodidades de primer nivel.</p>
        </section>
        
        <!-- Sección Servicios -->
        <section class="container content-section bg-light">
            <h2>Servicios</h2>
            <div class="row">
                <div class="col-md-4 service-item">
                    <i class="bi bi-house-door"></i>
                    <h3>Hospedaje de lujo</h3>
                    <p>Residencias exclusivas con todas las comodidades.</p>
                </div>
                <div class="col-md-4 service-item">
                    <i class="bi bi-person-badge"></i>
                    <h3>Servicios personalizados</h3>
                    <p>Atención a tus necesidades específicas.</p>
                </div>
                <div class="col-md-4 service-item">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Actividades turísticas</h3>
                    <p>Experiencias únicas en cada destino.</p>
                </div>
            </div>
        </section>
        
        <!-- Sección Contacto -->
        <section id="contact" class="container content-section">
            <h2>Contacto</h2>
            <div class="contact-info">
                <p><i class="bi bi-envelope"></i> info@yolkasoft.com</p>
                <p><i class="bi bi-telephone"></i> +52 55 1234 5678</p>
                <p><i class="bi bi-geo-alt"></i> Av. Paraíso 123, CDMX, México</p>
            </div>
        </section>
    </main>
    
    <!-- Pie de página -->
    <footer class="text-center">
        <div class="container">
            <div class="social-links">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            </div>
            <p>&copy; {{ date('Y') }} YolkaSoft. Todos los derechos reservados.</p>
           
        </div>
    </footer>

    <!-- Bootstrap JS con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts personalizados -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
           
            
            // Smooth scrolling para enlaces internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Efecto de navbar al hacer scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Ajustar altura del banner en dispositivos móviles
            function adjustBannerHeight() {
                const banner = document.querySelector('.banner');
                const vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
                banner.style.height = 'calc(var(--vh, 1vh) * 100)';
            }
            
            window.addEventListener('resize', adjustBannerHeight);
            adjustBannerHeight();
            
            // Animación al hacer scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.reveal').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
    
<div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title d-flex align-items-center" id="loginModalLabel">
       
        <img src="{{ asset('media/flor.png') }}" alt="Decorativo 1" class="rotate-mirror" style="width: 30px; height: 40px;">
        Iniciar sesión
        
        <img src="{{ asset('media/flor.png') }}" alt="Decorativo 2" style="width: 30px; height: 40px;">
    </h5>
    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf
                    
                    <div class="form-group mb-3">
                        <label for="loginEmail" class="form-label">Correo electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="loginEmail" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="loginPassword" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-login">
                            <i class="fas fa-sign-in-alt me-2"></i> Entrar
                        </button>
                    </div>
                    
                    <div class="login-links mt-4">
                        <a href="{{ route('password.request') }}" class="d-block mb-2">
                            <i class="fas fa-key me-2"></i> ¿Olvidaste tu contraseña?
                        </a>
                        <a href="{{ route('register') }}" class="d-block">
                            <i class="fas fa-user-plus me-2"></i> Crear cuenta
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
      
        
        // Mostrar modal si hay errores
        @if($errors->has('email') || $errors->has('password'))
            $('#loginModal').modal('show');
        @endif
    });
</script>
@endpush
</body>
</html>