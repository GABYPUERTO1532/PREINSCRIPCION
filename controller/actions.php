<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/crear_actualizar.php";
    include "C://xampp/htdocs/PREINSCRIPCION/config/post.php";

    if(isset($_GET['stu_doc_num'])){
        $stu_doc_num=$_GET['stu_doc_num'];   
    }else{
        $stu_doc_num="";   
    }

    if(isset($_GET['stu_typ'])){
        $stu_typ=$_GET['stu_typ'];
    }else{
        $stu_typ="Nuevo";   
    }
    
    if(isset($_GET['action'])){
        $post_action=$_GET['action'];
    }

    if(isset($_GET['emp_doc_num'])){
        $post_emp_doc_num=$_GET['emp_doc_num'];
    }

    /*

        Solicitud: Se requeire la creacion de una funcion la cual centralice y facilite la gestion de las operaciones en la base de datos, para esto, esta obtiene todos los valores post y debera realizar la operacion solicitada por la correspondiente vista.

        Explicacion: La funcion debera estar preparada para recibir la informacion sobre aquella operacion que se desea realizar, dicha informacion puede provenir de dos formas distintas:

            1. Variable $_GET: Estos valores son obtenidos desde la URL con la cual se ha llamado al archivo contenedor de la funcion. Este metodo de obtenicion esta presente en las vistas "preinscripcion_antiguo.php" y "preinscripcion_nuevo.php", ya que estas solo requieren realizar una unica operacion en la base de datos.
            
            2. Valor POST: Este valor es obtenido al traer informacion POST, la cual sera suministrada en la vista sobre aquella operacion que debe realizar. Dicho metodo de obtencion de la informacion se encuntra presente el la vista "revision_preinscripcion.php" ya que esta tiene la capacidad de solicitar dos operaciones distintas en la base de datos.
    */
    switch($post_action){
        
        //Metodo vista "preinscripcion_nuevos.php"
        case "create":
            crear_actualizar("create");
            $pdf_info=[
                //INFORMACION DEL ESTUDIANTE
                'firs_sur'=>$post_firs_sur,
                'sec_sur'=>$post_sec_sur,
                'firs_nam'=>$post_firs_nam,
                'sec_nam'=>$post_sec_nam,
                'dat_bir'=>$post_dat_bir,
                'stu_dep'=>$post_stu_dep,
                'stu_cit'=>$post_stu_cit,
                'stu_doc_typ'=>$post_stu_doc_typ,
                'stu_doc_num'=>$post_stu_doc_num,
                'exp_cit'=>$post_exp_cit,
                'stu_add'=>$post_stu_add,
                'stu_loc'=>$post_stu_loc,
                'stu_nei'=>$post_stu_nei,
                'stu_est'=>$post_stu_est,
                'stu_cat'=>$post_stu_cat,
                'stu_tel'=>$post_stu_tel,
                'stu_hob'=>$post_stu_hob,
                'stu_enf'=>$post_stu_enf,
                'stu_eps'=>$post_stu_eps,
                'stu_ars'=>$post_stu_ars,
                'stu_ips'=>$post_stu_ips,
                'b_grp'=>$post_b_grp,
                'rh_fact'=>$post_rh_fact,
            
                //INFORMACION MADRE
                'fam_nam_moth'=>$post_fam_nam_moth,
                'doc_typ_moth'=>$post_doc_typ_moth,
                'doc_num_moth'=>$post_doc_num_moth,
                'fam_land_moth'=>$post_fam_land_moth,
                'mob_pho_moth'=>$post_mob_pho_moth,
                'fam_add_moth'=>$post_fam_add_moth,
                'fam_ocu_moth'=>$post_fam_ocu_moth,
                'fam_ema_moth'=>$post_fam_ema_moth,
            
                //INFORMACION PADRE
                'fam_nam_fath'=>$post_fam_nam_fath,
                'doc_typ_fath'=>$post_doc_typ_fath,
                'doc_num_fath'=>$post_doc_num_fath,
                'fam_land_moth'=>$post_fam_land_fath,
                'mob_pho_fath'=>$post_mob_pho_fath,
                'fam_add_fath'=>$post_fam_add_fath,
                'fam_ocu_fath'=>$post_fam_ocu_fath,
                'fam_ema_fath'=>$post_fam_ema_fath,
            
                //INFORMACION ACUDIENTE
                'fam_nam_acu'=>$post_fam_nam_acu,
                'doc_typ_acu'=>$post_doc_typ_acu,
                'doc_num_acu'=>$post_doc_num_acu,
                'fam_land_acu'=>$post_fam_land_acu,
                'mob_pho_acu'=>$post_mob_pho_acu,
                'fam_add_acu'=>$post_fam_add_acu,
                'fam_ocu_acu'=>$post_fam_ocu_acu,
                'fam_ema_acu'=>$post_fam_ema_acu,
            
                //OTRA INFORMACION
                'conf_vic'=>$post_conf_vic,
                'dis_sit'=>$post_dis_sit,
                'dis_arm_grp'=>$post_dis_arm_grp,
                'dem_son'=>$post_dem_son,
                'lim_stu'=>$post_lim_stu,
                'exp_cap'=>$post_exp_cap,
                'iq_sco'=>$post_iq_sco,
                'ass_tes'=>$post_ass_tes,
                            
                //OTRA INFORMACION
                'conf_vic'=>$post_conf_vic,
                'dis_sit'=>$post_dis_sit,
                'dis_arm_grp'=>$post_dis_arm_grp,
                'dem_son'=>$post_dem_son,
                'lim_stu'=>$post_lim_stu,
                'exp_cap'=>$post_exp_cap,
                'iq_sco'=>$post_iq_sco,
                'ass_tes'=>$post_ass_tes,
            
                //INFORMACION EDUCATIVA 1
                'sch_grd_1'=>$post_sch_grd_1,
                'sch_yea_1'=>$post_sch_yea_1,
                'sch_cit_1'=>$post_sch_cit_1,
                'sch_ins_1'=>$post_sch_ins_1,
            
                //INFORMACION EDUCATIVA 2
                'sch_grd_2'=>$post_sch_grd_2,
                'sch_yea_2'=>$post_sch_yea_2,
                'sch_cit_2'=>$post_sch_cit_2,
                'sch_ins_2'=>$post_sch_ins_2,
            
                //INFORMACION EDUCATIVA 3
                'sch_grd_3'=>$post_sch_grd_3,
                'sch_yea_3'=>$post_sch_yea_3,
                'sch_cit_3'=>$post_sch_cit_3,
                'sch_ins_3'=>$post_sch_ins_3,
            
                //INFORMACION EDUCATIVA 4
                'sch_grd_4'=>$post_sch_grd_4,
                'sch_yea_4'=>$post_sch_yea_4,
                'sch_cit_4'=>$post_sch_cit_4,
                'sch_ins_4'=>$post_sch_ins_4,
            
                //INFORMACION EDUCATIVA 5
                'sch_grd_5'=>$post_sch_grd_5,
                'sch_yea_5'=>$post_sch_yea_5,
                'sch_cit_5'=>$post_sch_cit_5,
                'sch_ins_5'=>$post_sch_ins_5,
            
                //INFORMACION EDUCATIVA 6
                'sch_grd_6'=>$post_sch_grd_6,
                'sch_yea_6'=>$post_sch_yea_6,
                'sch_cit_6'=>$post_sch_cit_6,
                'sch_ins_6'=>$post_sch_ins_6,
            ];
            $_SESSION['pdf_info']=$pdf_info;
            header("Location: ../view/imprimir.php");
        break;

        //Metodo vista "preinscripcion_antiguos.php"
        case "update":
            crear_actualizar("update",$stu_doc_num,"","","",$stu_typ);
            $pdf_info=[
                //INFORMACION DEL ESTUDIANTE
                'firs_sur'=>$post_firs_sur,
                'sec_sur'=>$post_sec_sur,
                'firs_nam'=>$post_firs_nam,
                'sec_nam'=>$post_sec_nam,
                'dat_bir'=>$post_dat_bir,
                'stu_dep'=>$post_stu_dep,
                'stu_cit'=>$post_stu_cit,
                'stu_doc_typ'=>$post_stu_doc_typ,
                'stu_doc_num'=>$post_stu_doc_num,
                'exp_cit'=>$post_exp_cit,
                'stu_add'=>$post_stu_add,
                'stu_loc'=>$post_stu_loc,
                'stu_nei'=>$post_stu_nei,
                'stu_est'=>$post_stu_est,
                'stu_cat'=>$post_stu_cat,
                'stu_tel'=>$post_stu_tel,
                'stu_hob'=>$post_stu_hob,
                'stu_enf'=>$post_stu_enf,
                'stu_eps'=>$post_stu_eps,
                'stu_ars'=>$post_stu_ars,
                'stu_ips'=>$post_stu_ips,
                'b_grp'=>$post_b_grp,
                'rh_fact'=>$post_rh_fact,
            
                //INFORMACION MADRE
                'fam_nam_moth'=>$post_fam_nam_moth,
                'doc_typ_moth'=>$post_doc_typ_moth,
                'doc_num_moth'=>$post_doc_num_moth,
                'fam_land_moth'=>$post_fam_land_moth,
                'mob_pho_moth'=>$post_mob_pho_moth,
                'fam_add_moth'=>$post_fam_add_moth,
                'fam_ocu_moth'=>$post_fam_ocu_moth,
                'fam_ema_moth'=>$post_fam_ema_moth,
            
                //INFORMACION PADRE
                'fam_nam_fath'=>$post_fam_nam_fath,
                'doc_typ_fath'=>$post_doc_typ_fath,
                'doc_num_fath'=>$post_doc_num_fath,
                'fam_land_moth'=>$post_fam_land_fath,
                'mob_pho_fath'=>$post_mob_pho_fath,
                'fam_add_fath'=>$post_fam_add_fath,
                'fam_ocu_fath'=>$post_fam_ocu_fath,
                'fam_ema_fath'=>$post_fam_ema_fath,
            
                //INFORMACION ACUDIENTE
                'fam_nam_acu'=>$post_fam_nam_acu,
                'doc_typ_acu'=>$post_doc_typ_acu,
                'doc_num_acu'=>$post_doc_num_acu,
                'fam_land_acu'=>$post_fam_land_acu,
                'mob_pho_acu'=>$post_mob_pho_acu,
                'fam_add_acu'=>$post_fam_add_acu,
                'fam_ocu_acu'=>$post_fam_ocu_acu,
                'fam_ema_acu'=>$post_fam_ema_acu,
            
                //OTRA INFORMACION
                'conf_vic'=>$post_conf_vic,
                'dis_sit'=>$post_dis_sit,
                'dis_arm_grp'=>$post_dis_arm_grp,
                'dem_son'=>$post_dem_son,
                'lim_stu'=>$post_lim_stu,
                'exp_cap'=>$post_exp_cap,
                'iq_sco'=>$post_iq_sco,
                'ass_tes'=>$post_ass_tes,
                            
                //OTRA INFORMACION
                'conf_vic'=>$post_conf_vic,
                'dis_sit'=>$post_dis_sit,
                'dis_arm_grp'=>$post_dis_arm_grp,
                'dem_son'=>$post_dem_son,
                'lim_stu'=>$post_lim_stu,
                'exp_cap'=>$post_exp_cap,
                'iq_sco'=>$post_iq_sco,
                'ass_tes'=>$post_ass_tes,
            
                //INFORMACION EDUCATIVA 1
                'sch_grd_1'=>$post_sch_grd_1,
                'sch_yea_1'=>$post_sch_yea_1,
                'sch_cit_1'=>$post_sch_cit_1,
                'sch_ins_1'=>$post_sch_ins_1,
            
                //INFORMACION EDUCATIVA 2
                'sch_grd_2'=>$post_sch_grd_2,
                'sch_yea_2'=>$post_sch_yea_2,
                'sch_cit_2'=>$post_sch_cit_2,
                'sch_ins_2'=>$post_sch_ins_2,
            
                //INFORMACION EDUCATIVA 3
                'sch_grd_3'=>$post_sch_grd_3,
                'sch_yea_3'=>$post_sch_yea_3,
                'sch_cit_3'=>$post_sch_cit_3,
                'sch_ins_3'=>$post_sch_ins_3,
            
                //INFORMACION EDUCATIVA 4
                'sch_grd_4'=>$post_sch_grd_4,
                'sch_yea_4'=>$post_sch_yea_4,
                'sch_cit_4'=>$post_sch_cit_4,
                'sch_ins_4'=>$post_sch_ins_4,
            
                //INFORMACION EDUCATIVA 5
                'sch_grd_5'=>$post_sch_grd_5,
                'sch_yea_5'=>$post_sch_yea_5,
                'sch_cit_5'=>$post_sch_cit_5,
                'sch_ins_5'=>$post_sch_ins_5,
            
                //INFORMACION EDUCATIVA 6
                'sch_grd_6'=>$post_sch_grd_6,
                'sch_yea_6'=>$post_sch_yea_6,
                'sch_cit_6'=>$post_sch_cit_6,
                'sch_ins_6'=>$post_sch_ins_6,
            ];
            $_SESSION['pdf_info']=$pdf_info;
            header("Location: pdf_structure.php");
        break;

        //Metodo vista "revision_preinscripcion.php" caso "Confirmar o Aceptar Preinscripcion"
        case "Aceptada/Confirmada":

            /*
                Antecedente: Como se ha mencionado en el modelo "crear_actualizar.php", este debe permitir actualizar los numeros de documento tanto del estudiante como de los familiares, sin embargo, esto requiere que el controlador "actions.php", posea los numeros de documento originales, y los use como argumento antes de actualizarlos.

                Explicacion: Para solucionar el problema anterior, la solucion planteada es que a la hora de que la vista "revision_preinscripcion.php" redirja al archivo actions, esta enviara como parametro GET (Es decir, informacion por URL), los numeros de documentos del estudiante, Madre, Padre y Acudiente.

                Dichos valores GET seran recepcionado, para posteriormente ser guaardados en variables de nombre similar.

                Luego de esto se ejecutan los siguientes funciones:

                    1. crear_actualizar("update",$stu_doc_num) -> Donde $stu_doc_num es el numero orginal del documento del estudiante del cual se hara la sobreescritura o actualizacion de su informacion.
                    
                    2. crear_actualizar("confirmar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu) -> Donde $stu_doc_num, $doc_num_moth, $doc_num_fath, $doc_num_acu, son los numeros de documento originales de los estudiantes y sus familiares.

                    Dichos numeros de documentos orginial son imprescindibles en caso de que se haya requiera realizar cambios en estos valores dentro de la base de datos, todo esto ya que la funcion buscara todos los registros que contengan la infromacion antigua y esta la reescribe por la nueva.
            
            */
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
        
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("confirmar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/listado_preinscripciones.php");
        break;

        //Metodo vista "revision_preinscripcion.php" caso "Rechazar o Negar Preinscripcion"
        case "Rechaza/Negada":
            
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("rechazar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/listado_preinscripciones.php");
        break;

        case "crear_empleado":
            crear_actualizar("crear_empleado");
            header("Location: ../view/empleados/rectoria/listado_trabajadores.php");
        break;

        case "eliminar_empleado":
            crear_actualizar("eliminar_empleado",$post_emp_doc_num);
            header("Location: ../view/empleados/rectoria/listado_trabajadores.php");
        break;

        case "actualizar_empleado":
            crear_actualizar("actualizar_empleado",$post_emp_doc_num);
            header("Location: ../view/empleados/rectoria/listado_trabajadores.php");
        break;
    }
?>  