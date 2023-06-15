<?php
    header("Content-Type:applicatio/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $voltaje = $_DATA["res"]*$_DATA["int"];
    $res = array (
        'numeros' => $_DATA,
        'voltaje' => $voltaje,
    );
    echo json_encode($res, JSON_PRETTY_PRINT);
?>