<?php
function getError($perr){
    switch ($perr){
        case "5001";
            $err_desc="metodo no valido";
            break;
        case "6000";
            $err_desc="String no valida";
            break;
        case "6600";
            $err_desc="Numero no valido";
            break;
        case "0";
            $err_desc="No hay error";
            break;
    }
    return $err_desc;
}  
?>