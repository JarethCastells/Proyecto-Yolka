@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="dashboard-header" style="background: linear-gradient(135deg, #2e5d3fd3 0%, #2e5d3fd3 100%); padding: 20px 25px; border-radius: 8px; color: white; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="margin: 0; font-weight: 600; font-size: 1.8rem;"><i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i> Panel de Control</h1>
        <div class="header-actions" style="display: flex; align-items: center; gap: 15px;">
            <span class="badge" style="background-color: rgba(255,255,255,0.2); font-size: 0.9rem; padding: 8px 12px; border-radius: 20px;">
                <i class="fas fa-users" style="margin-right: 5px;"></i> 
                <span id="user-count">0</span> usuarios
            </span>
            <button class="btn btn-refresh" style="background-color: rgba(255,255,255,0.15); border: none; color: white; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
                <i class="fas fa-sync-alt"></i>
            </button>
        </div>
    </div>
@stop

@section('content')
    <div class="dashboard-container">
        <div class="empty-state" style="text-align: center; padding: 40px 20px; background-color: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
            <div class="empty-icon" style="font-size: 3.5rem; color: #DAB664; margin-bottom: 20px;">
                <i class="fas fa-chart-pie"></i>
            </div>
            <h3 style="color: #DAB664; font-weight: 600; margin-bottom: 10px;">Bienvenido al Panel de Control</h3>
            <p style="color: #616161; font-size: 1.1rem; max-width: 500px; margin: 0 auto 30px;">Aquí podrás monitorear la actividad de tu aplicación</p>
            
            <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; max-width: 600px; margin: 0 auto;">
                <div class="stat-card" style="background-color: #f5f5f5; border-radius: 8px; padding: 20px; text-align: center; border-top: 4px solid #DAB664">
                    <div class="stat-icon" style="font-size: 1.8rem; color: #DAB664; margin-bottom: 10px;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h4 style="color: #616161; font-size: 1rem; margin: 0 0 5px;">Usuarios</h4>
                        <p class="stat-value" id="total-users" style="color: #DAB664; font-size: 1.8rem; font-weight: 700; margin: 0;">0</p>
                    </div>
                </div>
                
                <div class="stat-card" style="background-color: #f5f5f5; border-radius: 8px; padding: 20px; text-align: center; border-top: 4px solid #DAB664;">
                    <div class="stat-icon" style="font-size: 1.8rem; color: #DAB664; margin-bottom: 10px;">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="stat-info">
                        <h4 style="color: #616161; font-size: 1rem; margin: 0 0 5px;">Nuevos hoy</h4>
                        <p class="stat-value" id="new-users" style="color: #DAB664; font-size: 1.8rem; font-weight: 700; margin: 0;">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .btn-refresh:hover {
            background-color: rgba(255,255,255,0.25) !important;
            transform: rotate(90deg);
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
    </style>
@stop

@section('js')
    <script>
        // Simular datos de usuarios
        setTimeout(() => {
            document.getElementById('user-count').textContent = '128';
            document.getElementById('total-users').textContent = '128';
            document.getElementById('new-users').textContent = '5';
            
            // Efecto de conteo animado
            animateValue('total-users', 0, 128, 1000);
            animateValue('new-users', 0, 5, 500);
        }, 1000);
        
        function animateValue(id, start, end, duration) {
            let obj = document.getElementById(id);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
    </script>
@stop