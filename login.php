<?php
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $sha1password = sha1($password);
    $login = false;

    $file = file('credenciales.txt');
    foreach ($file as $line_num => $line)
    {
        $values = explode(",",$line);

        if($values[0]==$usuario && trim($values[5]) == $sha1password)
        {
            $login = true;
            break;
        }
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
    if($login==true)
    {
        echo "Bienvenido $usuario";
    }
    else{
        echo "El nombre de usuario o password son incorrectos";
    }



?>

