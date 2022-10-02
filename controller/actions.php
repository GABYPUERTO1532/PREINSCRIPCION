<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/crear_actualizar.php";
    include "C://xampp/htdocs/PREINSCRIPCION/config/post.php";

    $stu_doc_num=$_GET['stu_doc_num'];

    switch($post_action){
        
        case "create":
            crear_actualizar("create");
            header("Location: ../");
        break;

        case "update":
            crear_actualizar("update",$stu_doc_num);
            header("Location: ../");
        break;

        case "Aceptada/Confirmada":
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("confirmar_preinscripcion",$stu_doc_num);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;

        case "Rechaza/Negada":
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("rechazar_preinscripcion",$stu_doc_num);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;
    }
?>