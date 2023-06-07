<?php
    include("datos_conn.php");
    include("validacion_datos.php");
    
    if ($_POST){

        // Obtención de los datos del formulario
        $nombre = limpiarDatos($_POST['nombre']);
        $apellido = limpiarDatos($_POST['apellido']);
        $email = limpiarDatos($_POST['email']);    

        if (validarDatos($nombre, $apellido, $email)){
        
            // Conexión a la BD MySQL (orientada a objetos)
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Inserción de los datos en la base de datos
            $sql = "INSERT INTO empleados (nombre, apellido, email) 
                            VALUES ('$nombre','$apellido', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "Datos insertados correctamente.";
            } else {
                echo "Error al insertar los datos: " . $conn->error;
            }
            
            // Cierre de la conexión
            $conn->close();
            
        } else {
            echo 'Algunos de los datos introducidos son inválidos.';
        }
    }
?>