<?php

    //Funcion: Obtener el valor de $_POST['nombre_input'] y luego debe retornarlo para ser guardado en la varibale de destino, en caso que dicha clave de POST no este defnido retornada vacio
    function obtener_post($nombre_input){
        if(isset($_POST[$nombre_input])){
            return $_POST[$nombre_input];
        }else{
            return "";
        }
    }

    /*INFORMACION lOGIN FAMILIARES*/

        //Input: fam_doc_typ (Tipo de documento familiar)
        $fam_doc_typ=obtener_post('fam_doc_typ');

        //Input: fam_doc_num (Numero de documento familiar)
        $fam_doc_num=obtener_post('fam_doc_num');

        //Input: stu_doc_typ (Tipo de documento Estudiante)
        $stu_doc_typ=obtener_post('stu_doc_typ');

        //Input: stu_doc_num (Numero de documento Estudiante)
        $stu_doc_num=obtener_post('stu_doc_num');

        //Input: relation (Relacion Familiar con el estudiante)
        $relation=obtener_post('relation');

    /**/

    /*INFORMACION lOGIN EMPLEADOS*/

        //Input: fam_doc_typ (Correo Institucional Empleado)
        $emp_ema=obtener_post('emp_ema');

        //Input: emp_pass (Contraseña Empleado)
        $emp_pass=password_hash(obtener_post('emp_pass'),PASSWORD_DEFAULT);

        //Input: per_char (Cargo del empleado dentro de la institucion)
        $emp_char=obtener_post('emp_char');

    /**/



?>