<! –– //Pagina de inicio con el forumlario para iniciar sesion  ––>
<html>
    <head>
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <p>
                <label>Usuario:</label>
                <input type="text" id="usuario" name="usuario"/>
            </p>
            <p>
                <label>Password:</label>
                <input type="password" id="password" name="password"/>
            </p>
            <p>
                <input type="submit" id="submit" value="Iniciar Sesión"/>
            </p>
        </form>
    </body>
</html>
<?php
