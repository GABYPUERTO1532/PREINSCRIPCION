<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/crear_actualizar.php";

    $stu_doc_num=$_GET['stu_doc_num'];
    
    switch($action){
        
        case "create":
            crear_actualizar("create");
            header("Location: ../");
        break;

        case "update":
            crear_actualizar("update");
        break;
    }    
?>