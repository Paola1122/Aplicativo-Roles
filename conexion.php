<?php 

    // Conectar a la base de datos (asegúrate de actualizar las credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mt_roles";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }
   

    /* Consulta SQL para obtener datos de universidades
    $sql = "SELECT * FROM universidades";
    $result = $conn->query($sql);

    // Mostrar los datos de universidades en la tabla HTML
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No se encontraron universidades.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();*/

?>