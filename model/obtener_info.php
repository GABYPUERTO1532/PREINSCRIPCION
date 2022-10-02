<?php

    $coneccionBD=mysqli_connect("localhost","root","","preinscripcion");

    function obtener_info($tipo_accion,$stu_doc_num,$nom_reg=null){

        global $coneccionBD;

        switch ($tipo_accion){

            /*FORMATO PREINSCRIPCION*/

                case "obtener_info_estudiante":

                    //Se trae el registro completo de la informacion del estudiante segun su numero de documento
                    $sql="SELECT * FROM students WHERE doc_num='$stu_doc_num'";
                    $consulta=$coneccionBD->query($sql);
                    $resultado=mysqli_fetch_assoc($consulta);

                    return $resultado;

                break;

                case "obtener_info_familiar":
            
                    /*
                    
                        Explicacion: Segun el numero de documento del estudiante ingresado en el login, este sirve como filtro de busqueda en la tabla 'relations', la cual nos permitira obtener los numeros de documento de los familiares, asi como su relacion con dicho estudiante en cuestion
                    
                    */
                    $sql="SELECT fam_doc_num,rel_typ FROM relations WHERE stu_doc_num='$stu_doc_num'";
                    $registros_obtenidos=$coneccionBD->query($sql);

                    /*
                        Antecedente: Habiendo obtenido los numeros de documento de los familiares y su relacion con el estudiante, se requiere que dichos numeros de documento se guarden en una variable correspondiente segun su relacion con el estudiante.

                        Explicacion: Habiendo realizado anteriormente la consulta, se hace uso de una estructura while (Mientras), la cual usa el siguiente argumento:

                            Codigo: $registro_individual=mysqli_fetch_assoc($registros_obtenidos)

                            Explicacion Textual: Mientras se pueda asignar en la variable "$registro_individual" el arreglo asociativo ('clave'=>'valor') del primer registro de  los 3 que se encuentran en la variable '$registos_obtenidos', si esta condicion se cumple, ejecuteme el codigo en su interior, sino, no lo ejecute.

                            Aclaracion: A medida que el ciclo while itera sobre la variable '$registros_obtenidos', siempre escoge el registro siguiente al anteriro y nunca repite registros, por lo cual no hay problema de que sobre escriba registros o se genere un bucle infinito.

                        Explicacion 2: Una vez la condicion del ciclo While sea verdadera, el condicional if evaluara la relacion del familiar con el estudiante, todo esto para determinar en que variable guardar dicha informacion, para esto.

                        TIP: La estructura if funciona de la siguiente manera:

                            Codigo: $registro_individual['rel_typ']=="relacion"

                            Explicacion Textual: Si dentro de la variable "$registro_individual" (Que es un arreglo Asociativo), segun su clave 'rel_typ', revisar si es igual a Madre,Padre o Acudiente, en base a eso, guardar el valor de su clave 'doc_num' en su variable correspondiente

                            Ej: Si en la variable $registro_individual en su clave 'rel_typ' esta tiene el valor de 'Madre', entonces el valor de $registro_individual en su clave 'doc_num' se guardara en la variable $moth_doc_num
                    */
                    while($registro_individual=mysqli_fetch_assoc($registros_obtenidos)){
                        if($registro_individual['rel_typ']=="Madre"){
                            $moth_doc_num=$registro_individual['fam_doc_num'];

                        }elseif($registro_individual['rel_typ']=="Padre"){
                            $fath_doc_num=$registro_individual['fam_doc_num'];
                            
                        }elseif($registro_individual['rel_typ']=="Acudiente"){
                            $acu_doc_num=$registro_individual['fam_doc_num'];
                        }
                    }

                    /*
                        Antecedentes: Teniendo los numeros de documentos y buscando la mayor eficiencia del codigo, la funcion permite indicar especificamente de que familiar se desea obtener el registro.

                        Explicacion: Haciendo uso de la variable "$nom_reg" (Nombre del Registro a Consultar), esta nos permite que numero de documento se asginara a la variable "$fam_doc_num", la cual sera usada como argumento a la hora de traer el registro del familiar solicitado.
                    */
                    
                    switch ($nom_reg){
                        case "Madre":
                            $fam_doc_num=$moth_doc_num;
                        break;

                        case "Padre":
                            $fam_doc_num=$fath_doc_num;
                        break;

                        case "Acudiente":
                            $fam_doc_num=$acu_doc_num;
                        break;

                    }

                    //Se realiza la consulta de la informacion del familiar solicitado
                    $sql="SELECT * FROM familiars WHERE doc_num='$fam_doc_num'";
                    $consulta=$coneccionBD->query($sql);

                    //Se guarda la consulta obtenida como un arreglo asociativo ('clave'=>'valor')
                    $resultado=mysqli_fetch_assoc($consulta);

                    //Se retorna el valor obtenido
                    return $resultado;

                break;

                case "obtener_other_inf":

                    //Se trae el registro del estudiante de la tabla "other_inf"
                    $sql="SELECT * FROM other_inf WHERE stu_doc_num='$stu_doc_num'";
                    $consulta=$coneccionBD->query($sql);
                    $resultado=mysqli_fetch_assoc($consulta);

                    return $resultado;

                break;

                case "obtener_edu_info":
                    
                    /* 

                        Antecedente: El sistema de preinscripcion guarda entre 1 y 6 registros de la informacion o trayectoria educativa del estudiante, esta informacion es guardadas en la tabla "edu_inf", dichos registros deben ser consultados e impresos de forma independiente en el formulario de preinscripcion.

                        Explicacion: Se obtienen todos los registros de la tabla "edu_inf", los cuales en su columna 'stu_doc_num' tengan el mismo valor que el numero de documento del estudiante

                    */
                    $sql="SELECT * FROM edu_inf WHERE stu_doc_num='$stu_doc_num'";
                    $registros_obtenidos=$coneccionBD->query($sql);

                    /*
                        Antecedente: Habiendo obtenido los entre 1 a 6 registros, estos se encuentran condensados en una unica variable, por lo cual se requiere que estos sean guardados en variables separadas, igual que con la informacion de los familaes, sin embargo, a diferencia del caso anterior, estos registros internamente no tienen ningun datos que los diferencie unos de otros.

                        Explicacion: Habiendo realizado anteriormente la consulta, se hace uso de una estructura while (Mientras), la cual usa el siguiente argumento:

                            Codigo: $registro_individual=mysqli_fetch_assoc($registros_obtenidos)

                            Explicacion Textual: Mientras se pueda asignar en la variable "$registro_individual" el arreglo asociativo ('clave'=>'valor') el registro del primer registro contenido en la variable "$registros obtenidos"

                            Aclaracion: A medida que el ciclo while itera sobre la variable '$registros_obtenidos', siempre escoge el registro siguiente al anterior y nunca repite registros, por lo cual no hay problema de que sobre escriba registros o se genere un bucle infinito.

                        Explicacion 2: Una vez la condicion del ciclo While sea verdadera, el condicional if evaluara el estado de las variables de destino, con el fin de evitar sobre escribir la informacion

                        TIP: La estructura if funciona de la siguiente manera:

                            Codigo: !isset($edu_inf_n)

                            Explicacion Textual: Si la variable $edu_inf_n (donde n es el numero del registro a guardar), no esta definida retorna o devuelve el valor de verdadero y ejecuta el codigo en tu interior, en caso contrario repite el mismo proceso con las 6 variables destino.

                            ACLARACION: La funcion isset() evalua la variable en su interior, si esta esta definida devolvera el valor de true, en caso contrario devolvera el valor de False.

                            ACLARACION 2: Como lo menicione anteriormente, la funcion isset retornaria el valor de false al evaluar alguna de las variables destino ya que esta no ha sido declarada anteriormente,lo cual causaria que el codigo al interior de la estructura if no se ejecuta, por ello se usa el simbolo "!" el cual retorna el valor contrario (En este caso TRUE).

                        ACLARACION: Una de las ventajas de usar el isset como condicional en la estructura if es que cada vez que se ejecute el ciclo while evaluara si la variable ya tiene un registro en su interior, en ese caso evaluara la siguiente variable, todo esto hasta encontrar un sitio donde alojarse.

                    */
                    while($registro_individual=mysqli_fetch_assoc($registros_obtenidos)){

                        if(!isset($edu_inf_1)){
                            $edu_inf_1=$registro_individual;

                        }elseif(!isset($edu_inf_2)){
                            $edu_inf_2=$registro_individual;

                        }elseif(!isset($edu_inf_3)){
                            $edu_inf_3=$registro_individual;

                        }elseif(!isset($edu_inf_4)){
                            $edu_inf_4=$registro_individual;

                        }elseif(!isset($edu_inf_5)){
                            $edu_inf_5=$registro_individual;

                        }elseif(!isset($edu_inf_6)){
                            $edu_inf_6=$registro_individual;
                        }

                    }


                    /*
                    
                        Antecedente: Se requeire que la funcion permita especificar cual de los 6 registros obtenidos sea retornado.

                        Explicacion: Haciendo uso la variable "$nom_reg", la cual es obtenida como argumento de la funcion, se emplea para determinar cual de los 6 registros sera retornado.

                    */
                    switch ($nom_reg){
                        case "edu_inf_1":
                            return $edu_inf_1;
                        break;

                        case "edu_inf_2":
                            return $edu_inf_2;
                        break;

                        case "edu_inf_3":
                            return $edu_inf_3;
                        break;

                        case "edu_inf_4":
                            return $edu_inf_4;
                        break;

                        case "edu_inf_5":
                            return $edu_inf_5;
                        break;

                        case "edu_inf_6":
                            return $edu_inf_6;
                        break;

                    }

                break;

            /**/

            /**/
        }

        
    }

?>