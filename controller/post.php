<?php

    //Funcion: Obtener el valor de $_POST['nombre_input'] y luego debe retornarlo para ser guardado en la varibale de destino, en caso que dicha clave de POST no este defnido retornada vacio
    function obtener_post($nombre_input){
        if(isset($_POST[$nombre_input])){
            return $_POST[$nombre_input];
        }else{
            return "";
        }
    }

    /*INFORMACION lOGIN*/

        //Input: fam_doc_typ (Tipo de documento familiar)
        $fam_doc_typ=obtener_post('fam_doc_typ');
        echo($fam_doc_typ);

        //Input: fam_doc_num (Numero de documento familiar)
        $fam_doc_num=obtener_post('fam_doc_num');
        echo($fam_doc_num);

        //Input: stu_doc_typ (Tipo de documento Estudiante)
        $stu_doc_typ=obtener_post('stu_doc_typ');
        echo($stu_doc_typ);

        //Input: stu_doc_num (Numero de documento Estudiante)
        $stu_doc_num=obtener_post('stu_doc_num');
        echo($stu_doc_num);

        //Input: relation (Relacion Familiar con el estudiante)
        $relation=obtener_post('relation');
        echo($relation);

    /**/

?>