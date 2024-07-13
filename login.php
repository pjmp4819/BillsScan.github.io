<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BillsScan</title>
    <link href="./css/fonts.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('./IMAGENES/imagen_login.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            display: flex;
            width: 40%;
        }
        .left {
            flex: 1;
            background-color: #1e3a8a;
            padding: 30px;
            box-sizing: border-box;
            border-radius: 16px;

        }
        .right {
            flex: 1;
            background-color: #1e3a8a;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            padding: 30px;
            box-sizing: border-box;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
        }
        .title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
      
        .google-button {
            display: flex;
            justify-content: center;
            background-color: white;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 100px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        .google-button:hover{
            transform: scale(1.03);
        }
        .google-button a {
            display: flex;
            width: 100%;
            justify-content: center;
            background-color: white;
            color: black;
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin: 0;
            text-decoration: none;
            
            display: flex;
            align-items: center;
        }

        .google-button img {
            width: 40px;
            height: 40px;
            margin: 0 10px 0 0;
        }

        
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-family: 'Jost';
        }
        .input-group input {
            width: 96%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 14px;
        }
        .btn {
            width: 100%;
            background-color: #C29A3D;  
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 20px;
            border-radius: 14px;
            cursor: pointer;
            font-family: 'Jost';
            font-weight: 500;
        }
        .btn:hover{
            transform: scale(1.04);
        }
        .footer{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            text-align: center;
            margin-top: 24px;
            
           
        }
        .footer .boton_registro{
            width: 40%;
        }
        .footer .boton_registro a {
            font-family: 'Jost';
            font-weight: 500;
            font-size: 20px;
            color: #7696ee;
            text-decoration: none;
        }
        .footer .boton_registro:hover{
            transform: scale(1.04);
        }
        .footer .boton_registro a:hover{
            text-decoration: underline;
        }
        .logo{
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .logo h2{
            font-family: 'Jost';
            font-size: 60px;
            margin: 0;
            color: white;
        }
        .logo img{
            width: auto;
            height: 100px;
            margin: 0 12px 0 0;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="./IMAGENES/Logo.BillsScan.png" alt="BillsScan Logo" class="logo" width="100"> <!-- Update logo source -->
            <h2 class="title">BillsScan</h2>
            </div>
            
            <form>
                <div class="google-button">
                    <a href="#">
                        <img src="./IMAGENES/google_logo.png" alt="Google Logo">
                        <span>Continuar con Google</span>
                    </a>
                </div>
                

                <div class="input-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                
                <button type="submit" class="btn">Iniciar Sesión</button>
                
            </form>
            <div class="footer">
                <div class="boton_registro">
                    <a href="./registro.php">
                        ¿No tienes cuenta?
                    </a>
                </div>
               
               
            </div>
        </div>
    </div>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            window.location.href = './index.php';
        });
    </script>
</body>
</html>
