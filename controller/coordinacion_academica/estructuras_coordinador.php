<?php

    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";

    $consulta=consultar_informacion("consultar_listado");

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
                    <td><a class='btn btn-primary' href='revision_preinscripcion.php?stu_doc_num=$etc' role='button'>Revision Preinscricion</a></td>
                </tr>
            ");

        }
        
    }

?>