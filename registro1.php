<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./css/fonts.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:white;
            color: white;
        }
        .container {
            display: flex;
            width: 100%;
            height: 100%;
            background-color: #0e458d;
            border-radius: 10px;
            overflow: hidden;
        }
        .left {
            width: 35%;
            background: url('./IMAGENES/imagen_registro.webp') no-repeat center center/cover;
            display: flex;
            justify-content: flex-start;
            padding: 7px;
        }
        .left h1 {
            font-size: 45px;
            font-family: sans-serif;
        }
        .right {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right h2 {
            margin-bottom: 20px;
        }
        .right form {
            display: flex;
            flex-direction: column;
        }
        .right form input, .right form button {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }
        .right form input {
            background-color: #333;
            color: white;
        }
        .right form button {
            background-color: #C29A3D;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }
        .right form button:hover {
            background-color: #ad8a37;
        }
        .register-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .register-options button {
            width: 100%;
            margin: 0 10px;
            padding: 10px;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            background-color: white;
            color: black;
            font-weight: 500;
            font-family: 'Jost';
            font-size: 22px;
        }
        .register-options a {
            width: 100%;
        }
        .register-options button:hover {
            transform: scale(1.03);
        }
        .register-options button img {
            width: 40px;
            height: 40px;
            vertical-align: middle;
            margin-right: 4px;
        }
        .right form label {
            display: flex;
            align-items: center;
            font-size: 0.9em;
        }
        .right form input {
           border-radius: 13px;
        }
        .right form button {
            font-family: 'Jost';
            font-size: 22px;
            border-radius: 8px;
            font-weight: 500;
        }
        .right form button:hover {
            transform: scale(1.03);
        }
        .right form label a {
            color: #1d72b8;
            margin-left: 5px;
            text-decoration: none;
        }
        .right form label a:hover {
            text-decoration: underline;
        }
        .right p {
            font-size: 17px;
            font-family: 'Jost';
            text-align: center;

        }
        .right p a {
            color: #70b5ec;
            text-decoration: none;
        }
        .right p a:hover {
            text-decoration: underline;
        }
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            opacity: 0.5; 
            color: rgba(255, 255, 255, 0.5); 
        }
        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5); 
        }
        .separator:not(:empty)::before {
            margin-right: .25em;
        }
        .separator:not(:empty)::after {
            margin-left: .25em;
        }
        .logo{
            display: flex;
            width: 100%;
            height: 100px;
            align-items: center;
            justify-content: center;
        }
        .logo img{
            height: 85px;
        }
        .logo h1{
            font-size: 80px;
            margin-right: 20px;
            font-family: 'Jost';
        }
        .iniciar_sesion{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .boton_inicio{
            align-items: center;
            justify-content: center;
            padding: 15px;
            width: 160px;
            height: 20px;
            margin-left: 15px;
            background-color: #1962c2;
            border-radius: 200px;
            text-align: center;
        }
        .boton_inicio:hover{
            transform: scale(1.03);
            background-color: #1655a7;
        }
        .boton_inicio a{
            text-decoration: none;
            color: white;
            font-family: 'Jost';
        }
        input::placeholder {
            font-family: 'Jost'
        
        }


        @media (max-width: 1200px) {
    .container {
        width: 90%;
    }
    .right {
        padding: 30px;
    }
    .register-options button {
        font-size: 20px;
    }
    .right form input, .right form button {
        padding: 8px;
    }
    .right form button {
        font-size: 20px;
    }
}

@media (max-width: 992px) {
    .container {
        width: 80%;
        flex-direction: column;
    }
    
    .right {
        width: 100%;
        padding: 20px;
    }
    .register-options button {
        font-size: 18px;
    }
    .right form input, .right form button {
        padding: 8px;
        font-size: 16px;
    }
    .right form button {
        font-size: 18px;
    }
}

@media (max-width: 768px) {
    .container {
        width: 90%;
    }
    
    .right {
        padding: 15px;
    }
    .register-options button {
        font-size: 16px;
        padding: 6px;
    }
    .right form input, .right form button {
        padding: 6px;
        font-size: 14px;
    }
    .right form button {
        font-size: 16px;
    }
    .logo h1 {
        font-size: 40px;
    }
}

@media (max-width: 576px) {
    
    body {
        background: url('./IMAGENES/imagen_registro.webp') no-repeat center center/cover;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        display: flex;
        width: 80%;
        height: 75%;
        max-width: 350px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #0e458d;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .left {
        display: none;
    }

    .right {
        width: 100%;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .logo img {
        height: 80px;
    }

    .logo h1 {
        font-size: 40px;
        color: white;
        margin: 10px 10px 0;
    }

    .google-button {
        font-size: 14px;
        padding: 10px;
        background-color: white;
        color: #0e458d;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
        text-decoration: none;
    }

    .google-button img {
        height: 20px;
        margin-right: 10px;
    }

    .right form {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .right form input {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .right form button {
        width: 100%;
        padding: 10px;
        background-color: #C29A3D;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
    }

    .right form button:hover {
        background-color: #ad8a37;
    }

    .footer {
        margin-top: 20px;
        text-align: center;
    }

    .footer .boton_registro {
        width: 100%;
        text-align: center;
    }

    .footer .boton_registro a {
        color: white;
        font-size: 14px;
        text-decoration: none;
    }

    .footer .boton_registro a:hover {
        text-decoration: underline;
    }

    h2 {
        font-size: 16px;
        text-align: center; 
        margin: 0 auto;    
    }
}



    </style>
</head>
<body>
    <div class="container">
        <div class="left">

        </div>

        <div class="right">
            <div class="logo">
                <img src="./IMAGENES/Logo.BillsScan.png" alt="">  
                <h1>BillsScan</h1>
                  
            </div>
            <h2>Regístrate con tu cuenta de Google</h2>
            <div class="register-options">
                <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?response_type=code&access_type=offline&client_id=1046568431490-ij1gi5shcp2gtorls09frkc56d4mjbe2.apps.googleusercontent.com&state=AQDYIp2bEziGQbqqeI5TvXA7TJ60udNPvkPms2QWVEdnHkqUXBo1hknEJlpOXpQGl6TAWBGQ77kfi%2FiioW9eywgGBDfjNZA3x7yu73dIXkh9PV4u%2Fd1nDxX%2BA167ueDLiHJPA0s8e7IWC3naTUrXOYcqUVkQL1UhRb%2FxJk3SJZoxsG78JmPqCn%2B8M6gsSm5yE241HQQ5t9%2FghWcFWL2WKJkzjCGvEzPcVB7XnLkOHU5lbajxTPYPyh6v2rEtOZoUwFERXY%2BcZk6er9x1x7OqrUlvgY5KmbIeuSg%3D&scope=profile%20email%20openid&redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Fgoogle%2Fredirect&service=lso&o2v=2&ddm=0&flowName=GeneralOAuthFlow">
                    <button><img src="./IMAGENES/google_logo.png" alt="Google Logo"> Continuar con Google</button>
                </a>
            </div>
            <div class="separator">O introduce tus datos</div>
            <form>
                <input type="text" placeholder="Nombre completo" required>
                <input type="email" placeholder="Correo electrónico" required>
                <input type="password" placeholder="Contraseña" required>
                <button type="submit">Registrar</button>
            </form>
            <div class="iniciar_sesion">
                <p>¿Ya eres miembro? 
                <div class="boton_inicio">
                    <a href="./login1.php">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
