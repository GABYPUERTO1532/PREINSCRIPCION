<?php
    
    //Se Trae el modelo "consultar_informacion.php", ya que este contiene en su interiro la funcion para obtener los arrays, los cuales se mostraran como listas desplegables o select html
    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";

    /*
        Explicacion: La funcion "consultar_informacion", unicamente tiene un unico argumento y esta es el nombre de la tabla de la cual queremos obtener la informacion, una vez realizada la consulta, guardara todos los registros en forma de array asociativo para luego ser retornados y guardados en su variable correspondiente:

        Codigo: $departaments=consultar_informacion("obtener_departamentos");

        Explicacion textual: En la variable $departaments guarda el resultado de realizar la funcion "consultar_conformacion", la cual necesito que me obtenga los nombres de los departamentos (obtener_departamentos), asi mismo, dichos registros necesito que esten en forma de arreglo asociativo.

    */
    $departaments=consultar_informacion("obtener_departamentos");

    $cities=consultar_informacion("obtener_ciudades");

    /*
        Solicitud: En este momento, todos los tipos de documento validos en territorio colombiano se encuentran en la tabla "doc_typ", sin embargo hay tipos de documento los cuales no son validos para un estudiante, por lo cual, se requeire que estos sean suprimidos.

        Explicacion: Para cumplir con dicho requerimiento, inicalmente se traen todos los tipos de documento existentes, sin mebargo a dicho listado se le aplica la funcion unset, la cual borra registros segun su posicion dentro del Array.

        En este caso se estaria Suprimiendo:
            NIP
            NUIP
            NIT   
    */
    $stu_doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($stu_doc_typ['1'],$stu_doc_typ['2'],$stu_doc_typ['3']);

    $locations=consultar_informacion("obtener_localidades");

    $sisben=consultar_informacion("obtener_categoria_sisben");

    $eps=consultar_informacion("obtener_eps");

    $blood_group=consultar_informacion("obtener_grupo_sanguineo");

    $rh=consultar_informacion("obtener_factor_rh");

    //Lista Usada para la funcionalidad de creacion de trabajadores del actor "Rectoria";
    $actors=consultar_informacion("consultar_lista_actores");
    unset($actors['1'],$actors['0'],$actors['5'],$actors['6']);

    //Similar al caso de los numeros de documentos validos para el estudiante, sin mebargo, en este caso se suprime: Registro Civil y Tarjeta de identidad
    $fam_doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($fam_doc_typ['5'],$fam_doc_typ['6'],$fam_doc_typ['4']);

    /*
        Antecendetes: En la seccion "Otra informacion" del Formato de Preinscripcion hay listas desplegables y select, sin embargo, estas deberan ser mostradas copiando la estructura html directamente en la vista, sino que esta tiene que ser generada por la funcion correspondiente.

        Explicacion: Se declara una variable con los datos que se requiere que sean mostrados en Dicha lista.
    */
    $yes_no=['Si','No'];

    $ci=['N/A','0-4','5-19','20-34','35-54','55-69','70-84','85-99','100','101-114','115-129','130-139','140-154','155-174','175-184','185-201'];

    $grades=consultar_informacion("obtener_grados");

    /*
        Solicitud: Se requiere una funcion capaz de retornar e imprimir estructuras html, las cuales contengan las clases y propiedades de boostrap, dichas estructuras corresponde a los diferentes tipos de input utilizados.

        Explicacion: Para el correcto funcionamiento de dicha funcion, se necsitan los siguientes argumentos:

            1. $tipo_input (Obligatorio): Tipo de input que se esta solicitando

            2. $titulo (Obligatorio): Titulo de la seccion contenedora del input

            3. $nombre_input (Obligatorio): Nombre del input el cual sera usado para identificarllo a la hora de guardar su valor en una variable de nombre similar

            4. $array_type (Opcional/Obligatorio): En caso de que el usuario solicite una estrucutra "select", este debera especificar que conjunto de datos seran mostrados en dicha lista.

            5. $addons (Opcional): De ser necesario se pueden declarar informacion adicional dentro del input, esta puede ser valores maximos o minimos, estilos en linea, etc.

            6. $maxlength (Opcional): Aunque de forma predeterminada el maximo de caracteres por cada input es de 255, la funcion tambien permite (En caso de ser necesario), definir un numero especifico de caracteres que el input admite
    
    */
    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$addons=null,$maxlength=null,$required=null){

        if(isset($required) AND $required=="desactivado"){
            $required="";
        }else{
            $required="required";
        }

        //Defino como 1 el minimo de caracteres que debe contener cada input en su interior
        $minlenght='1';

        //En caso de que en la funcion no se haya definido un numero personalizado de maximo de caracteres en un input, por defecto se asginaran 255 caracteres como maximo
        if($maxlength==null){
            $maxlength='255';
        }
        
        /*Declaro como globales los las variables que contienen los arrays con la informacion que sea mostrada en las listas desplegables, esto con el fin de poder habilidar su uso dentro de la funcion.*/
            global $departaments;
            global $cities;
            global $stu_doc_typ;
            global $locations;
            global $sisben;
            global $eps;
            global $ars;
            global $blood_group;
            global $rh;
            global $fam_doc_typ;
            global $yes_no;
            global $ci;
            global $actors;
        /**/
    
        /*
            Antecedente: Se requiere que segun el tipo de input solcitado imprima una u otra estructura.

            Explicacion: Para resolver dicho Requerimiento, se hace uso de una estructura switch la cual segun el cotenido de una variable, la estructura realizar una u otra accion(case).

            Asi mismo se realizo un analisis de Patrones en las estructuras de los diferentes inputs utilizados y se determino que unicamente se requieren dos casos dentro de esta estructura, una para inputs generales (text,number,date,email) la cual viene por defecto y luego una estructura select para las listas desplegables
        
        */
        switch ($tipo_input){
            case "select":

                //Se guarda en la variable "$resultado" la primera parte de la estructura html de un select, la cual sera completada con los argumentos insertados en la funcion.
                $resultado=("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' $required>
                            <option value='' style='text-align:center;'>Seleccione</option>
                ");

                /*
                    Solicitud: De acuerdo al tipo de lista seleccionada por el usuario, se requiere que esta sea impresa en forma de lista.

                    Explicacion: Haciendo uso de una estructura switch y segun el contenido del argumento/variable "$array_type", se guardara dentro de la variable $options la lista de items solictada por el usuario
                */
                switch ($array_type){
                    case "departaments":
                        $options=$departaments;
                    break;

                    case "cities":
                        $options=$cities;
                    break;

                    case "stu_doc_typ":
                        $options=$stu_doc_typ;
                    break;

                    case "locations":
                        $options=$locations;
                    break;

                    case "sisben":
                        $options=$sisben;
                    break;

                    case "eps":
                        $options=$eps;
                    break;

                    case "ars":
                        $options=$ars;
                    break;

                    case "blood_group":
                        $options=$blood_group;
                    break;

                    case "rh":
                        $options=$rh;
                    break;

                    case "fam_doc_typ":
                        $options=$fam_doc_typ;
                    break;

                    case "yes_no":
                        $options=$yes_no;
                    break;

                    case "ci":
                        $options=$ci;
                    break;

                    case "actors":
                        $options=$actors;
                    break;

                    
                }

                /*
                    Solicitud: Se debe imprimir cada elemento del array en dentro de una etiqueta option, asi mismo todas estas deberan quedar contenidas dentro de la estructura select declarada anteriormente

                    Explicacion: Habiendo guardados anteriormente, la slista de elementos a mostrar dentro de la variable $options, se hace uso de una estructura foreach, la cual guarda el primer registro de nuestro arreglo y ejecuta el codigo al interior de esta estructura.

                    En este caso, por cada item, se concatenara el contenido actual dentro de la estructura "$resultado" con una etiqueta opcion en la cual su atributo value y el propio texto del option se remplazaran con el item actual.

                    Este proceso se realizara por cada uno de los elementos dentro de la lista.
                
                */
                foreach ($options as $option){

                    if ($option==$addons){
                        $resultado.=("
                            <option value='$option' style='text-align:center;' selected>$option</option>
                        ");
                    }else{
                        $resultado.=("
                            <option value='$option' style='text-align:center;'>$option</option>
                        ");
                    }

                }

                $resultado.=("
                        </select>
                    </div>
                ");

                echo($resultado);
            break;

            /*
                Nota: Anteriormente hemos visto el caso especial de que se requiera una estructura select, sin embargo, para el resto de input se requiere una unica estructura la cual ciertos campos seran reeemplazados con las variables/argumentos de la funcion.
            */
            default:
                echo("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' $required aria-describedby='helpId' maxlength='$maxlength' minlenght='$minlenght'
                            min='1'
                            $addons>
                    </div>
                ");   
            break;
        };
    }

    /*
        Solicitud: Se requere de una funcion de funcionamiento similar a la anterior vista, sin embargo, estos inputs no deben encontrarse dentro de una estructura contenedora la cual le agregue margenes, todo esto ya que estos inputs van dentro de una tabla denominada "Informacion Educativa"

        Explicacion: Su funcionamiento es muy similar a la estructura anterior, con la diferentencia de que esta solo permite postrar las listas de grados y ciudades.
    
    */
    function estructura2($tipo_input,$nombre_input,$array_type=null,$addons=null){

        $maxlength='255';
        $minlenght='1';

        global $cities;
        global $grades;
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-12 input'>
                        <select class='form-control' name='$nombre_input'' id='$nombre_input' $addons>
                            <option value=''style='text-align:center;'>Seleccione</option>
                ");

                switch($array_type){
                    case "grades":
                        $options=$grades;
                    break;

                    case "cities":
                        $options=$cities;
                    break;

                }


                foreach ($options as $option){
                    $resultado.=("
                            <option value='$option' style='text-align:center;'>$option</option>
                    ");
                }

                $resultado.=("
                        </select>
                    </div>
                ");

                echo($resultado);
            break;

            default:
                echo("
                    <div class='mb-3 col-md-9 input'>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' aria-describedby='helpId' maxlength='$maxlength' minlenght='$minlenght'
                            $addons
                        >
                    </div>
                ");   
            break;
        };
    }