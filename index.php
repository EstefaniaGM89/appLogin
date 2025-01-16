<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici de Sessió</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        session_start();
        require_once 'funcions.php';

        /* Si la sessió existeix, mostra el nom de l'usuari i l'enllaç per tancar sessió.
        Si no hi ha sessió, verifica si hi ha una cookie guardada, i si no hi ha cookie guardada,
        mostra el formulari del login.
        */

        if (isset($_SESSION['user_session'])) {
            $nickname = $_SESSION['user_session'];
            echo "<h1 class='welcome-message'>Benvingut, $nickname!</h1>";
            echo '<a class="logout-link" href="logout.php">Tancar sessió</a>';

        } else if (isset($_COOKIE['user_session'])) {
            $_SESSION['user_session'] = $_COOKIE['user_session'];
            $nickname = $_SESSION['user_session'];
            echo "<h1 class='welcome-message'>Benvingut, $nickname!</h1>";
            echo '<a class="logout-link" href="logout.php">Tancar sessió</a>';

        } else {
            ?>
            <h1>Inici de Sessió</h1>
            <form method="POST" action="validacio.php">
                <label for="usuari">Usuari:</label>
                <input type="text" name="usuari" id="usuari" required>
                <br>
                <label for="contrasenya">Contrasenya:</label>
                <input type="password" name="contrasenya" id="contrasenya" required>
                <br>
                <button type="submit">Iniciar sessió</button>
            </form>
            <?php
        }
        ?>
    </div>
</body>
</html>

