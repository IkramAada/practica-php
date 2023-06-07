function validarDatos() {
    const nombre = document.getElementById("nombre").value.trim();
    const apellido = document.getElementById("apellido").value.trim();
    const email = document.getElementById("email").value.trim();

    var nombreApellidoRegex = /^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validar nombre
    if (!nombre.match(nombreApellidoRegex)) {
        alert("Por favor, ingrese un nombre válido.");
        return false;
    }

    // Validar apellido
    if (!apellido.match(nombreApellidoRegex)) {
        alert("Por favor, ingrese un apellido válido.");
        return false;
    }

    // Validar email
    if (!email.match(emailRegex)) {
        alert("Por favor, ingrese un email válido.");
        return false;
    }

    return true;
}