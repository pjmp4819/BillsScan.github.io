<?php require ('./layout/plantilla.php')?>
<div class="contenedor_1">
    <div class="subir">
        <img src="./IMAGENES/iconos/SUBIR.svg" alt="Subir Archivos" class="subir_ico">
        <form action="upload.php" method="post" enctype="multipart/form-data" style="display: inline;">
            <input type="file" name="image" id="image" class="elegir_archivos" required>
            <label for="image" class="label_subir">Elegir Archivos</label>
            
        </form>
    </div>

    <style>
        .subir {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

        .label_subir {
            display: inline-block;
            background-color: #C2993B;
            padding: 10px;
            border-radius: 20px;
            text-align: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            width: 300px; 
        }


        .upload-button {
            margin-left: 3px;
            margin-top: 19px;
            display: inline;
            background-color: #C2993B;
            border: none;
            padding: 10px;
            border-radius: 20px;
            text-align: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            width: 45%;
        }

        .elegir_archivos {
            z-index: 1000;
            position: absolute;
            top: 0;
            left: 0;
            width: 27%;
            height: 20%;
            opacity: 0;
            margin-top: 150px;
            margin-left: 259px;
            cursor: pointer;
        }

        .archivos_recientes {
            width: 100%;
        }

        .files {
            display: flex;
            overflow-x: auto;
            width: 100%;
            height: 300px;
            scroll-behavior: smooth;
            padding-bottom: 20px; 
        }

        .files img {
            flex: 0 0 auto;
            height: 100%;
            transition: border 0.3s ease;
            margin-right: 10px; 
        }

        .files img:last-child {
            margin-right: 0; 
        }

        .files img:hover {
            border: 2px solid black;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>

    <div class="sub_contenedor_1">
        <div class="sub_cont_dividido_1">
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/circle-dashed-check.svg" alt="Corregir Factura">
                    </div>
                </a>
                <h3>Corregir Factura</h3>
            </div>
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/git-compare.svg" alt="Comparar Facturas">
                    </div>
                </a>
                <h3>Comparar Facturas</h3>
            </div>
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/writing-sign.svg" alt="Agregar Etiquetas">
                    </div>
                </a>
                <h3>Agregar Etiquetas</h3>
            </div>
        </div>
        <div class="sub_cont_dividido_2">
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/writing-sign.svg" alt="Firma Electrónica">
                    </div>
                </a>
                <h3>Firma Electrónica</h3>
            </div>
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/files.svg" alt="Validar Datos">
                    </div>
                </a>
                <h3>Validar Datos</h3>
            </div>
            <div class="funcion">
                <a href="#">
                    <div class="icon-container">
                        <img src="./IMAGENES/iconos/brand-cashapp.svg" alt="Deducir Impuestos">
                    </div>
                </a>
                <h3>Deducir Impuestos</h3>
            </div>
        </div>
    </div>
</div>

<div class="dashboard">
    <div class="archivos_recientes">
        <h3>Archivos Recientes</h3>
        <div class="files" id="filesContainer">

        <?php require ('./conexion.php')?>

            <?php
            $sql = "SELECT * FROM archivos_recientes ORDER BY fecha_subida DESC LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<a href="' . $row["ruta_archivo"] . '"><img src="' . $row["ruta_archivo"] . '" alt="' . $row["nombre_archivo"] . '" class="foto"></a>';
                }
            } else {
                echo "No hay imágenes recientes.";
            }

            $conn->close();
            ?>
        </div>
    </div>
    
    <div class="chart">
        <h3>Facturas Procesadas</h3>
        <canvas id="facturasChart" width="400" height="200"></canvas>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fecha_emision">Fecha de Emisión</label>
                <input type="date" name="fecha_emision" id="fecha_emision" required>
            </div>
            <div class="form-group">
                <label for="monto_total">Monto Total</label>
                <input type="number" name="monto_total" id="monto_total" required>
            </div>
            <div class="form-group">
                <label for="estado_pago">Estado de Pago</label>
                <select name="estado_pago" id="estado_pago" required>
                    <option value="Pagada">Pagada</option>
                    <option value="Pendiente">Pendiente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cliente">Empresa</label>
                <input type="text" name="cliente" id="cliente" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria" required>
            </div>
            <input type="hidden" name="image_path" id="image_path">
            <input type="submit" name="Subir Imagen" value="Subir Imagen" class="upload-button">
        </form>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    var imageInput = document.getElementById("image");
    var imagePathInput = document.getElementById("image_path");

    imageInput.addEventListener("change", function() {
        var file = imageInput.files[0];
        if (file) {
            imagePathInput.value = URL.createObjectURL(file);
            modal.style.display = "block";
        }
    });

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

      
</script>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    window.onload = function() {
        var ctx = document.getElementById('facturasChart').getContext('2d');
        var facturasChart = new Chart(ctx, {
            type: 'bar', // Puedes cambiar el tipo de gráfico a 'line', 'pie', etc.
            data: {
                labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
                datasets: [{
                    label: 'Facturas Procesadas',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    backgroundColor: [
                        '#004A7C',  // Azul
                        '#C2993B',  // Dorado
                        '#9E9E9E',  // Gris
                        '#004A7C',  // Azul
                        '#C2993B',  // Dorado
                        '#9E9E9E',  // Gris
                        '#004A7C'   // Azul
                    ],
                    borderColor: [
                        '#004A7C',
                        '#C2993B',
                        '#9E9E9E',
                        '#004A7C',
                        '#C2993B',
                        '#9E9E9E',
                        '#004A7C'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Ocultar la leyenda
                    },
                    title: {
                        display: false // Ocultar el título
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    };
</script>



<?php require ('./layout/cierre_plantilla.php')?>

