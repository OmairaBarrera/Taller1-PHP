<?php
    header("Content-Type:applicatio/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    function promedio($init, $item){
        $init += $item;
        return $init;
    }
    $promedio = array_reduce($_DATA, "promedio")/count($_DATA);
    $res = array (
        'mensaje' => ($promedio <= 3.9) ? 'Estudie' : 'Becado',
        'notas' => $_DATA,
        'promedio' => $promedio,
    );
    echo json_encode($res, JSON_PRETTY_PRINT);
?>