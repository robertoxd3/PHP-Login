
document.getElementById('CitasForm').addEventListener('submit', function(evt){
    evt.preventDefault();
    let cupoDisponible = localStorage.getItem('cupo');
    if (cupoDisponible == null) {
        localStorage.setItem('cupo', 10)
    } else {
        localStorage.setItem('cupo', parseInt(cupoDisponible) - 1);

    }
})