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
$id = $_GET["id"];

$sql = "DELETE FROM cliente WHERE id = $id;";

if (bd_ejecutar($sql)) {
    header("location: clienteSel.php");
} else {
    die($sql);
}