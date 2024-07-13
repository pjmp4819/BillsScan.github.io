<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billsscan_proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $fecha_emision = $_POST['fecha_emision'];
    $monto_total = $_POST['monto_total'];
    $estado_pago = $_POST['estado_pago'];
    $cliente = $_POST['cliente'];
    $categoria = $_POST['categoria'];

    // Verificar si el archivo fue subido
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        // Obtener contenido del archivo
        $imagen = file_get_contents($_FILES['image_path']['tmp_name']);
        
        // Consulta SQL para insertar datos en la tabla de facturas
        $sql_factura = $conn->prepare("INSERT INTO facturas (fecha_emision, monto_total, estado_pago, cliente, categoria, imagen_factura) VALUES (fecha_emision, monto_total, estado_pago, empresa, categoria, imagen_factura)");
        $sql_factura->bind_param("sdssss", $fecha_emision, $monto_total, $estado_pago, $cliente, $categoria, $imagen);

        if ($sql_factura->execute()) {
            // Obtener el ID de la factura insertada
            $factura_id = $sql_factura->insert_id;

            // Consulta SQL para insertar datos en la tabla de archivos recientes
            $sql_archivo = $conn->prepare("INSERT INTO archivos_recientes (factura_id) VALUES (factura_id)");
            $sql_archivo->bind_param("i", $factura_id);

            if ($sql_archivo->execute()) {
                echo "Factura y archivo subidos exitosamente.";
            } else {
                echo "Error al subir el archivo reciente: " . $sql_archivo->error;
            }
        } else {
            echo "Error al subir la factura: " . $sql_factura->error;
        }

        // Cerrar conexiones
        $sql_factura->close();
        $sql_archivo->close();
    } else {
        echo "Error en la subida del archivo.";
    }

    $conn->close();
}
?>
