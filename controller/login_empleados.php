<?php

    include "../model/login_empleados.php";

    if(login()){
        switch ($_SESSION['per_char']){
            case "Coordinacion Academica":
                header("Location: ../view/empleados/coordinacion_academica/services.php");
            break;

            default:
                header("Location: ../view/empleados");
            break;
        }

    }else{
        header("Location: ../view/empleados");
    }
    

?>