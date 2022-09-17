<?php

    include "C://xampp/htdocs/PREINSCRIPCION/config/bd.php";

    function crear_registros(){

        /*DATOS DEL ESTUDIANTE*/
            global $firs_sur;
            global $sec_sur;
            global $firs_nam;
            global $sec_nam;
            global $dat_bir;
            global $stu_dep;
            global $stu_cit;
            global $stu_doc_typ;
            global $stu_doc_num;
            global $exp_cit;
            global $stu_add;
            global $stu_nei;
            global $stu_loc;
            global $stu_est;
            global $stu_cat;
            global $stu_tel;
            global $stu_hob;
            global $stu_enf;
            global $stu_eps;
            global $stu_ars;
            global $stu_ips;
            global $b_grp;
            global $rh_fact;

            //Varibles extras
            $pre_stu=1;
            $cre_dat=date("Y-m-d H:i:s");
            $upd_dat=date("Y-m-d H:i:s");
        /**/

        /*DATOS MADRE*/
            global $fam_nam_moth;
            global $doc_typ_moth;
            global $doc_num_moth;
            global $fam_land_moth;
            global $mob_pho_moth;
            global $fam_add_moth;
            global $fam_ocu_moth;
            global $fam_ema_moth;
        /**/

        /*DATOS PADRE*/
            global $fam_nam_fath;
            global $doc_typ_fath;
            global $doc_num_fath;
            global $fam_land_fath;
            global $mob_pho_fath;
            global $fam_add_fath;
            global $fam_ocu_fath;
            global $fam_ema_fath;
        /**/

        /*DATOS ACUDIENTE*/
            global $fam_nam_acu;
            global $doc_typ_acu;
            global $doc_num_acu;
            global $fam_land_acu;
            global $mob_pho_acu;
            global $fam_add_acu;
            global $fam_ocu_acu;
            global $fam_ema_acu;
        /**/

        /*OTRA INFORMACION*/
            global $conf_vic;
            global $dis_sit;
            global $dis_arm_grp;
            global $dem_son;
            global $lim_stu;
            global $exp_cap;
            global $iq_sco;
            global $ass_tes;
        /**/

        /*GRADOS ESCOLAES*/

            /*GRADO ESCOLAR 1*/
                global $sch_grd_1;
                global $sch_yea_1;
                global $sch_cit_1;
                global $sch_ins_1;
            /**/

            /*GRADO ESCOLAR 2*/
                global $sch_grd_2;
                global $sch_yea_2;
                global $sch_cit_2;
                global $sch_ins_2;
            /**/

            /*GRADO ESCOLAR 3*/
                global $sch_grd_3;
                global $sch_yea_3;
                global $sch_cit_3;
                global $sch_ins_3;
            /**/

            /*GRADO ESCOLAR 4*/
                global $sch_grd_4;
                global $sch_yea_4;
                global $sch_cit_4;
                global $sch_ins_4;
            /**/

            /*GRADO ESCOLAR 5*/
                global $sch_grd_5;
                global $sch_yea_5;
                global $sch_cit_5;
                global $sch_ins_5;
            /**/

            /*GRADO ESCOLAR 6*/
            global $sch_grd_6;
            global $sch_yea_6;
            global $sch_cit_6;
            global $sch_ins_6;
            /**/
        /**/

        /*
            Explicaion: la variable "$coneccionBD" contiene en su interior toda la infromacion necesaria para la coneccion a la base de datos "Preinscripcion".

            En este caso, debemos declarar dicha variable como "global" para poder disponer de la informacion en su interior.

            Tip: En los lenguajes de programacion Modernos se hace uso de dos tipos de variables estas son: Locales Y Globales.

            Locales: Usadas estrictamente en los procesos de una funcion (Es decir, toda aquella variable declarada dentro de una funcion no podria ser usada fuera de esta, asi mismo variables declaras fuera de la funcion no podran ser usadas dentro de esta).

            Globales: Variables visibles y disponibles para todas las funciones y/o procesos dentro del archivo php

        */
        global $coneccionBD;

        /*
        
            Estructura SQL:

                INSERT INTO nombre_tabla (columnas,donde,agregaremos,datos,separados,por,comas) VALUE (valor,de,cada,campo,separado,por,comas,en,el,mismo,orden,inicial)

                VALUE ('$en_caso_de_ser_variables_van_entre_comillas')
        
        */

        //Ingreso informacion Estudiante
        $sql=("INSERT INTO students (firs_sur,sec_sur,firs_nam,sec_nam,dat_bir,stu_cit,stu_dep,doc_typ,doc_num,exp_cit,stu_add,stu_nei,stu_loc,stu_est,stu_cat,stu_tel,stu_hob,stu_enf,stu_eps,stu_ars,stu_ips,b_grp,rh_fact,pre_stu,cre_dat,upd_dat) VALUES ('$firs_sur','$sec_sur','$firs_nam','$sec_nam','$dat_bir','$stu_cit','$stu_dep','$stu_doc_typ','$stu_doc_num','$exp_cit','$stu_add','$stu_nei','$stu_loc','$stu_est','$stu_cat','$stu_tel','$stu_hob','$stu_enf','$stu_eps','$stu_ars','$stu_ips','$b_grp','$rh_fact','$pre_stu','$cre_dat','$upd_dat')");

        //Ejecutamos la consulta
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Madre
        $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$fam_nam_moth','$doc_typ_moth','$doc_num_moth','$fam_land_moth','$mob_pho_moth','$fam_add_moth','$fam_ocu_moth','$fam_ema_moth','$cre_dat','$upd_dat')");
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Padre
        $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$fam_nam_fath','$doc_typ_fath','$doc_num_fath','$fam_land_fath','$mob_pho_fath','$fam_add_fath','$fam_ocu_fath','$fam_ema_fath','$cre_dat','$upd_dat')");
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Acudiente
        $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$fam_nam_acu','$doc_typ_acu','$doc_num_acu','$fam_land_acu','$mob_pho_acu','$fam_add_acu','$fam_ocu_acu','$fam_ema_acu','$cre_dat','$upd_dat')");
        $consulta=$coneccionBD->query($sql);

        /*Ingreso informacion Relaciones*/

            //Relacion Madre - Estudiante
            $sql=("INSERT INTO relations (fam_id,rel_typ,stu_id) VALUES ('$doc_num_moth','Madre','$stu_doc_num')");
            $consulta=$coneccionBD->query($sql);

            //Relacion Padre - Estudiante
            $sql=("INSERT INTO relations (fam_id,rel_typ,stu_id) VALUES ('$doc_num_fath','Padre','$stu_doc_num')");
            $consulta=$coneccionBD->query($sql);

            //Relacion Acudiente Estudiante - Estudiante
            $sql=("INSERT INTO relations (fam_id,rel_typ,stu_id) VALUES ('$doc_num_acu','Acudiente','$stu_doc_num')");
            $consulta=$coneccionBD->query($sql);

        /**/

        //Ingreso informacion "Other_information"
        $sql=("INSERT INTO other_inf (stu_id,conf_vic,dis_sit,dis_arm_grp,dem_son,lim_stu,exp_cap,iq_sco,ass_tes) VALUES ('$stu_doc_num','$conf_vic','$dis_sit','$dis_arm_grp','$dem_son','$lim_stu','$exp_cap','$iq_sco','$ass_tes')");
        $consulta=$coneccionBD->query($sql);

        /*Ingreso Informacion Educativa*/

            //Registro 1
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_1','$sch_yea_1','$sch_cit_1','$sch_ins_1')");
            $consulta=$coneccionBD->query($sql);

            //Registro 2
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_2','$sch_yea_2','$sch_cit_2','$sch_ins_2')");
            $consulta=$coneccionBD->query($sql);

            //Registro 3
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_3','$sch_yea_3','$sch_cit_3','$sch_ins_3')");
            $consulta=$coneccionBD->query($sql);

            //Registro 4
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_4','$sch_yea_4','$sch_cit_4','$sch_ins_4')");
            $consulta=$coneccionBD->query($sql);

            //Registro 5
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_5','$sch_yea_5','$sch_cit_5','$sch_ins_5')");
            $consulta=$coneccionBD->query($sql);

            //Registro 6
            $sql=("INSERT INTO edu_inf (stu_id,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$stu_doc_num','$sch_cit_6','$sch_yea_6','$sch_cit_6','$sch_ins_6')");
            $consulta=$coneccionBD->query($sql);
        
        /**/

    }

    /*OBTENCION DE INFORMACION DE ESTUDIANTES ANTIGUOS*/

        /*
            Funcion "obtener_registro_stu":

            Explicacion: Esta funcion tiene como objetivo obtener el registro actual del estudiante dentro de la tabla "students", CONOCIENDO SU NUMERO DE DOCUMENTO el cual fue ingresado en el formulario de login

        */
        function obtener_registro_stu($stu_doc_num){

            global $coneccionBD;

            //Traeremos el registro completo de la tabla estudiante el cual en el campo 'doc_num' tenga el mismo valor que el documento del estudiante ingresado en el login
            $sql="SELECT * FROM students WHERE doc_num='$stu_doc_num'";

            //Ejecutamos la consulta
            $consulta=$coneccionBD->query($sql);

            /*
                Explicacion: Guardaremos el resultado de dicha consulta en la variable $resultado en forma de array asociativo ('clave1'=>'valor1','clave2'=>'valor2')

                Dato: Se le conoce como array asocitivo ya que como su nombre lo indica, se asocia la clave con un valor, lo cual facilita su posterior llamado
            */
            $resultado=mysqli_fetch_assoc($consulta);
            return $resultado;
        }

        /*
            Funcion "obtener_registro_fam":

            Objetivo: Esta funcion tiene como objetivo obtener los registros de de la tabla "familiars" de aquellos familiares que tengan algun tipo de relacion con el estudiante, para esto, el algoritmo (O conjunto de pasos a seguir) de la funcion es:

            1. Declarar como global la variables $coneccionBD (Explicada anteriormente)

            2. Selecciona los valores "fam_doc_num" y "rel_typ" de la tabla "relations" de todos los registros los cuales la columna "stu_doc_num" concuerde con el numero de documento del estudiante ingresado en el login

                Tip: La tabla "relations" tiene como objetivo especificar la relacion que hay entre un familiar y un estudiante, dicho proceso se repite 3 veces por cada estudiante, ya que un registro corresponde al Padre, otro a la Madre y Otro al acudiente

            3.1 Se emplea una estrucura while(Mientras), la cual ejecutara indefinidamente el codigo en su interior siempre y cuando la condicion evaluada siga siendo veradera.

                - ¿Cual es la condicion evaluada :
                    $resultado=mysqli_fetch_assoc($consulta) 

                -¿Como funciona dicha condicion?:

                    Tip: Recordemos que en todo proceso de Preinscripcion, siempre se guardara la informacion de 3 familiares por cada estudiante, lo cual a la hora de realizar la consulta, dara como resultado que en su interior esten los 3 registros juntos.

                    Partiendo esto, la condicion se expresa de la siguiente forma: Mientras se pueda guardar el n registro en la variable $resultado, realiceme este codigo, este proceso lo realizara por cada registro obtenido

                - ¿En que casos ya no se cumpliria la condicion?:

                    En caso de que no haya mas registros NUEVOS que guardar en la variable $resultado

                    EJ: Si se traen dos registros nada mas, el ciclo while solo se repite dos veces, despues de eso al no haber registros nuevos, dicha condicion no podria cumplirse por lo cual retornaria FALSE y obligaria a no continuar el ciclo while

            3.2

                Una vez guardado cada registro de forma individual, procederemos a evaluar el valor de este en la columna 'rel_typ', la cual expresa la relacion entre el familiar y el estudiante

                    Ej: Familiar es Madre de Estudiante
                
                Dicha evaluacion consiste en que sabiendo su tipo de relacion con el estudiante, el valor correpondiente al numero de documento del familiar se guarde en una variable especifica.

                    Ej: Familiar es Madre de Estudiante, por lo cual su numero de documento es guardados en la variable $moth_num_doc

                Como lo mencione anteriormente, dicho proceso de clasificacion, se repine n veces segun el numero de familiares relacionados con el estudiante (En nuestro caso cocreto, el aplicativo esta diseñado para tener unicamente 3 relaciones, ni mas ni menos).

            4. Una vez separdos los numeros de documentos, emplearemos el segundo argumento de funcion, para determinar espeficamente de que familiar obtendremos su informacion.

                Sintaxis funcion: obtener_registro_fam($numero_documento_estudiante,"Tipo de Familiar del que quiera obtener la informacion")

                EJ: obtener_registro_fam($stu_doc_num,"Madre")

                    Explicacion: Obtener el registro de la familiar la cual es madre del estudiante con x numero de documento 

                    Aclaracion: $stu_doc_num como argumento de funcion, representa el valor $_POST obtenido del inicio de sesion
            
            Una vez el usuario nos indique el tipo de familiar, se realiza una consulta en la tabla 'familiars' en busqueda de aquel registro el cual en su columna 'doc_num' sea igual al numero de documento guardado en el paso 3.2

            5. Finalmente el registro obtenido es retornado para poder ingresarlo en su variable correspondiente

        */
        //familiar->Tipo de familiar del cual se quiera consultar la informacion
        function obtener_registro_fam($stu_doc_num,$familiar){

            //Paso 1
            global $coneccionBD;

            //Paso 2
            $sql="SELECT fam_doc_num,rel_typ FROM relations WHERE stu_doc_num='$stu_doc_num'";
            $consulta=$coneccionBD->query($sql);

            //Paso 3.1
            while ($resultado=mysqli_fetch_assoc($consulta)){

                //Paso 3.2 
                if ($resultado['rel_typ']=="Madre"){
                    $moth_doc_num=$resultado['fam_doc_num'];

                }elseif($resultado['rel_typ']=="Padre"){
                    $fath_doc_num=$resultado['fam_doc_num'];
                    
                }elseif($resultado['rel_typ']=="Acudiente"){
                    $acu_doc_num=$resultado['fam_doc_num'];
                }

            }

            //Paso 4
            switch ($familiar){

                case ("Madre"):
                    $sql="SELECT * FROM familiars WHERE doc_num='$moth_doc_num'";
                    $consulta=$coneccionBD->query($sql);
                    $resultado=mysqli_fetch_assoc($consulta);
                break; 

                case ("Padre"):
                    $sql="SELECT * FROM familiars WHERE doc_num='$fath_doc_num'";
                    $consulta=$coneccionBD->query($sql);
                    $resultado=mysqli_fetch_assoc($consulta);
                break; 

                case ("Acudiente"):
                    $sql="SELECT * FROM familiars WHERE doc_num='$acu_doc_num'";
                    $consulta=$coneccionBD->query($sql);
                    $resultado=mysqli_fetch_assoc($consulta);
                break; 
            }

            //Paso 5
            return $resultado;

        }

        /*
            Funcion obtener_registro_oth_inf

            Objetivo: Esta funcion tienen como objetivo seleccionar de la tabla "oth_inf", aquel registro el cual en su columna 'stu_id' tenga el mismo valor que el numero de documento del estudiante ingresado en el login.

            Su funcionamiento es similar al de la funcion obtener_registro_stu.

        */
        function obtener_registro_oth_inf($stu_doc_num){
            global $coneccionBD;

            $sql="SELECT * FROM other_inf WHERE stu_doc_num='$stu_doc_num'";
            $consulta=$coneccionBD->query($sql);
            $resultado=mysqli_fetch_assoc($consulta);

            return $resultado;
        }

        /*
            Funcion obtener_registro_edu_inf

            Objetivo: Obtener todos los registros de la tabla 'edu_inf' los cuales en su columna 'stu_doc_num' sea igual al documento ingresado en el login.

            Su funcionamiento es similar a la funcion "obtener_registro_fam", ya que de la consulta se obienen 6 diferentes registros, los cuales no tienen forma de ser clasificados por una caracteristica o valor particular.

            Ante esta situacion, el algoritmo para llevar a cabo esta separacion es:

            1.Realizar una consulta en la tabla 'edu_inf' de todos los registros los cuales en su columna 'stu_doc_num' tenga el mismo valor que el documento del estudiante ingresado en el login.

            2. Usar una estructura while la cual ejecute el codigo en su interior mientras la condicion se este cumpliendo. En este caso la condicion es que haya algun registro NUEVO el cual se pueda asignar a la variable "$resultado", en caso de no haber, el ciclo dejaria de reptirse (Para mas informacion revisar la funcion "obtener_registro_fam" en el paso 3.1)

            3.

                Problema a resolver: Se requiere que cada registro obtenido se guarde en una variable independiente, con su respectivo nombre

                Principales inconvenientes:

                    - No existe una caracteristica o valor que ayude a diferenciar un registro de otro (Tal y como si pasa en la funcion "obtener_regitro_fam").

                    - Se requiere que la funcion retorne unicamente el registro indicado por el usuario.

                ¿Como se soluciono?:

                    Se hace uso de una estructura if la cual evalua si una variable esta definida o no.

                    Cuando la variable no esta definida, el registro se guardara en dicha variable, en caso contrario,realizara el mismo proceso para la siguiente variable, todo esto hasta que dicho registro se guarde en alguna variable

                    EJ: Si la variable "$edu_inf_1" no esta definida,entonces se guardara el registro ali, en caso contrario y si la variable "$edu_inf_2" no esta definida, entonces guardar el registro en dicha variable

                    Tip: La funcion isset, retorna el valor de TRUE en caso de que la variable este definida, en caso contrario retornara el valor de true.

                    En este caso se necesita el efecto de contrario de esta funcion: Si la variable no esta definida, retorne el valor de True y realice el ciclo principal, en caso de estar definida retornara el valor de false y ejecutara el resto de codigo.

                    Pasa esto hacemos uso del simbolo "!" el cual cambia el valor retornado por su opuesto.
                
                ¿Por que se implemento dicho condicional?: 

                    Principalmente se buscaba que en cada variable hubiera un unico registro y este no fuera sobre escrito cada vez que se ejecutara el ciclo while
             
            4. Una vez separados los registros, se hace uso del segundo argumento de la funcion en el cual el usuario nos expresara cual de los 6 registros desea retornar.

            Aclaracion final: La tabla 'edu_inf' contiene en su interior toda la trayectoria estudiantel del estudiante durante los ultimos 6 años.

            Es por esta razon, que el sistema esta preparado para trabajar unicamente con hasta 6 registros, ni uno menos ni uno mas.
        */
        function obtener_registro_edu_inf($stu_doc_num,$registro){
            global $coneccionBD;

            //Paso 1
            $sql="SELECT * FROM edu_inf WHERE stu_doc_num='$stu_doc_num'";
            $consulta=$coneccionBD->query($sql);

            //Paso 2
            while ($resultado=mysqli_fetch_assoc($consulta)){            

                //Paso 3
                if(!isset($edu_inf_1)){
                    $edu_inf_1=$resultado;

                }elseif(!isset($edu_inf_2)){
                    $edu_inf_2=$resultado;

                }elseif(!isset($edu_inf_3)){
                    $edu_inf_3=$resultado;

                }elseif(!isset($edu_inf_4)){
                    $edu_inf_4=$resultado;

                }elseif(!isset($edu_inf_5)){
                    $edu_inf_5=$resultado;

                }elseif(!isset($edu_inf_6)){
                    $edu_inf_6=$resultado;
                }
                
            }

            //Paso 4
            switch ($registro){

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

        }
    /**/

?>
