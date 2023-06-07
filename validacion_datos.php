<?php
    // Función para limpiar y validar los datos ingresados
    function limpiarDatos($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    // Función para validar los datos del formulario
    function validarDatos($nombre, $apellido, $email) {
        // Validación del nombre
        if (empty($nombre) || !preg_match("/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/", $nombre)) {
            return false;
        }

        // Validación del apellido
        if (empty($apellido) || !preg_match("/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/", $apellido)) {
            return false;
        }

        // Validación del email
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
?>