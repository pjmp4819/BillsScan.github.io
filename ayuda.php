<?php require ('./layout/plantilla.php')?>

<style>
    .section{
        width: 100%;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .help-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 80%;
        }

        .help-section h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .help-section p {
            color: #666;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .help-section ul {
            list-style-type: none;
            padding: 0;
        }

        .help-section ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        .help-section ul li a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        .help-section ul li a:hover {
            color: #0056b3;
        }
</style>
<div class="section">
<div class="help-section">
        <h2>Ayuda</h2>
        <p>Si necesitas asistencia, puedes contactarnos a través de los siguientes medios:</p>
        <ul>
            <li>Teléfono: <a href="tel:+1234567890">+1 234 567 890</a></li>
            <li>Correo Electrónico: <a href="mailto:soporte@billsscan.com">soporte@billsscan.com</a></li>
        </ul>
    </div>
</div>
</div>
  


<?php require ('./layout/cierre_plantilla.php')?>