<?php

    include "C://xampp/htdocs/PREINSCRIPCION/config/bd.php";

    /*
    
        Explicacion: Esta funcion es de suma importancia ya que en su interior contiene las operaciones de CREATE, UPDATE y DELETE del sistema de preinscripcion. Dichas operaciones se realizan en casos como la creacion o modificacion de un registro de preinscripcion, asi como el rechazo o aceptacion de dichas preinscripciones, todo esto sin mencionar la creacion de cuentas de usuario para personal administrativo dentro de la institucion.

        Tip: El objetivo de la estructura "switch" (Segun), es realizar ciertas acciones segun el contenido de x variable.

    */
    function crear_actualizar($tipo_accion,$post_doc_num=null,$doc_num_moth=null,$doc_num_fath=null,$doc_num_acu=null,$addons=null){

        /*DATOS DEL ESTUDIANTE*/
            global $post_firs_sur;
            global $post_sec_sur;
            global $post_firs_nam;
            global $post_sec_nam;
            global $post_dat_bir;
            global $post_stu_dep;
            global $post_stu_cit;
            global $post_stu_doc_typ;
            global $post_stu_doc_num;
            global $post_exp_cit;
            global $post_stu_add;
            global $post_stu_nei;
            global $post_stu_loc;
            global $post_stu_est;
            global $post_stu_cat;
            global $post_stu_tel;
            global $post_stu_hob;
            global $post_stu_enf;
            global $post_stu_eps;
            global $post_stu_ars;
            global $post_stu_ips;
            global $post_b_grp;
            global $post_rh_fact;

            /*
                Variables extras para la autogeneracion de la fecha y hora, datos necesarios en las operaciones de CREATE y UPDATE del sistema de Preinscripcion
            */

            //Defino la zona horaria por defecto
            date_default_timezone_set('America/Bogota');

            //Genero la fecha con el siguiente formato: "Año-Mes-Dia Hora-Minuto-Seguno"
            $date=date("Y-m-d H:i:s");
        /**/

        /*DATOS MADRE*/
            global $post_fam_nam_moth;
            global $post_doc_typ_moth;
            global $post_doc_num_moth;
            global $post_fam_land_moth;
            global $post_mob_pho_moth;
            global $post_fam_add_moth;
            global $post_fam_ocu_moth;
            global $post_fam_ema_moth;
        /**/

        /*DATOS PADRE*/
            global $post_fam_nam_fath;
            global $post_doc_typ_fath;
            global $post_doc_num_fath;
            global $post_fam_land_fath;
            global $post_mob_pho_fath;
            global $post_fam_add_fath;
            global $post_fam_ocu_fath;
            global $post_fam_ema_fath;
        /**/

        /*DATOS ACUDIENTE*/
            global $post_fam_nam_acu;
            global $post_doc_typ_acu;
            global $post_doc_num_acu;
            global $post_fam_land_acu;
            global $post_mob_pho_acu;
            global $post_fam_add_acu;
            global $post_fam_ocu_acu;
            global $post_fam_ema_acu;
        /**/

        /*OTRA INFORMACION*/
            global $post_conf_vic;
            global $post_dis_sit;
            global $post_dis_arm_grp;
            global $post_dem_son;
            global $post_lim_stu;
            global $post_exp_cap;
            global $post_iq_sco;
            global $post_ass_tes;
        /**/

        /*GRADOS ESCOLAES*/

            /*GRADO ESCOLAR 1*/
                global $post_sch_grd_1;
                global $post_sch_yea_1;
                global $post_sch_cit_1;
                global $post_sch_ins_1;
            /**/

            /*GRADO ESCOLAR 2*/
                global $post_sch_grd_2;
                global $post_sch_yea_2;
                global $post_sch_cit_2;
                global $post_sch_ins_2;
            /**/

            /*GRADO ESCOLAR 3*/
                global $post_sch_grd_3;
                global $post_sch_yea_3;
                global $post_sch_cit_3;
                global $post_sch_ins_3;
            /**/

            /*GRADO ESCOLAR 4*/
                global $post_sch_grd_4;
                global $post_sch_yea_4;
                global $post_sch_cit_4;
                global $post_sch_ins_4;
            /**/

            /*GRADO ESCOLAR 5*/
                global $post_sch_grd_5;
                global $post_sch_yea_5;
                global $post_sch_cit_5;
                global $post_sch_ins_5;
            /**/

            /*GRADO ESCOLAR 6*/
            global $post_sch_grd_6;
            global $post_sch_yea_6;
            global $post_sch_cit_6;
            global $post_sch_ins_6;
            /**/
        /**/

        /*DATOS TRABAJADORES*/

            global $post_emp_nam;
            global $post_emp_doc_typ;
            global $post_emp_doc_num;
            global $post_emp_land;
            global $post_emp_pho;
            global $post_emp_add;
            global $post_emp_char;
            global $post_emp_ema;
            global $post_emp_pass;

        /**/

        global $coneccionBD;

        switch ($tipo_accion){

            /*FORMUALRIO PREINSCRIPCION*/
                case "create":


                    /*
                        Explicacion sentencia SQL:

                            INSERT INTO 'nombre_tabla' ('nombre_columna_1','nombre_columna_n') VALUES ('$valor_columna_1','$valor_columna n' WHERE 'condicion');
                    */

                    //Ingreso informacion Estudiante
                    $sql=("INSERT INTO students (firs_sur,sec_sur,firs_nam,sec_nam,dat_bir,stu_cit,stu_dep,doc_typ,doc_num,exp_cit,stu_add,stu_nei,stu_loc,stu_est,stu_cat,stu_tel,stu_hob,stu_enf,stu_eps,stu_ars,stu_ips,b_grp,rh_fact,pre_stu,stu_typ,cre_dat,upd_dat) VALUES ('$post_firs_sur','$post_sec_sur','$post_firs_nam','$post_sec_nam','$post_dat_bir','$post_stu_cit','$post_stu_dep','$post_stu_doc_typ','$post_stu_doc_num','$post_exp_cit','$post_stu_add','$post_stu_nei','$post_stu_loc','$post_stu_est','$post_stu_cat','$post_stu_tel','$post_stu_hob','$post_stu_enf','$post_stu_eps','$post_stu_ars','$post_stu_ips','$post_b_grp','$post_rh_fact',FALSE,'Nuevo','$date','$date')");
                    $coneccionBD->query($sql);

                    //Ingreso informacion Madre
                    $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_moth','$post_doc_typ_moth','$post_doc_num_moth','$post_fam_land_moth','$post_mob_pho_moth','$post_fam_add_moth','$post_fam_ocu_moth','$post_fam_ema_moth','$date','$date')");
                    $coneccionBD->query($sql);

                    //Ingreso informacion Padre
                    $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_fath','$post_doc_typ_fath','$post_doc_num_fath','$post_fam_land_fath','$post_mob_pho_fath','$post_fam_add_fath','$post_fam_ocu_fath','$post_fam_ema_fath','$date','$date')");
                    $coneccionBD->query($sql);

                    //Ingreso informacion Acudiente
                    $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_acu','$post_doc_typ_acu','$post_doc_num_acu','$post_fam_land_acu','$post_mob_pho_acu','$post_fam_add_acu','$post_fam_ocu_acu','$post_fam_ema_acu','$date','$date')");
                    $coneccionBD->query($sql);

                    /*Ingreso informacion Relaciones*/

                        //Ingreso informacion de Relacion Estudiante Y Madre
                        $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_moth','Madre','$post_stu_doc_num')");
                        $coneccionBD->query($sql);

                        //Ingreso informacion de Relacion Estudiante Y Padre
                        $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_fath','Padre','$post_stu_doc_num')");
                        $coneccionBD->query($sql);

                        //Ingreso informacion de Relacion Estudiante Y Acudiente
                        $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_acu','Acudiente','$post_stu_doc_num')");
                        $coneccionBD->query($sql);

                    /**/

                        //Ingreso informacion a la tabla "other_inf"
                        $sql=("INSERT INTO other_inf (stu_doc_num,conf_vic,dis_sit,dis_arm_grp,dem_son,lim_stu,exp_cap,iq_sco,ass_tes) VALUES ('$post_stu_doc_num','$post_conf_vic','$post_dis_sit','$post_dis_arm_grp','$post_dem_son','$post_lim_stu','$post_exp_cap','$post_iq_sco','$post_ass_tes')");
                        $coneccionBD->query($sql);

                    /*Ingreso Informacion Educativa*/

                        //Registro 1
                        $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_1','$post_sch_yea_1','$post_sch_cit_1','$post_sch_ins_1')");
                        $coneccionBD->query($sql);

                        /*
                        
                            Solicitud: La plataforma debera permitir la preinscripcion de estudiantes de cualquier grado. A dichos estudiantes se les debera solicitar la informacion de los ultimos 5 años de trayectoria escolar.

                            Inconveniente/Problema: El sistema debe solicitar los ultimos 5 años de trayectoria escolar, sin embargo, esto no ocurre para los grados de segundo para abajo, esto causa que queden registros sin llenar lo cua genera inconvenientes con el registro de Preinscripcion.

                            Solucion Planteada: El sistema debera solicitar de forma obligatoria el ultimo año de trayectoria escolar del estudiante, en caso de que este solo llene dicho campo el proceso de preinscripcion se debera llevar a cabo con normalidad.

                            Asi mismo, En caso que el usuario ingrese mas registros sobre su trayectoria escolar, estos se deberan agregar a la tabla con total normalidad.

                            Explicacion: Para lograr identificar su un registro ha sido llenado, se usa uno de sus valores post, en este caso "sch_grd" (Grado de Escolaridad). Dicho valor sera evaluado de la siguiente forma. 

                            Codigo: if($post_sch_grd_2<>"")

                                Explicacion textual: Si la variable "$post_stu_grd_n" es diferente de nada, es decir, diferente de null, realiceme el codigo en su interior.

                                Tip: Recordemos que todos los valores post obtenidos de la diferentes vistas son guardados en variables de nombre similar, para este proceso se hace uso de la funcion "obtener_post", la cual determina si dicho valor POST existe, en caso de estarlo guardara dicho valor en su variable correspondiente, en caso contario guardara en la variable el valor de null.

                                Tip: La funcion "obtener_post" se encuentra en el directorio /config/post.php, dicho archivo es llamado constantemente dentro de nuestra sistema ya que es el encargado de almacenar los valores POST dentro del sistema.

                        */
                            if($post_sch_grd_2<>""){

                                //Registro 2
                                $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_2','$post_sch_yea_2','$post_sch_cit_2','$post_sch_ins_2')");
                                $coneccionBD->query($sql);
                            }

                            if($post_sch_grd_3<>""){

                                //Registro 3
                                $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_3','$post_sch_yea_3','$post_sch_cit_3','$post_sch_ins_3')");
                                $coneccionBD->query($sql);
                            }

                            if($post_sch_grd_4<>""){
                                //Registro 4
                                $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_4','$post_sch_yea_4','$post_sch_cit_4','$post_sch_ins_4')");
                                $coneccionBD->query($sql);
                            }

                            echo($post_sch_grd_4);

                            if($post_sch_grd_5<>""){
                                //Registro 5
                                $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_5','$post_sch_yea_5','$post_sch_cit_5','$post_sch_ins_5')");
                                $coneccionBD->query($sql);
                            }

                            if($post_sch_grd_6<>""){
                                //Registro 6
                                $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_6','$post_sch_yea_6','$post_sch_cit_6','$post_sch_ins_6')");
                                $coneccionBD->query($sql);
                            }

                        /**/

                        
                        $sql="INSERT INTO pre_stu(stu_doc_typ,stu_doc_num,stu_typ,dat_pre) VALUES ('$post_stu_doc_typ','$post_stu_doc_num','Nuevo','$date')";
                        $coneccionBD->query($sql);
                    /**/
                    

                break;

                /*
                
                    Explicacion estructura SQL:

                        UPDATE "nombre_tabla" SET columna_1='$valor_columna1',columna_n='$valor_columnan' WHERE 'condicion'

                */

                case "update":

                    //Actualizacion informacion Estudiante
                    $sql=("UPDATE students SET firs_sur='$post_firs_sur', sec_sur='$post_sec_sur',firs_nam='$post_firs_nam', sec_nam='$post_sec_nam',dat_bir='$post_dat_bir', stu_cit='$post_stu_cit',stu_dep='$post_stu_dep', doc_typ='$post_stu_doc_typ',exp_cit='$post_exp_cit', stu_add='$post_stu_add',stu_nei='$post_stu_nei', stu_loc='$post_stu_loc',stu_est='$post_stu_est', stu_cat='$post_stu_cat',stu_tel='$post_stu_tel', stu_hob='$post_stu_hob',stu_enf='$post_stu_enf', stu_eps='$post_stu_eps',stu_ars='$post_stu_ars', stu_ips='$post_stu_ips',b_grp='$post_b_grp', rh_fact='$post_rh_fact', pre_stu=TRUE, upd_dat='$date' WHERE doc_num=$post_doc_num");
                    $coneccionBD->query($sql);
                    
                    //Actualizacion informacion Madre
                    $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_moth',doc_typ='$post_doc_typ_moth',fam_land='$post_fam_land_moth',mob_pho='$post_mob_pho_moth',fam_add='$post_fam_add_moth',fam_ocu='$post_fam_ocu_moth',fam_ema='$post_fam_ema_moth',upd_dat='$date' WHERE doc_num='$post_doc_num_moth'");
                    $coneccionBD->query($sql);

                    //Actualizacion informacion Padre
                    $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_fath',doc_typ='$post_doc_typ_fath',fam_land='$post_fam_land_fath',mob_pho='$post_mob_pho_fath',fam_add='$post_fam_add_fath',fam_ocu='$post_fam_ocu_fath',fam_ema='$post_fam_ema_fath',upd_dat='$date' WHERE doc_num='$post_doc_num_fath'");
                    $coneccionBD->query($sql);

                    //Actualizacion informacion Acudiente
                    $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_acu',doc_typ='$post_doc_typ_acu',fam_land='$post_fam_land_acu',mob_pho='$post_mob_pho_acu',fam_add='$post_fam_add_acu',fam_ocu='$post_fam_ocu_acu',fam_ema='$post_fam_ema_acu',upd_dat='$date'WHERE doc_num='$post_doc_num_acu'");
                    $coneccionBD->query($sql);

                    //Actualizacion informacion "Other_information"
                    $sql=("UPDATE other_inf SET conf_vic='$post_conf_vic',dis_sit='$post_dis_sit',dis_arm_grp='$post_dis_arm_grp',dem_son='$post_dem_son',exp_cap='$post_exp_cap',iq_sco='$post_iq_sco',ass_tes='$post_ass_tes' WHERE stu_doc_num=$post_doc_num");
                    $coneccionBD->query($sql);

                    /*Actualizacion Informacion Educativa*/

                        //Para facilitar el proceso de actualizacion de la informacion educativa del estudiante, se borra la informacion guardada anteriormente, esto con el fin de ser nuevamente guardada su version actualizada.
                        $sql="DELETE FROM edu_inf WHERE stu_doc_num=$post_doc_num";
                        $coneccionBD->query($sql);

                        //Registro 1
                        $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_1','$post_sch_yea_1','$post_sch_cit_1','$post_sch_ins_1')");
                        $coneccionBD->query($sql);

                        if($post_sch_grd_2<>""){
                            //Registro 2
                            $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_2','$post_sch_yea_2','$post_sch_cit_2','$post_sch_ins_2')");
                            $coneccionBD->query($sql);
                        }

                        if($post_sch_grd_3<>""){

                            //Registro 3
                            $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_3','$post_sch_yea_3','$post_sch_cit_3','$post_sch_ins_3')");
                            $coneccionBD->query($sql);
                        }

                        if($post_sch_grd_4<>""){
                            //Registro 4
                            $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_4','$post_sch_yea_4','$post_sch_cit_4','$post_sch_ins_4')");
                            $coneccionBD->query($sql);
                        }

                        if($post_sch_grd_5<>""){
                            //Registro 5
                            $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_5','$post_sch_yea_5','$post_sch_cit_5','$post_sch_ins_5')");
                            $coneccionBD->query($sql);
                        }

                        if($post_sch_grd_6<>""){
                            //Registro 6
                            $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_doc_num','$post_sch_grd_6','$post_sch_yea_6','$post_sch_cit_6','$post_sch_ins_6')");
                            $coneccionBD->query($sql);
                        }
                        

                        /*Guardado Registro Preinscripcion*/

                            //Una vez la informacion sea actualizada, se guardara un registro en la tabla "pre_stu" el cual sera consultado por coordinacion academica cuando esta realice las respectivas revisiones de las preinscripciones existentes.
                            $sql="INSERT INTO pre_stu (stu_doc_typ,stu_doc_num,stu_typ,dat_pre) VALUES ('$post_stu_doc_typ','$post_doc_num','Nuevo','$date')";
                            $coneccionBD->query($sql);

                        /**/
                        
                    /**/

                break;

            /**/

            /*COORDINACION ACADEMICA*/

                /*
                
                    Explicacion: Cuando el coordinador academico ha verificado la informacion de preinscripcion del estudiante, este podra confirmarla o en su defecto rechazarla, para esto se plantean las siguientes consultas sql correspondientes a estas acciones.
                
                */                    
                case "confirmar_preinscripcion":

                    //Una vez actualizada la informacion del estudiante, el sistema borrara el registro enla tabla de "pre_stu" (Estudiantes preinscritos) ya que este proceso ha finalizado correctamente
                    $sql="DELETE FROM pre_stu WHERE stu_doc_num=$post_doc_num";
                    $coneccionBD->query($sql);

                    /*
                        Explicacion: Actualizacion del numero de documento del estudiante

                        Tip: El coordinador Academico tiene la capacidad de cambiar el numero de documento del estudiante, dicho cambia se ralizara solo en casos excepcionales o por solicitud de padre de familia o acudiente.

                        Nota: En caso de que el coordinador no desee modificar dicha infomacion, solo debera dejar la informacion tal y como es traida de la base de datos, esto ya que de forma predeterminada se sobreescribira la informacion.
                    */
                    $sql=("UPDATE students SET doc_num='$post_stu_doc_num' WHERE doc_num=$post_doc_num");
                    $coneccionBD->query($sql);

                    //Actualizacion Numero de Documento Madre
                    $sql=("UPDATE familiars SET doc_num='$post_doc_num_moth' WHERE doc_num=$doc_num_moth");
                    $coneccionBD->query($sql);

                    //Actualizacion Numero de Documento Padre
                    $sql=("UPDATE familiars SET doc_num='$post_doc_num_fath' WHERE doc_num=$doc_num_fath");
                    $coneccionBD->query($sql);

                    //Actualizacion Numero de Documento Acudiente
                    $sql=("UPDATE familiars SET doc_num='$post_doc_num_acu' WHERE doc_num=$doc_num_acu");
                    $coneccionBD->query($sql);

                    //En caso de que la preinscricpion sea aceptada, el sistema actualizara el registro del estudiante en la columna "pre_stu" (Estudiante preinscrito) con el valor de TRUE
                    $sql="UPDATE students SET pre_stu=TRUE WHERE doc_num=$post_doc_num";
                    $coneccionBD->query($sql);

                break;

                case "rechazar_preinscripcion":

                    //En caso de que la preinscricpion sea Rechazada, el sistema actualizara el registro del estudiante en la columna "pre_stu" (Estudiante preinscrito) con el valor de FALSE
                    $sql="UPDATE students SET pre_stu=FALSE WHERE doc_num='$post_doc_num'";
                    $coneccionBD->query($sql);

                    //Una vez actualizada la informacion del estudiante, el sistema borrara el registro enla tabla de "pre_stu" (Estudiantes preinscritos) ya que este proceso ha finalizado correctamente
                    $sql="DELETE FROM pre_stu WHERE stu_doc_num='$post_doc_num'";
                    $coneccionBD->query($sql);

                break;

            /**/

            /*OFICINA RECTORIA / CUENTA ADMINISTRADOR*/

                /*
                
                    Explicacion: En caso del integro y/o retiro de nuevo personal, la rectora podra modificar la informacion de dicho empleado o en su defecto podra crear dicho usuario y asginarle un cargo dentro de la institucion
                
                */                    
                case "crear_empleado":

                    /*

                        Explicacion: Generacion del Hash de contraseña

                        Tip: Un hash no es mas que el resultado de pasar una cadena de texto por una funcion la cual a traves de un algoritmo especifico, combierte dicha cadena en un conjunto de caracteres alfanumericos de igual cantidad, dicha funcion nos permite encriptar las contraseñas, para que estas no puedan ser extraidas si alguien obtiene acceso a nuestras bases de datos, asi mismo representa una medida de seguridad para el login. 

                    */
                    $emp_hash=password_hash($post_emp_pass,PASSWORD_DEFAULT);

                    echo($post_emp_doc_typ);
                    
                    //Crear nuevo Empleado
                    $sql="INSERT INTO workers (emp_nam,doc_typ,doc_num,emp_land,emp_pho,emp_add,emp_char,emp_ema,emp_hash,cre_dat,upd_dat) VALUES ('$post_emp_nam','$post_emp_doc_typ','$post_emp_doc_num','$post_emp_land','$post_emp_pho','$post_emp_add','$post_emp_char','$post_emp_ema','$emp_hash','$date','$date')";
                    
                    $coneccionBD->query($sql);
                    
                break;

                case "actualizar_empleado":

                    if($post_emp_pass<>null){
                        $emp_hash=password_hash($post_emp_pass,PASSWORD_DEFAULT);
                    }

                    if(isset($post_emp_pass) AND $post_emp_pass<>""){

                        $emp_hash=password_hash($post_emp_pass,PASSWORD_DEFAULT);

                        //Actualizar la informacion de un Empleado Antiguo
                        $sql=("UPDATE workers SET emp_nam='$post_emp_nam', doc_typ='$post_emp_doc_typ',doc_num='$post_emp_doc_num',emp_land='$post_emp_land', emp_pho='$post_emp_pho', emp_add='$post_emp_add', emp_ema='$post_emp_ema', emp_hash='$emp_hash', upd_dat='$date' WHERE doc_num='$post_doc_num'");

                    }else{
                        
                        //Actualizar la informacion de un Empleado Antiguo
                        $sql=("UPDATE workers SET emp_nam='$post_emp_nam', doc_typ='$post_emp_doc_typ',doc_num='$post_emp_doc_num',emp_land='$post_emp_land', emp_pho='$post_emp_pho', emp_add='$post_emp_add', emp_ema='$post_emp_ema',upd_dat='$date' WHERE doc_num='$post_doc_num'");

                    }

                    $coneccionBD->query($sql);

                break;

                case "eliminar_empleado":

                    //Eliminar la informacion de un empleado existente.
                    $sql=("DELETE FROM workers WHERE doc_num='$post_doc_num'");
                    $coneccionBD->query($sql);

                break;

            /**/
        }
        
    }

?>