<?php
<?php
// Aquí podrías iniciar sesión o cargar configuraciones si es necesario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Traductor de Textos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f4f4f4;
        }
        header {
            background: #2d3e50;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-login {
            background: #fff;
            color: #2d3e50;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.3);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: #fff;
            padding: 30px 20px;
            border-radius: 8px;
            min-width: 300px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            position: relative;
        }
        .close {
            position: absolute;
            top: 10px; right: 15px;
            font-size: 20px;
            cursor: pointer;
            color: #888;
        }
    </style>
</head>
<body>
    <header>
        <h1>Traductor de Textos</h1>
        <button class="btn-login" onclick="openModal()">Iniciar sesión</button>
    </header>
    <div class="container">
        <h2>Bienvenido a tu traductor de textos</h2>
        <p>
            Esta aplicación te permite traducir textos de un idioma a otro de manera sencilla y rápida.<br>
            Solo ingresa el texto que deseas traducir y selecciona el idioma de destino.
        </p>
        <p>
            ¡Comienza a traducir y explora todas las funciones que tenemos para ti!
        </p>
    </div>

    <!-- Modal de inicio de sesión -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Iniciar sesión</h3>
            <form>
                <label for="usuario">Usuario:</label><br>
                <input type="text" id="usuario" name="usuario" required><br><br>
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
        // Cierra el modal si se hace clic fuera del contenido
        window.onclick = function(event) {
            var modal = document.getElementById('loginModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>