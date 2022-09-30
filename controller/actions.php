<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/preinscripcion.php";
    
    switch ($action){
        case "create" OR "update":
            crear_actualizar($action);
        break;

        case "matricula_verificada" OR "matricula_rechazada":
            crear_actualizar($action,$stu_doc_num);
        break;

    }

    echo($action);
    
?>