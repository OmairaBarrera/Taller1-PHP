<?php
    header("Content-Type:applicatio/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);
    function validacion($init, $item){
        $init = $item%2;
        return $init;
    }
    $num = array_reduce($_DATA, "validacion")/count($_DATA);
    $res = array (
        'mensaje' => ($num == 0) ? 'Numero PAR' : 'Numero IMPAR',
        'numero' => $_DATA,
        'validacion' => $num,
    );
    echo json_encode($res, JSON_PRETTY_PRINT);
?>