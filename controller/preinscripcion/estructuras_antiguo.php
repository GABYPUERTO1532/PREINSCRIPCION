<?php

    /*
        Contextualizacion: Cuando accedemos a la vista "estudiante_antiguo.php" se le envia (en forma de variable GET) el hash del numero del documento del estudinate, Una vez cargada la vista, esta guardara  dicho hash en la variable "session", esto con el fin de que al llamar al controlador "estructuras_antiguo.php", este obtenga dicho hash y lo gruade en su propia variable. 

        Explicacion: Guardado Hash del numero de documento del estudiante

    */
    $stu_doc_num_cont=$_SESSION['stu_doc_num_cont'];

    //Se Trae el modelo "consultar_informacion.php", ya que este contiene en su interiro la funcion para obtener los arrays, los cuales se mostraran como listas desplegables o select html
    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";

    //Se llama al modelo "obtener_info", ya que en su interior contiene las funcion que nos permitira traer toda la informacion guardada en la base de datos.
    include "C://xampp/htdocs/PREINSCRIPCION/model/obtener_info.php";

    /*

        Solicitud: Se requiere obtener todos los numeros de documento de los estudiantes preinscritos, esto ya que seran usados para desencriptar el hash del documento el cual nos ha sido traido entregado por la vista.

        Explicacion: Se llama a la funcion "consultar_informacion" y se le indica que me traiga los numeros de documentos de los estudinates ("obtener_stu_doc_num"), despues de esto los guardara en un arreglo asociativo y los almacenara en la variable "$consulta" 
    */
    $consulta=consultar_informacion("obtener_stu_doc_num");

    /*
        Solicitud: Se requeriere que usando la funcion de password_verify, se identifique que numero de documento de los estudiantes corresponde al hash que se nos fue entregado por la vista.

        Explicacion: Similar a los controladores y modelos, se hace uso de un ciclo while en el cual su argumento es la posibilidada de realizar la asignacion de un arreglo asociativo del primer registro de los numeros de documento dentro de la variable "$items_consulta" (Para mas informacion revisar el modelo obtener_info en el caso "obtener_edu_inf").

        Cada uno de estos items debera pasar por la funcion password_verify, la cual determinara si dicho numero de documento pertenece al hash con el que se le esta comparando, en caso de serlo, el valor del numero de documento original sera guardado en la variable "stu_doc_num", en caso contrario seguira con el siguiente item.
    
    */
    while($itmes_consulta=mysqli_fetch_assoc($consulta)){
        if(password_verify($itmes_consulta['doc_num'],$stu_doc_num_cont)){
            $stu_doc_num=$itmes_consulta['doc_num'];
        }
    }
    /*
        Explicacion: Esta funcion se realiza para determinar si el estudiante ya fue preinscrito con anterioridad, para esto hacemos uso del caso "obtener_pre_stu" y pasandole como segundo argumento el numero de documentp del cual se desea hacer la preinscripcion, dicho resultado es de tipo BOOLEANO, lo que significa que sera un valor de 0 (Mejor Conocido como False) o 1 (Mejor Conocido como true).

        Una vez teniendo el valor del de la columna "pre_stu" (O estudiante Preinscrito), podremos comprarar dicho valor con el numero 1 (El cual corrsponde al valor de TRUE), en caso de ser ser iguales, significa que este estudiante ya fue preinscrito con anterioridad, lo cual causa que esta no pueda volver a repetirse. 
    */
    /*$pre_stu=obtener_info("obtener_pre_stu",$stu_doc_num)['pre_stu'];
    if($pre_stu==1){
       header("Location: ../../");
    }*/
    

    /*
        Explicacion: La funcion "consultar_informacion", unicamente tiene un unico argumento y esta es el nombre de la tabla de la cual queremos obtener la informacion, una vez realizada la consulta, guardara todos los registros en forma de array  asociativo para luego ser retornados y guardados en su variable correspondiente:

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
    unset($stu_doc_typ['0'],$stu_doc_typ['1'],$stu_doc_typ['2'],$stu_doc_typ['3']);

    $locations=consultar_informacion("obtener_localidades");

    $sisben=consultar_informacion("obtener_categoria_sisben");

    $eps=consultar_informacion("obtener_eps");

    $blood_group=consultar_informacion("obtener_grupo_sanguineo");

    $rh=consultar_informacion("obtener_factor_rh");

    //Lista Usada para la funcionalidad de creacion de trabajadores del actor "Rectoria";
    $actors=consultar_informacion("consultar_listado_actores");

    //Similar al caso de los numeros de documentos validos para el estudiante, sin mebargo, en este caso se suprime: Registro Civil y Tarjeta de identidad
    $fam_doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($fam_doc_typ['5'],$fam_doc_typ['6']);

    /*
        Antecendetes: En la seccion "Otra informacion" del Formato de Preinscripcion hay listas desplegables y select, sin embargo, estas deberan ser mostradas copiando la estructura html directamente en la vista, sino que esta tiene que ser generada por la funcion correspondiente.

        Explicacion: Se declara una variable con los datos que se requiere que sean mostrados en Dicha lista.
    */
    $yes_no=['Si','No'];

    $ci=['N/A','0-4','5-19','20-34','35-54','55-69','70-84','85-99','100','101-114','115-129','130-139','140-154','155-174','175-184','185-201'];

    $arreglo_asociativo=['CLAVE'=>'VALOR','CLAVE2'=>'valor2'];
    

    //Esta lista de items esta especialmente diseñada para la vista "revision_preinscripcion.php"
    $actions=['Aceptada/Confirmada','Rechaza/Negada'];

    $grades=consultar_informacion("obtener_grados");

    /*
        Solicitud: Se requiere Obtener toda la informacion del estudiante, el cual su numero de documento sea igual al del numero de documento que coincidio con el hash, dicha infromacion, debera serguardada en forma de arreglo asociativo.

        Explicacion: Se llama a la funcion "obtener_info", en ese momento se le indica que se desea obtener la informacion del estudiante ("obtener_info_estudiante"), ademas de indicarle el numero de documento de referencia. La funcion inmediatamente guardara dicho resultado en forma de arreglon asociativo en la variable $stu_info
    */
    $stu_info=obtener_info("obtener_info_estudiante",$stu_doc_num);   
    $_SESSION['stu_typ']=$stu_info['stu_typ'];

    /*
        Solicitud: Se requiere obtener toda la informacion ya sea del padre, madre o acudiente de un estudiante, dicha infromacion debera guardarse en forma de arreglo asociativo.

        Explicacion: Para completar este requerimiento, se llama a la funcion "obtener_info" en la cual le indicaremos que deseamos obtener la informacion de "x" familiar (obtener_info_familiar), para esto, el modelo inicialmente consultara la informacion en la tabla relations y buscara todos aquellos numeros de documento de familiares que tengan alguna relacion con el numero de documento del estudiante.

        Una vez conseguido dichos numeros de documento, se le indica al modelo, de cual tipo de familiar deseamos buscar la informacion (Para mas informacion revisar el modelo "obtener_info.php").
    */
    $moth_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Madre");
    
    $fath_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Padre");

    $acu_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Acudiente");

    /*
        Explicacion: Similar al metodo usado para obtener la informacion personal del estudinate, sin mebargo, esta consulta obtiene los datos de la tabla "oth_inf" (Otra informacion).

        Para mas informacion revisar el modelo "obtener_info.php"
    */
    $oth_inf=obtener_info("obtener_other_inf",$stu_doc_num);

    /*
        Explicacion: Similar al funcionamiento del metodo usado para obtener la informacion de los familiares, con diferencia de que este trae el n-esimo registro de la historia educativa o trayectoria escolar del estudiante

        Para mas informacion revisar el modelo "obtener_info.php"
    */
    $edu_inf_1=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_1");

    $edu_inf_2=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_2");

    $edu_inf_3=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_3");

    $edu_inf_4=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_4");

    $edu_inf_5=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_5");

    $edu_inf_6=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_6");

    /*

        Contextualizacion: Los inputs tienen nombre similar al de las columnas de la base de datos donde son enviados, sin envargo estos presentan algunas diferencias con el fin de facilitar su gestion y manejo.

            EJ: Tabla Familiars -> Actor: Madre

                Nombre columna: doc_num
                Nombre Input: doc_num_moth

            EJ: Tabla edu_inf -> Registro: 6

                Nombre columna: sch_yea
                Nombre Input: sch_yea_6

        Solicitud: Como lo hemos mencionado anteriormente, los nombres son bastante similares, lo cual nos permitira usar el propio nombre del input como argumento para imprimir el valor del array deseado.

        Argumentos funcion:

            1. $array (Obligatorio): Nombre del arreglo obtenido de la base de datos
        
            2. $col_nam(Obligatorio): Nombre del input el cual sera modificado para usarlo como argumento a la hora de la visualizacion de la informacion especifica

        Explicacion:

            Paso 1: Declarar como globales a todos las variables que en su interior contienen la infromacion obtenida de la base de datos en forma de arreglo.

            Paso 2: Identificar el tipo de arreglo al cual queremos acceder. Para esto y apoyyandonos en la variable /argumento llamado "$array", hacemos uso de una estructura switch la cual de acuerdo al contenido de dicha variable realizara una u otra accion.

            Paso 3. Para los arreglos oth_inf y $stu_info (Exceptuando el tipo de documento y numero de documento), el nombre del input no requiere ninguna modificacion y se puede usar tal cual para obtener el valor solicitado en la base de datos

            Paso 4. Para los arreglos $edu_inf_n -> De acuerdo a la terminacion de este, la operacion se realizara en cualquiera de los 6 registros.

                Ej: 
                
                    $edu_inf_6 -> Acceso al registro 6 de la informacion educativa

                    $edu_inf_5 -> Acceso al registro 5 de la informacion educativa.

            Una vez determinado a que registro acceder se eliminan los dos ultimos caracteres del nombre del input, lo cual pemitiria consulta el valor dentro del array solicitado.

                Ej: $edu_inf_6 y $sch_yea_6 -> Accedo al registro 6 de la informacion educativa, luego le quito los ultimos caracteres al nombre del input, quedando "sch_yea". Este ultimo es el la clave del valor que deseamos consultar.

            Paso 5: La obtencion de los valores del areglo de los familiares similar al funcionamiento del arreglo "edu_inf_n"

    */
    function seleccionar_col_array($array,$col_nam){

        global $stu_info;
        global $moth_info;
        global $fath_info;
        global $acu_info;
        global $oth_inf;
        global $edu_inf_1;
        global $edu_inf_2;
        global $edu_inf_3;
        global $edu_inf_4;
        global $edu_inf_5; 
        global $edu_inf_6;

        switch ($array){
            
            case "estudiante":
                switch ($col_nam){
                    case "stu_doc_typ":
                        $resultado=$stu_info['doc_typ'];        
                        return $resultado;
                    break;

                    case "stu_doc_num":
                        $resultado=$stu_info['doc_num'];        
                        return $resultado;
                    break;
                }

                return $stu_info[$col_nam];
            break;

            case "oth_inf":
                return $oth_inf[$col_nam];
            break;

            /*
                Funcion "substr":

                Sintaxis: substr($string,$start,$length)

                    Argumentos:

                        1.$String: Cadena de caracteres la cual vamos a recortar

                        2. $start: Caracter desde el cual comenzara a retornar el valor.

                        Este argumento acepta valores tanto positivos como negativos, en caso de ser de 0 en adelante contara desde el comienzo del estring en adelante, en caso de ser al contrario contara desde el final hacia el inicio

                        OJO: Si el numero supera la cantidad de caracteres del string, retornara FALSE

                        3. Length: Esta variable determina la cantidad de caracteres los cuales seran impresos, desde donde comienza start y su direccion.

                        EJ:

                            substr('abcdefgh','4','2') -> en este caso comenzara a contar desde el cuarto caracter, es decir desde la letra d (Se comienza a contar pero la letra d no se incluye) y se muestran los siguientes dos digitos, entonces se retornaria los caracteres "ef"
            */

            //En este caso conreto $length es negativo, eso significa, que se contara del final al inicio omitiendo los dos primeros caracteres
            case "edu_inf_1":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_1[$col_nam];
            break;

            case "edu_inf_2":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_2[$col_nam];
            break;

            case "edu_inf_3":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_3[$col_nam];
            break;

            case "edu_inf_4":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_4[$col_nam];
            break;

            case "edu_inf_5":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_5[$col_nam];
            break;

            case "edu_inf_6":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_6[$col_nam];
            break;

            //Funcionamiento similar al del arreglo "edu_inf_n".
            case "madre" OR "padre" OR "acudiente":

                if($array=="madre"){
                    $col_nam=substr($col_nam,0,-5);
                    return $moth_info[$col_nam];

                }elseif($array=="padre"){
                    $col_nam=substr($col_nam,0,-5);
                    return $fath_info[$col_nam];

                }elseif($array=="acudiente"){ 
                    $col_nam=substr($col_nam,0,-4);
                    return $acu_info[$col_nam];

                }

            break;

        }
    }


        /*
        Solicitud: Se requiere una funcion capaz de retornar e imprimir estructuras html, las cuales contengan las clases y propiedades de boostrap, dichas estructuras corresponde a los diferentes tipos de input utilizados.

        Explicacion: Para el correcto funcionamiento de dicha funcion, se necsitan los siguientes argumentos:

            1. $tipo_input (Obligatorio): Tipo de input que se esta solicitando

            2. $titulo (Obligatorio): Titulo de la seccion contenedora del input

            3. $nombre_input (Obligatorio): Nombre del input el cual sera usado para identificarllo a la hora de guardar su valor en una variable de nombre similar

            4. $array_type (Opcional/Obligatorio): En caso de que el usuario solicite una estrucutra "select", este debera especificar que conjunto de datos seran mostrados en dicha lista.

            5. $array_bd (Obligatorio): En este campo se debe especificar de cual array de la base de datos se debe optener el valor predeterminado de ese input

            6. $addons (Opcional): De ser necesario se pueden declarar informacion adicional dentro del input, esta puede ser valores maximos o minimos, estilos en linea, etc.

            7. $maxlength (Opcional): Aunque de forma predeterminada el maximo de caracteres por cada input es de 255, la funcion tambien permite (En caso de ser necesario), definir un numero especifico de caracteres que el input admite
    
    */
    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$array_bd=null,$addons=null,$maxlength=null){

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
        global $actions;
        global $actors;

        /*
        
            Explicacion: De acuerdo a la informacion suminustrada a la funcion a la hora de invocarla, en la variable $value_select, se guardara el valor correspondiente al nombre del input el cual es columna dentro de la tabla consulltada.
        
            Ejemplo:

                $value_select=seleccionar_col_array(madre,mob_pho_moth);

                Explicacion Textual: En la variable $value_select almacene el valor que se encuentra en la columna mob_pho, del registro del fammiliar que es madre del estudiante.
        */


        $value_select=seleccionar_col_array($array_bd,$nombre_input);
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' required>
                            <option value='' style='text-align:center;'>Seleccione</option>
                ");

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

                    case "actions":
                        $options=$actions;
                    break;
                    
                    case "actors":
                        $options=$actors;
                    break;

                    
                }

                foreach ($options as $option){

                    /*
                        Solicitud: Se requiere que el sistema mientras imprime las listas de elementos y aquel item que sea igual al dato guardado en la base de datos, quede seleccionado con el fin de que este aparezca como que ya fue completado
                    
                        Explicacion: Haciendo uso de la funcion foreach, se extrae cada elemento de dicha lista y genera un elemento option html, el cusl tiene como titulo y valor, aquel item indicado.

                        Sin embargo, si dicho item concuerda con la informacion guardada en el registro, a este se le añadira la el atributo "selected"  el cual como su nombre lo indica, seleccionara dicho input y su valor quedara de primeras.
                    */
                    if ($option==$value_select){
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

            //Estructura general para el resto de inputs y se añade el atributo value el cual sera reemplazado por el dato guardado en la base de datos.
            default:
                echo("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' 
                            maxlength='$maxlength' aria-describedby='helpId' required minlenght='$minlenght'
                            min='0' value='$value_select'
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
    function estructura2($tipo_input,$nombre_input,$array_type=null,$array_bd=null,$addons=null,$maxlength='255',$minlenght='1'){
        global $cities;
        global $grades;

        $value_select=seleccionar_col_array($array_bd,$nombre_input);
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-12 input'>
                        <select class='form-control' name='$nombre_input' id='$nombre_input' $addons>
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

                    if ($option==$value_select){
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

            default:
                echo("
                    <div class='mb-3 col-md-9 input'>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' aria-describedby='helpId' maxlength='$maxlength' minlenght='$minlenght' value='$value_select'
                            $addons
                        >
                    </div>
                ");   
            break;
        };
    }