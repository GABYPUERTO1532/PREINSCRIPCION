<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/crear_actualizar.php";
    include "C://xampp/htdocs/PREINSCRIPCION/config/post.php";

    $stu_doc_num=$_GET['stu_doc_num'];
    
    switch($action){
        
        case "create":
            crear_actualizar("create");
            header("Location: ../");
        break;

        case "update":
            crear_actualizar("update",$stu_doc_num);
            header("Location: ../");
        break;

        case "confirmar_preinscripcion":
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("confirmar_preinscripcion",$stu_doc_num);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;
    }    
?>