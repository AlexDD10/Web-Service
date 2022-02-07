<?php
// echo ("<br>---------------Module EXECUTE---------------");

function ExecuteMethod($pMethod, $pP1, $pP2, $pP3){
    $err=0;
    global $response;

    switch ($pMethod){
        case "lcase":
            $response=strtolower($pP1);
            break;
        case "ucase":
            $response=strtoupper($pP1);
            break;
        case "reverse":
            $response=strrev($pP1);
            break;
        case "lenght":
            $response=strlen($pP1);
            break;
        case "instring":
            $response=strpos($pP1,$pP2);
            break;
        case "capitalize":
            $response=ucfirst($pP1);
            break;
        case "suma":
            $response= ($pP1 + $pP2);
            break;
        case "resta":
            $response= ($pP1 - $pP2);
            break;
        case "multiplicacion":
            $response= ($pP1 * $pP2);
            break;
        case "division":
            $response= ($pP1 / $pP2);
            break;
        case "modulo":
            $response= ($pP1 % $pP2);
            break;
        case "equals":
            $response=strcmp($pP1,$pP2);
            break;
    }
    return $err;
}

if ($err==0){
    $err=ExecuteMethod($method, $p1, $p2, $p3);
}
?>