<?php

function ValidString($pValue){ // valida que la string tenga valor >0
    if (strlen($pValue)<1){
        return 6000;
    } else {
        return 0;
    }
}

function ValidNum($pValue1,$pValue2){ // valida que sea un numero
    if (is_numeric ($pValue1) and (is_numeric ($pValue2))){
        return 0;
    } else {
        return 6600;
    }
}   
?>