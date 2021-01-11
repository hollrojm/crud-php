<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/botones.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span>Crear Cuenta</span>
        </div>
        <div class="formulario" <h2>Iniciar sesion</h2>
            <form action="modelo/valida.php" method="POST">
                <input type="email" name="email" id="correo" placeholder="Ingresar correo">
                <input type="password" name="password" id="contraseña" placeholder="Ingresar contraseña">
                <div class="centrado">
                    <button class="botton" onclick="login()" href="home.php">Iniciar sesión</button>
                </div>
            </form>

        </div>
        <div class="formulario">
            <h2>Registro</h2>
            <form action="modelo/insertar.php" onsubmit="return validar()" method="POST">
                <input type="text" id="id" name="id" placeholder="Documento">
                <input type="email" id="correo" name="email" placeholder="Email">
                <input type="password" id="contraseña" name="password" placeholder="Contraseña">
                <input type="text" id="telefono" name="phone" placeholder="Telefono">
                <div>
                <button>Registrarse</button>
                
                </div>
            </form>

        </div>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/validar.js"></script>
        <script src="js/estilo.js"></script>
        <div>
        <a href="#">olvide mi contraseña?</a>
        </div>
    </div>
</body>

</html>