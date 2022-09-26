<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/preinscripcion.php";
    
    
    switch ($action){
        case "create":
            interaccion_bd($action);
        break;

        case "retornar":
            interaccion_bd($action);
        break;
    }

    echo($action);
    
?>