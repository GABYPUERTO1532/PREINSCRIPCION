<?php

    include "C://xampp/htdocs/PREINSCRIPCION/model/coordinacion_academica.php";

    $consulta=interaccion_bd("consultar_listado");

    function listar_registros(){
        
        global $consulta;

        while($registro=mysqli_fetch_assoc($consulta)){

            $id=$registro['id'];
            $stu_doc_typ=$registro['stu_doc_typ'];
            $stu_doc_num=$registro['stu_doc_num'];
            $dat_pre=$registro['dat_pre'];

            echo("
                <tr>
                    <td>$id</td>
                    <td>$stu_doc_typ</td>
                    <td>$stu_doc_num</td>
                    <td>$dat_pre</td>
                    <td><input name='' id='' class='btn btn-primary' type='button' value='$stu_doc_num'></td>
                </tr>
            ");

        }
        
    }

?>