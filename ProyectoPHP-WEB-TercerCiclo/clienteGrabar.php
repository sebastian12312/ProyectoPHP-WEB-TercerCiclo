<?php

session_start();
if ($_SESSION["acceso"] != "74hdfjhd7328dsjhsd###") {
    session_destroy();
    header("location: login.php");
}
include_once './bd/lib_mysql.php';
try {
    bd_conectar();
} catch (Exception $e) {
    die($e->getMessage());
}
$nombre = htmlentities($_POST["nombre"]);
$apellido = htmlentities($_POST["apellido"]);
$celular = htmlentities($_POST["celular"]);
$email = htmlentities($_POST["email"]);
$dni = htmlentities($_POST["dni"]);
$mensaje = htmlentities($_POST["mensaje"]);

if ($_POST["id"] == "") {
    $sql = "INSERT INTO cliente (nombre, apellido, celular, correo, dni, mensaje) VALUES (";
    $sql .= "'$nombre', '$apellido', '$celular', '$email', '$dni', '$mensaje');";
}else{
    $id= $_POST["id"];
    $sql = "UPDATE cliente SET nombre ='$nombre', ";
    $sql .= "apellido ='$apellido' WHERE id = $id;";
    $sql .= "celular ='$celular' WHERE id = $id;";
    $sql .= "dni ='$dni' WHERE id = $id;";
    $sql .= "mensaje ='$mensaje' WHERE id = $id;";

}

if (bd_ejecutar($sql)) {
    header("location: clienteSel.php");
} else {
    die($sql);
}