<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/crear_actualizar.php";
    include "C://xampp/htdocs/PREINSCRIPCION/config/post.php";

    $stu_doc_num=$_GET['stu_doc_num'];
    
    if(isset($_GET['action'])){
        $post_action=$_GET['action'];
    }

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
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
        
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("confirmar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;

        case "Rechaza/Negada":
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("rechazar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;
    }
?>