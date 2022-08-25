<?php

$user = $_POST["txtUser"];
$pass = $_POST["txtPass"];

if ($user === "admin" && $pass === "1234") {
    setcookie("usuario", "admin");
    session_start();
    $_SESSION["acceso"] = "74hdfjhd7328dsjhsd###";
    header("location: intranet.php");
} else {
    header("location: login.php?e=1");
}


