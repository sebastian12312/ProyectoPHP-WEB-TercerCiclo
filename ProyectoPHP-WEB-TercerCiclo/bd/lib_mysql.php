<?php
include_once 'config.php';

$cnx = "";

function bd_conectar() {
    global $cnx;
    $cnx = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    mysqli_query($cnx, "set names utf8");
}

function bd_desconectar() {
    global $cnx;
    mysqli_close($cnx);
}

function bd_consultar($sql) {
    global $cnx;
    $bolsa = mysqli_query($cnx, $sql);
    $salida = array();
    if ($bolsa != null) {
        while ($row = mysqli_fetch_assoc($bolsa)) {
            $salida[] = $row;
        }
        mysqli_free_result($bolsa);
    } else {
        $salida = false;
    }
    unset($row);
    return $salida;
}

function bd_ejecutar($sql) {
    global $cnx;
    $exito = mysqli_query($cnx, $sql);
    if ($exito) {        
        return true;
    } else {        
        return false;
    }
}