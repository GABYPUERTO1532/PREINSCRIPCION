<?php

    include "../config/bd.php";

    function login(){

        //Se importa la coneccion con la Base de datos y los valores POST obtenidos del login y guardados en variables
        global $coneccionBD;
        global $post_emp_ema;
        global $post_emp_pass;
        global $post_emp_char;

        /*

            Explicacion: Se realiza una primera consulta, donde se busquen todos los registro en el cual concuerde el tipo de cargo del empleado y su correo asignado

        */
        $sql="SELECT * FROM workers WHERE per_char='$post_emp_char' AND per_ema='$post_emp_ema'";

        /*

            Se realiza la consulta y se guarda el numero de registros encontrados en la variable "$row_num"
        
            Dato: Recordemos que aunque los cargos pueden ser repetidos por mas de un empleado, el correo es unico, ya que esta compuesto de los nombres y apellidos del empleado en cuestion, por lo cual unicamente nos debe traer un unico registro.

            En caso de traernos mas de un registro, habria un error de digitacion en la informacion de los empleados

        */
        $consulta=$coneccionBD->query($sql);
        $row_num=mysqli_num_rows($consulta);
        
        //El sistema valida que efectivamente solo se encuentra un unico registro con esas caracteristicas
        if($row_num==1){

            /*
                Explicacion: Anteriormente Hemos obtenido toda la informacion del registro de dicho empleado, ahora procederemos a guardarla en forma de Arreglo Asociativo, donde la clave correspondera al nombre de la columna y su respectivo valor corresponde al registro guardado en la columna en cuestion.
            */
            $resultado=$consulta->fetch_assoc();

            /*
                Explicacion: Para poder validar si la contraseña ingresada por el usuario, corresponde al hash de contraseña del empleado, se debe hacer uso de la funcion "password_verify", donde su sintaxis es:
                    
                    password_verify("contaseña_ingresada_por_el_usuario","hash de contraseña guardado en el registro del empleado")
                
                    En caso de que sean iguales, dicha funcion retornara el valor de TRUE, el cual sera tomado como argumento en la estructura if
                
                TIP: Recordemos que por cuestiones de seguridad es recomendable guardar las contraseñas en forma de hash, lo cual no es mas que el resultado de unas complejas operaciones matematicas, que encriptan la contraseña para hacerla incomprensible a simple vista.

                La funcion password_verify genera el hash para la contraseña ingresada por el usuario y luego compara dicho string con el string del hash original
            */
            if(password_verify($post_emp_pass,$resultado['per_hash'])){

                /*
                    En caso que la contraseña si coincida, se acticara una sesion y en la variable 'per_char', se guardara el cargo del empleado, para ser usado en la diferenciacion de este y su posterior redireccion a sus vistas correspondientes.
                */

                session_start();
                $_SESSION['per_char']=$post_emp_char;

                //Una vez hecho esto, la funcion retornara el valor de TRUE, el cual sera usado en el controlador correspondiente
                return TRUE;
            }else{

                //En caso que no haya coincidencias con la informacion ingresada, la funcion retornara el valor de FALSE, el cual sera usado en el controlador correspondiente
                return FALSE;
            }
        }else{
            return FALSE;
        }

    }

?>