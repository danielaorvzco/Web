<?php 
    if (isset($_POST['nombre']) and isset($_POST['edad']) and isset($_POST['correo'])) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];

        if (empty($nombre) or empty($edad) or empty($correo)){
            echo "<h2>Formulario incompleto!</h2>";
            echo "<p>Asegurese de llenar todos los campos del formulario!</p>";
            echo "<a href='indexform.html'><button>Completar formulario</button></a>";
        } else if (!is_numeric($edad)) {
            echo "<h2>Dato EDAD incorrecto!</h2>";
            echo "<p>Asegurese de registrar su edad en formato númerico!</p>";
            echo "<a href='indexform.html'><button>Modificar</button></a>";
        } else {
            echo "<h1>Registro exitoso!!!</h1>";
            echo "<h2>Datos del usuario</h2>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Correo: $correo</p>";
            echo "<a href='indexform.html'><button>Realizar otro registro</button></a>";
        }
    }
?>