<?php
// echo "<br>---------------ModulE VALIDATE---------------";

/* VALIDAR SI EL MÉTODO EXISTE*/
function _ValidateMethodExists($pMethod){

    $method_list = array('lcase','ucase','equals','capitalize','reverse','lenght','instring','suma','resta','multiplicacion','division','modulo'); 
    
    if (in_array($pMethod, $method_list, TRUE)) {                   //VALIDAR QUE EL METODO EXISTE
        return 0;
    } else {
        return 5001;
    }
}
/////////////////////////////////////////////////////////
function _ValidateParamsForThisMethod($pMethod, $pP1, $pP2){
    $err=99999999;
    switch ($pMethod){
        case "lcase":
            $err=ValidString($pP1);
            break;
        case "ucase":
            $err=ValidString($pP1);
            break;
        case "reverse":
            $err=ValidString($pP1);
            break;
        case "lenght":
            $err=ValidString($pP1);
            break;
        case "instring":
            $err=ValidString($pP1);
            break;
        case "capitalize":
            $err=ValidString($pP1);
            break;
        case "suma":
            $err=ValidNum($pP1,$pP2);
            break;
        case "resta":
            $err=ValidNum($pP1,$pP2);
            break;
        case "multiplicacion":
            $err=ValidNum($pP1,$pP2);
            break;
        case "division":
            $err=ValidNum($pP1,$pP2);
            break;
        case "modulo":
            $err=ValidNum($pP1,$pP2);
            break;
        case "equals":
            $err=ValidString($pP1,$pP2);
            break;
    }
    return $err;
}
///////////////////////////////////////////////////////////////
$err=  _ValidateMethodExists($method);

if ($err == 0){
    $err = _ValidateParamsForThisMethod($method, $p1, $p2);
}
?>