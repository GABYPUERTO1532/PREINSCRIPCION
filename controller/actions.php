<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/preinscripcion.php";
    
    switch ($action){
        case "create" OR "update":
            interaccion_bd($action);
        break;

        case "matricula_verificada" OR "matricula_rechazada":
            interaccion_bd($action,$stu_doc_num);
        break;

    }

    echo($action);
    
?>