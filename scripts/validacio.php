<?php
require_once 'funcions.php';

$nickname = clearEntry($_POST['usuari']);
$password = clearEntry($_POST['contrasenya']);

if (validateUser($nickname, $password)) {
    session_start();
    $_SESSION['user_session'] = $nickname;

    createCookie($nickname);

    header("Location: index.php");
    exit();
    
} else {
    echo "Error en l'inici de sessió. <a href='index.php'>Torna-ho a intentar!</a>";
}
?>
