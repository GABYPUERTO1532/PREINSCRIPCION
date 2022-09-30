<?php

    //Traer El modelo de
    include "C://xampp/htdocs/PREINSCRIPCION/model/coordinacion_academica.php";

    $consulta=crear_actualizar("consultar_listado");

    function listar_registros(){
        
        global $consulta;

        while($registro=mysqli_fetch_assoc($consulta)){

            $id=$registro['id'];
            $stu_doc_typ=$registro['stu_doc_typ'];
            $stu_doc_num=$registro['stu_doc_num'];
            $dat_pre=$registro['dat_pre'];

            $etc=password_hash($stu_doc_num,PASSWORD_DEFAULT);

            echo("
                <tr>
                    <td>$id</td>
                    <td>$stu_doc_typ</td>
                    <td>$stu_doc_num</td>
                    <td>$dat_pre</td>
                    <td><a name='' id='' class='btn btn-primary' href='../../preinscripcion/index.php?stu_doc_num=$etc&addons=1' role='button'>Button</a></td>
                </tr>
            ");

        }
        
    }

?>