<?php
require_once 'funcions.php';

session_start();
session_unset();
session_destroy();

deleteCookie();

header("Location: index.php");
exit();
?>
