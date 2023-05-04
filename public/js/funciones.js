function ActualizaTiempo() {
    const fecha = new Date();
    const options = { 
       year: 'numeric', 
       month: 'long', 
       day: 'numeric', 
       hour: 'numeric', 
       minute: 'numeric', 
       second: 'numeric',
       hour12: false 
    };
    const formatofecha = fecha.toLocaleDateString('es-ES', options);
    const relog = document.getElementById('relog');
    relog.innerHTML = formatofecha ;    
}

setInterval(ActualizaTiempo, 1000);