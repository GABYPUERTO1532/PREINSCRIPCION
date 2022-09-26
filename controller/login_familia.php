<?php

    include "../model/login_familia.php";

    /*

        Explicacion: Se llama a la funcion "login" la cual se encuentra en el respectivo modelo, dicha funcion obtiene los valores ingresados en el formulario de ingreso y busca dicha informacion en la base de datos. En caso de encontrar una UNICA coincidencia retornara el valor de TRUE, el cual sera usado como argumento para la estructura if
    
    */
    if (login()){

        //Al validarse su inicio de sesion, el usuario sera redirigido a la vista de preinscripcion
        header("Location: ../view/preinscripcion?stu_doc_num=$post_stu_doc_num");
    }else{

        //En caso que no se haya autorizado el inicio de sesion al usuario, ese sera redirigido nuevamente al login
        header("Location: ../view/preinscripcion/preinscripcion_new.php");
    }

?>