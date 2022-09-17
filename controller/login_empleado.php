<?php

    include "../model/login_empleado.php";

    if(
        isset($per_ema) AND  
        isset($per_pass) AND
        isset($per_char)
    ){
        /*
            Explicacion: Validamos si la funcion "login", retorno el valor de true, lo que significa que esta si encontro el registro del empleado con la informacion ingresada por el usuario en el login.
        */
        if(login()){

            /*
                Explicacion: Despues de esto, valida la informacion guardada en "$_SESSION['per_char']", la cual corresponde al cargo que desempeña ese empleado en la institucion.

                Tip: Durante el Login, al usuario se le indica que ingrese que tipo de cargo ocupa en la institucion, dicho valor es guardado en "$_SESSION['per_char']", para luego ser usada en esta estructura
            */
            switch ($_SESSION['per_char']){

                //En caso de que el empleado Trabaje en coordinacion academica, se le redireccionara a la vista /coordinacion_academica/services.php
                case "Coordinacion Academica":
                    header("Location: ../view/empleados/services.php");
                break;

                /*
                    Dato: La estructura swich que valida que tipo de usuario es, permite que de acuerdo al tipo de empleado este pueda ser redirigido a su vista correspondiente, lo cual es bastante util para trabajar con multiples empleados, cada uno con su interfaz propia.

                    Tip: Por falta de tiempo y organizacion, se restringe el acceso unicamente a "Coordinacion Academica", el resto de empleados, seran redireccionados nuevamente al login
                    */
                default:
                    header("Location: ../view/empleados/index.php");
                break;
            }

        }else{

            //En caso de que la informacion ingresada en el login no tenga coincidencias en la base de datos, este lo redirigira nuevamente al login
            header("Location: ../view/empleados/");
        }

    }else{
        header("Location: ../view/empleados/");
    }
    
?>