<?php require ('./layout/plantilla.php')?>

<style>
    .container {
        width: 90%;
        margin: auto;
        overflow: hidden;
    }
    .facturas-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }
    .facturas-header h1 {
        margin: 0;
    }
    .facturas-header nav a {
        color: #555;
        text-decoration: none;
        margin-right: 5px;
    }
    .facturas-header nav a:last-child {
        color: black;
    }
    .search-bar {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .search-bar input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
        margin-right: 10px;
    }
    .facturas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }
    
    .factura-item {
        background-color: #fff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }
    .factura-item:hover {
        transform: scale(1.05);
    }
    .factura-item img {
        max-width: 100%;
        border-radius: 10px;
    }
    .factura-details {
        margin-top: 10px;
    }
    .factura-details p {
        margin: 5px 0;
        font-size: 14px;
    }
</style>

<div class="container">
    <div class="facturas-header">
        <h1>Facturas</h1>
        <nav>
            <a href="#">Dashboard</a> >
            <a href="#">Categorías</a> >
            <a href="#">Compra de Productos</a> >
            <a href="#">ZARA</a> >
            Facturas
        </nav>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar archivo" id="searchInput">
    </div>
    
    <div class="facturas-grid">
        <?php
        // Conectar a la base de datos
        $conn = new mysqli("localhost", "root", "", "billsscan_proyecto");
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT facturas.id, facturas.fecha_emision, facturas.monto_total, facturas.estado_pago, facturas.cliente, facturas.categoria, facturas.imagen_factura 
                FROM facturas 
                JOIN archivos_recientes ON facturas.id = archivos_recientes.factura_id 
                ORDER BY archivos_recientes.fecha_subida DESC LIMIT 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="factura-item">';
                echo '<img src="ver_imagen.php?id=' . $row ["id"] . '" alt="Factura" width="200">';
                echo '<div class="factura-details">';
                echo '<p><strong>Factura #:</strong> ' . $row["id"] . '</p>';
                echo '<p><strong>Fecha de Emisión:</strong> ' . $row["fecha_emision"] . '</p>';
                echo '<p><strong>Monto Total:</strong> $' . $row["monto_total"] . ' USD</p>';
                echo '<p><strong>Estado de Pago:</strong> ' . $row["estado_pago"] . '</p>';
                echo '<p><strong>Cliente:</strong> ' . $row["cliente"] . '</p>';
                echo '<p><strong>Categoría:</strong> ' . $row["categoria"] . '</p>';
                echo '</div></div>';
            }
        } else {
            echo "No hay imágenes recientes.";
        }

        $conn->close();
        ?>
    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        var filter = this.value.toLowerCase();
        var items = document.getElementsByClassName('factura-item');
        Array.from(items).forEach(function(item) {
            var text = item.textContent.toLowerCase();
            item.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>

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

// Obtener el ID de la factura
$id = intval($_GET['id']);

// Consulta SQL para obtener la imagen
$sql = $conn->prepare("SELECT imagen_factura FROM facturas WHERE id = id");
$sql->bind_param("i", $id);
$sql->execute();
$sql->bind_result($imagen);
$sql->fetch();

header("Content-Type: image/jpeg");
echo $imagen;

$sql->close();
$conn->close();
?>


<?php require ('./layout/cierre_plantilla.php')?>
