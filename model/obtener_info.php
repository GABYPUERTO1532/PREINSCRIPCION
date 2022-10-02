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

            /**/
        }

        
    }

?>