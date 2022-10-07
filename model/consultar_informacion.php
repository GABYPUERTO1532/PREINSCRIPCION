<?php

    include "C://xampp/htdocs/PREINSCRIPCION/config/bd.php";

    /*    
        Explicacion: Esta funcion tiene como fin el obtener todos los registros de diferentes tablas, segun la necesidad del sistema, para ello se hace uso de una estructura switch la cual segun el argumento que le introduzcamos a la funcion, esta buscara en una u otra tabla y retornara el correspondiente resultado a dicha consulta.

        Tip: El objetivo de la estructura "switch" (Segun), es realizar ciertas acciones segun el contenido de x variable.
    */
    function consultar_informacion($consulta){
        global $coneccionBD;

        switch ($consulta){

            /*FORMULARIO PREINSCRIPCION */

                /*

                    Explicacion: En este caso se deben consultar todos los numeros de documentos de los estudiantes registrados en la tabla "students". Dichos registros seran usados mas adelante en su controlador correpondiente, con el fin de iterar sobre estos numeros de documentos e identificar cual de estos corresponde al hash encontrado en la Variable GET que se encuentra en la URL del formato de preinscripcion para estudianters antiguos.

                        Tip 1: Las variables de tipo $_GET son aquellas las cuales se encuentran en la direccion web de la vista (mejor conocida como URL).

                        Tip 2: Cuando el sistema confirma que los datos existen en el sistema, este genera un hash con el numero de documento del estudiante y abre la vista de preinscripcion de estudiante antiguo, donde le pasa una variable llamada "stu_doc_num" la cual tiene como valor el hash del documento del estudiante ingresado en el login (En este caso dicha Variabe es de tipo $_GET).

                        Tip 3. Las razones principales por las cuales se usa este metodo de funcionamiento, seran planteadas en el controlador "preinscripcion_antiguo.php"
                */
                case "obtener_stu_doc_num":
                
                    $sql="SELECT doc_num FROM students";
                    $consulta=$coneccionBD->query($sql);
                    return $consulta;

                break;

                /*
                
                    Funcion: Se deben obtener los nombres todos los departamentos del pais, los cuales seran usados mas adelante en los controladores "preinscripcion_nuevo.php" y "preinscripcion_antiguo.php", con el fin de generar listas desplegables autogeneradas en la vista las cuales tengan los mismos nombres en la base de datos y con ello se eviten errores a la hora de la insercion de los datos.

                    Dato: Esta explicacion, aplica para los metodos de obtener: Departamento,Ciudades,Tipo de documento, Localidades,Barrios,categorias del sisben,eps, grupo sanguineo, Factor RH y grados.
                    
                */
                case "obtener_departamentos":

                    $sql="SELECT dep_nam FROM departaments";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['dep_nam']);
                    }
                    return $array;

                break;

                case "obtener_ciudades":

                    $sql="SELECT cit_nam FROM cities";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['cit_nam']);
                    }
                    return $array;

                break;

                case "obtener_tipo_documento":

                    $sql="SELECT doc_typ FROM doc_typ";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['doc_typ']);
                    }
                    return $array;

                break;

                case "obtener_localidades":

                    $sql="SELECT loc_nam FROM locations";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['loc_nam']);
                    }
                    return $array;

                break;

                case "obtener_categoria_sisben":

                    $sql="SELECT cat_nam FROM sisb_cat";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['cat_nam']);
                    }
                    return $array;

                break;

                case "obtener_eps":

                    $sql="SELECT eps_nam FROM eps";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['eps_nam']);
                    }
                    return $array;

                break;

                case "obtener_grupo_sanguineo":

                    $sql="SELECT gro_nam FROM blo_grp";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['gro_nam']);
                    }
                    unset($array['1'],$array['3'],$array['5'],$array['7']);
                    return $array;

                break;

                case "obtener_factor_rh":

                    $sql="SELECT fac_nam FROM rh_fact";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['fac_nam']);
                    }
                    return $array;

                break;
    
                case "obtener_grados":

                    $sql="SELECT gra_nam FROM grades";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['gra_nam']);
                    }
                    return $array;

                break;

            /**/

            /*VISTA COORDINACION ACADEMICA*/

                /*
                
                    Antecedente 1: Uno de los requerimientos funcionales del sistema es que el coordinador academico pueda ver todos los estudiantes preinscritos.

                    Antecedente 2: Cuando un estudiante se preinscribe por primera vez, su registro se guarda en las diferentes tablas que componen la base de datos, entre esas se encuentra la de "pre_stu"

                    Explicacion: Esta consulta, trae todos los registros de los estudiantes que realizaron el proceso de preinscripcion y estan pendientes de revision por parte del coordinador academico.

                    Aclaracion: Despues de realizar la consulta se retorna, dicho resultado y se le dara uso en el controlador "coordinacion_academica.php", donde este iterara sobre dichos resultados y los mostrara en forma de lista en la vista del coordinador.

                */
                case "consultar_listado_preinscripciones":

                    $sql="SELECT * FROM pre_stu";
                    $consulta=$coneccionBD->query($sql);
                    return $consulta;

                break; 

                case "consultar_listado_empleados":

                    $sql="SELECT * FROM workers";
                    $consulta=$coneccionBD->query($sql);
                    return $consulta;

                break; 

                case "consultar_lista_actores":

                    $sql="SELECT * FROM actors";
                    $consulta=$coneccionBD->query($sql);
                    $array=[];
                    while($item=mysqli_fetch_assoc($consulta)){
                        array_push($array,$item['act_nam']);
                    }
                    return $array;
                    
                break;

                case "consultar_doc_num_emp":
                    
                    $sql="SELECT doc_num FROM workers";
                    $consulta=$coneccionBD->query($sql);

                    return $consulta;
                break;

            /**/

        }

    }

?>