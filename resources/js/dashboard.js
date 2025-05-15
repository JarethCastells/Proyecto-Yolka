document.addEventListener('DOMContentLoaded', function() {
    // Actualizar datos de usuarios (simulado)
    function updateUserStats() {
        // En una aplicación real, aquí harías una petición AJAX
        console.log("Actualizando estadísticas de usuarios...");
        
        // Simular datos
        const totalUsers = Math.floor(Math.random() * 200) + 50;
        const newUsers = Math.floor(Math.random() * 10) + 1;
        
        // Actualizar UI
        document.getElementById('user-count').textContent = totalUsers;
        document.getElementById('total-users').textContent = totalUsers;
        document.getElementById('new-users').textContent = newUsers;
    }
    
    // Botón de refresh
    document.querySelector('.btn-refresh').addEventListener('click', function() {
        this.classList.add('rotating');
        setTimeout(() => {
            this.classList.remove('rotating');
            updateUserStats();
        }, 1000);
    });
    
    // Actualizar cada 30 segundos (simulación)
    setInterval(updateUserStats, 30000);
    
    // Inicializar
    updateUserStats();
});