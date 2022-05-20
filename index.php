<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Grupo Financiero UMG</title>
    <link rel="stylesheet" href="css/normalize.css">  
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Besley:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__tr">
                <div class="caja__tr-login">
                    <h3>¿Ya tienes un Usuario?</h3>
                    <p> Puedes ingresar con tu usuario y contraseña</p>
                    <button id="btn__iniciar-sesion">Ingresar</button>
                </div>
                <div class="caja__tr-formulario">
                    <h3>¿Tienes un problema</h3>
                    <h3>para ingresar al sistema?</h3>
                    <p>Por favor llena el siguiente formulario</p>
                    <button id="btn__formulario">Llenar Formulario</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-formulario">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Ingresar</button>
                </form>

                <!--Register-->
                <form action="" class="formulario__formulario">
                    <h2>Formulario</h2>
                    <input type="text" placeholder="ID Empleado">
                    <input type="text" placeholder="Nombre Completo">
                    <input type="email" placeholder="Correo Electronico">
                    <input type="text"placeholder="Usuario Registrado">
                    <input type="password"placeholder="Contraseña">
                    <input type="text" placeholder="Nombre Completo de Jefe Inmediato">
                    <input type="email" placeholder="Correo de Jefe Inmediato">
                    <input type="text"placeholder="ID de Jefe Inmediato">
                    <textarea class="input-text" placeholder="Detalles del Problema"></textarea>
                    <button id=btn__enviar>Enviar</button>
                </form>
            </div>
        </div>

    </main>
    <script src="javascript/jscript.js"></script>
   <div class="Ft__footer">
    <footer class="footer">
        <p> Todos los derechos reservados Grupo Financiero UMG®</p>   
    </footer>
   </div>
    
</body>
</html>