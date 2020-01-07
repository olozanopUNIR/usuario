// Autor: Óscar Lozano Pérez
// Maestría en Ingeniería de Software y Sistemas Informáticos
// UNIVERSIDAD INTERNACIONAL DE LA RIOJA
// Computación en el Servidor Web
// Desarrollo Web Avanzado

<?php

    // Variables de usuario y contraseña
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    //Cifrado d ela contraseña a SHA1
    $sha1password = sha1($password);
    //Variable para controlar si se ha encontrado un usuario con contraseña correcta
    $login = false;

    // Credenciales.txt guarda los datos de usuario, es exportado a un arreglo para una mejor manipulación de datos
    $file = file('credenciales.txt');

    // Se exploran todos las lineas de usuario en el arreglo
    foreach ($file as $line_num => $line)
    {
        // los valores al estar separado por comas se separan para poder manipularlos
        $values = explode(",",$line);

        // $values[0] guarda los usuarios y $values[5] el password cifrado. Si la combinación de usuario y
        // contraseña son correctos, la bandera se declara como true
        if($values[0]==$usuario && trim($values[5]) == $sha1password)
        {
            $login = true;
            break;
        }
        // si no se encuentra la combinación correcta, se mantiene la bandera en false.
        else{
            if($login == true)
            {
                $login = true;
            }
            else
            {
                $login = false;
            }
        }
    }
    // El usuario es notificado de su inicio de sesión
    if($login==true)
    {
        echo "Bienvenido $usuario";
    }
    // El usuario es denegado el acceso.
    else{
        echo "El nombre de usuario o password son incorrectos";
    }



?>

