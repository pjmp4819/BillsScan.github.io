<?php require ('./layout/plantilla.php')?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .sidebar .aa {
            display: flex;
            align-items: center;
            padding: 15px 6px;
            margin: 7px 0;
            text-decoration: none;
            color: black;
            background-color: #E7E6E;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        

        /* Tema oscuro */
        .dark-theme {
            background-color: #333;
            color: white;
        }

        .dark-theme .sidebar {
            background-color: #444;
        }

        .dark-theme .sidebar h1{
            color: white;
        }

       

        .dark-theme .content {
            background-color: #1e1e1e;
        }

        .dark-theme .header {
            background-color: #4e75ac;
        }

        .dark-theme .aa {
            background-color: #4e75ac;
            color: white;
            font-weight: 500;
        }

        

        .dark-theme .buscador input {
            background-color: white;
            color: white;
        }

        .dark-theme .user-info {
            background-color: #4e75ac;
            color: white;
        }

        /* Botón de tema */
        .theme-toggle-button {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            margin-top: 20px;
        }

        .theme-toggle-button:hover {
            background: #0056b3;
        }
    </style>

<div class="configuracion">
                <h2>Configuración</h2>
                <button id="theme-toggle" class="theme-toggle-button">Cambiar a tema oscuro</button>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('theme-toggle').addEventListener('click', function() {
            const body = document.body;
            if (body.classList.contains('dark-theme')) {
                body.classList.remove('dark-theme');
                this.textContent = 'Cambiar a tema oscuro';
            } else {
                body.classList.add('dark-theme');
                this.textContent = 'Cambiar a tema claro';
            }
        });
    </script>

<?php require ('./layout/cierre_plantilla.php')?>