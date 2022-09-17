<?php

    include "../config/bd.php";

    function login(){

        //Se importa la coneccion con la Base de datos y los valores POST obtenidos del login y guardados en variables
        global $coneccionBD;
        global $fam_doc_typ;
        global $stu_doc_typ;
        global $fam_doc_num;
        global $stu_doc_num; 
        global $relation;

        /*
        
            Explicacion: Se realiza una consulta en multitabla de la sigueinte manera:

                familiar -> Declarada con la letra F

                    doc_typ(Tipo de documento del familiar)="Valor_ingresado_por_el_usuario"

                    doc_num(Numero de documento del familiar)="Valor_ingresado_por_el_usuario"

                Students -> Declarada con la letra S

                    doc_typ(Tipo de documento del estudiante)="Valor_ingresado_por_el_usuario"

                    doc_num(Numero de documento del estudiante)="Valor_ingresado_por_el_usuario"

                Relations -> Declarada con la letra R

                    fam_id(Numero de documento del Familiar)="Valor_ingresado_por_el_usuario"

                    rel_typ(Relacion del Familiar con el estudiante (Acudiente,Padre o Madre))="Valor_ingresado_por_el_usuario"

                    stu_id(Numero de documento del estudiante)="Valor_ingresado_por_el_usuario"

        */
        $sql="SELECT * FROM familiars F, students S, relations R WHERE F.doc_typ='$fam_doc_typ' AND F.doc_num=$fam_doc_num AND S.doc_typ='$stu_doc_typ' AND S.doc_num=$stu_doc_num AND R.fam_doc_num=$fam_doc_num AND R.rel_typ='$relation' AND R.stu_doc_num=$stu_doc_num";

        //Se realiza la consulta
        $consulta=$coneccionBD->query($sql);

        /*
            Explicacion: Se guarda el numero de registros encontrados con dichas caracteristicas.

            Dato: Al realizar esta consulta con tan precisa informacion, esta unicamente deberia retornar un unico registro, en caso de retornar mas de un registro, se estaria evidenciando un error de digitacion en la informacion
        */
        $resultado=mysqli_num_rows($consulta);

        /*
            En caso de que la consulta haya sido exitosa y se encontrara un UNICO registro, dicha funcion retornara el valor de TRUE, el cual sera usado por el controlador para permitir o no el acceso a las vistas correspondientes

            Tip: En caso de que no se hayan encontrado registros con dicha informacion o aparezcan mas de dos registros simultaneos, la funcion retornada el valor de false, el cual sera usado en la funcion para redirigirlo nuevamente al login y no permitir su ingreso
        */
        if ($resultado==1){
            return TRUE;
        }else{
            return FALSE;
        }
    }

?>