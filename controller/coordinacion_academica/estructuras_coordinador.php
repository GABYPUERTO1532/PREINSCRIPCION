<?php

    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";

    //Se guarda todos los datos obtenidos de la tabla "pre_stu" (Estudiantes Preinscritos)
    $consulta=consultar_informacion("consultar_listado");

    /*
        Solicitud: Se requiere de una funcion la cual tome cada registro dentro de la tabla "pre_stu" y muestre sus valores en una fila la cual estara contenida dentro de una tabla, asi mismo esta debera contar con un boton el cual rediriga al usuario a la vista "revision_preinscripcion.php" donde podra ver la informacion del estudiante seleccionado, asi como rechazar o aprobar su respectiva preinscripcion.

        Explicacion: Para completar dicho requerimiento se hace uso nuevamente de un ciclo While en el cual su argumento sera la posibilidad de guardar el arreglo asocitivo de un registro NUEVO dentro de la variable "$registo_individual" (Para mas informacion, revisar el modelo "obtener_info.php" en el caso "obtener_info familiar").

        Una vez guardado un unico registro en la variable "$registro_individual", la funcion comenzara a guardar los valores de las claves en sus respetivas variables de nombre similar, para luego se impresas en una fila html.

        ACLARACION: El boton, ademas de ser enlace a la vista de "revision_preisncripcion.php", tambien le esta enviando a dicha vista el numero de documento del estudiante a consultar,Sin mebargo, por cuestiones de seguridad en numero de documento no puede ser enviado con tanta facilidad, sino que este es sometido a la funcion "password_hash", la cual genera una cadena de caracteres encriptados, la cual sera resuelta en el controlador "estructuras_antiguo.php" (Para mas informacion, revisar dicho controlador)
    */
    function listar_registros(){
        
        global $consulta;

        while($registro_individual=mysqli_fetch_assoc($consulta)){

            /*Extraccion de la informacion en variables*/
                $id=$registro_individual['id'];
                $stu_doc_typ=$registro_individual['stu_doc_typ'];
                $stu_doc_num=$registro_individual['stu_doc_num'];
                $stu_typ=$registro_individual['stu_typ'];
                $dat_pre=$registro_individual['dat_pre'];
            /**/

            //Generar el hash del numero de documento del estudiante
            $etc=password_hash($stu_doc_num,PASSWORD_DEFAULT);
            $view=password_hash("true",PASSWORD_DEFAULT);

            echo("
                <tr>
                    <td>$id</td>
                    <td>$stu_doc_typ</td>
                    <td>$stu_doc_num</td>
                    <td>$stu_typ</td>
                    <td>$dat_pre</td>
                    <td><a class='btn btn-primary' href='revision_preinscripcion.php?stu_doc_num=$etc'&status=$view role='button'>Revision Preinscricion</a></td>
                </tr>
            ");

        }
        
    }

?>