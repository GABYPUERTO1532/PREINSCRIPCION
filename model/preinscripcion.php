<?php

    include "C://xampp/htdocs/PREINSCRIPCION/config/bd.php";

    function interaccion_bd($tipo_accion,$addons=null,$addons_2=null){

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

            //Varibles extras
            $pre_stu=1;
            date_default_timezone_set('America/Bogota');
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

        global $coneccionBD;

        switch ($tipo_accion){
            case "create":

                //Ingreso informacion Estudiante
                $sql=("INSERT INTO students (firs_sur,sec_sur,firs_nam,sec_nam,dat_bir,stu_cit,stu_dep,doc_typ,doc_num,exp_cit,stu_add,stu_nei,stu_loc,stu_est,stu_cat,stu_tel,stu_hob,stu_enf,stu_eps,stu_ars,stu_ips,b_grp,rh_fact,pre_stu,cre_dat,upd_dat) VALUES ('$post_firs_sur','$post_sec_sur','$post_firs_nam','$post_sec_nam','$post_dat_bir','$post_stu_cit','$post_stu_dep','$post_stu_doc_typ','$post_stu_doc_num','$post_exp_cit','$post_stu_add','$post_stu_nei','$post_stu_loc','$post_stu_est','$post_stu_cat','$post_stu_tel','$post_stu_hob','$post_stu_enf','$post_stu_eps','$post_stu_ars','$post_stu_ips','$post_b_grp','$post_rh_fact',TRUE,'$date','$date')");
                $consulta=$coneccionBD->query($sql);

                //Ingreso informacion Madre
                $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_moth','$post_doc_typ_moth','$post_doc_num_moth','$post_fam_land_moth','$post_mob_pho_moth','$post_fam_add_moth','$post_fam_ocu_moth','$post_fam_ema_moth','$date','$date')");
                $consulta=$coneccionBD->query($sql);

                //Ingreso informacion Padre
                $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_fath','$post_doc_typ_fath','$post_doc_num_fath','$post_fam_land_fath','$post_mob_pho_fath','$post_fam_add_fath','$post_fam_ocu_fath','$post_fam_ema_fath','$date','$date')");
                $consulta=$coneccionBD->query($sql);

                //Ingreso informacion Acudiente
                $sql=("INSERT INTO familiars (fam_nam,doc_typ,doc_num,fam_land,mob_pho,fam_add,fam_ocu,fam_ema,cre_dat,upd_dat) VALUES ('$post_fam_nam_acu','$post_doc_typ_acu','$post_doc_num_acu','$post_fam_land_acu','$post_mob_pho_acu','$post_fam_add_acu','$post_fam_ocu_acu','$post_fam_ema_acu','$date','$date')");
                $consulta=$coneccionBD->query($sql);

                /*Ingreso informacion Relaciones*/

                    //Relacion Madre - Estudiante
                    $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_moth','Madre','$post_stu_doc_num')");
                        $consulta=$coneccionBD->query($sql);

                    //Relacion Padre - Estudiante
                    $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_fath','Padre','$post_stu_doc_num')");
                    $consulta=$coneccionBD->query($sql);

                    //Relacion Acudiente Estudiante - Estudiante
                    $sql=("INSERT INTO relations (fam_doc_num,rel_typ,stu_doc_num) VALUES ('$post_doc_num_acu','Acudiente','$post_stu_doc_num')");
                    $consulta=$coneccionBD->query($sql);

                /**/

                    //Ingreso informacion "Other_information"
                    $sql=("INSERT INTO other_inf (stu_doc_num,conf_vic,dis_sit,dis_arm_grp,dem_son,lim_stu,exp_cap,iq_sco,ass_tes) VALUES ('$post_stu_doc_num','$post_conf_vic','$post_dis_sit','$post_dis_arm_grp','$post_dem_son','$post_lim_stu','$post_exp_cap','$post_iq_sco','$post_ass_tes')");
                    $consulta=$coneccionBD->query($sql);

                /*Ingreso Informacion Educativa*/

                    //Registro 1
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_1','$post_sch_yea_1','$post_sch_cit_1','$post_sch_ins_1')");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 2
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_2','$post_sch_yea_2','$post_sch_cit_2','$post_sch_ins_2')");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 3
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_3','$post_sch_yea_3','$post_sch_cit_3','$post_sch_ins_3')");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 4
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_4','$post_sch_yea_4','$post_sch_cit_4','$post_sch_ins_4')");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 5
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_5','$post_sch_yea_5','$post_sch_cit_5','$post_sch_ins_5')");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 6
                    $sql=("INSERT INTO edu_inf (stu_doc_num,sch_grd,sch_yea,sch_cit,sch_ins) VALUES ('$post_stu_doc_num','$post_sch_grd_6','$post_sch_yea_6','$post_sch_cit_6','$post_sch_ins_6')");
                    $consulta=$coneccionBD->query($sql);
                    
                /**/

                /*Ingreso de Registro confirmacion matricula*/
                
                    $sql="INSERT INTO pre_stu (stu_doc_typ,stu_doc_num,dat_pre) VALUES ('$post_stu_doc_typ','$post_stu_doc_num','$date')";
                    $consulta=$coneccionBD->query($sql);

                /**/

            break;

            case "update":

                //Actualizacion informacion Estudiante
                $sql=("UPDATE students SET firs_sur='$post_firs_sur', sec_sur='$post_sec_sur',firs_nam='$post_firs_nam', sec_nam='$post_sec_nam',dat_bir='$post_dat_bir', stu_cit='$post_stu_cit',stu_dep='$post_stu_dep', doc_typ='$post_stu_doc_typ',exp_cit='$post_exp_cit', stu_add='$post_stu_add',stu_nei='$post_stu_nei', stu_loc='$post_stu_loc',stu_est='$post_stu_est', stu_cat='$post_stu_cat',stu_tel='$post_stu_tel', stu_hob='$post_stu_hob',stu_enf='$post_stu_enf', stu_eps='$post_stu_eps',stu_ars='$post_stu_ars', stu_ips='$post_stu_ips',b_grp='$post_b_grp', rh_fact='$post_rh_fact', pre_stu=TRUE, upd_dat='$date' WHERE doc_num='$post_stu_doc_num'");
                $consulta=$coneccionBD->query($sql);
                
                //Actualizacion informacion Madre
                $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_moth',doc_typ='$post_doc_typ_moth',fam_land='$post_fam_land_moth',mob_pho='$post_mob_pho_moth',fam_add='$post_fam_add_moth',fam_ocu='$post_fam_ocu_moth',fam_ema='$post_fam_ema_moth',upd_dat='$date'WHERE doc_num='$post_doc_num_moth'");
                $consulta=$coneccionBD->query($sql);

                //Actualizacion informacion Padre
                $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_fath',doc_typ='$post_doc_typ_fath',fam_land='$post_fam_land_fath',mob_pho='$post_mob_pho_fath',fam_add='$post_fam_add_fath',fam_ocu='$post_fam_ocu_fath',fam_ema='$post_fam_ema_fath',upd_dat='$date'WHERE doc_num='$post_doc_num_fath'");
                $consulta=$coneccionBD->query($sql);

                //Actualizacion informacion Acudiente
                $sql=("UPDATE familiars SET fam_nam='$post_fam_nam_acu',doc_typ='$post_doc_typ_acu',fam_land='$post_fam_land_acu',mob_pho='$post_mob_pho_acu',fam_add='$post_fam_add_acu',fam_ocu='$post_fam_ocu_acu',fam_ema='$post_fam_ema_acu',upd_dat='$date'WHERE doc_num='$post_doc_num_acu'");
                $consulta=$coneccionBD->query($sql);

                //Actualizacion informacion "Other_information"
                $sql=("UPDATE other_inf SET conf_vic='$post_conf_vic',dis_sit='$post_dis_sit',dis_arm_grp='$post_dis_arm_grp',dem_son='$post_dem_son',exp_cap='$post_exp_cap',iq_sco='$post_iq_sco',ass_tes='$post_ass_tes' WHERE stu_doc_num='$post_stu_doc_num'");
                $consulta=$coneccionBD->query($sql);

                /*Actualizacion Informacion Educativa*/

                    //Registro 1
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_1',sch_yea='$post_sch_yea_1',sch_cit='$post_sch_cit_1',sch_ins='$post_sch_ins_1' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 2
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_2',sch_yea='$post_sch_yea_2',sch_cit='$post_sch_cit_2',sch_ins='$post_sch_ins_2' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 3
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_3',sch_yea='$post_sch_yea_3',sch_cit='$post_sch_cit_3',sch_ins='$post_sch_ins_3' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);
                        
                    //Registro 4
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_4',sch_yea='$post_sch_yea_4',sch_cit='$post_sch_cit_4',sch_ins='$post_sch_ins_4' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 5
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_5',sch_yea='$post_sch_yea_5',sch_cit='$post_sch_cit_5',sch_ins='$post_sch_ins_5' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);

                    //Registro 6
                    $sql=("UPDATE edu_inf SET sch_grd='$post_sch_grd_6',sch_yea='$post_sch_yea_6',sch_cit='$post_sch_cit_6',sch_ins='$post_sch_ins_6' WHERE stu_doc_num='$post_stu_doc_num'");
                    $consulta=$coneccionBD->query($sql);
                    
                /**/

                /*Ingreso de Registro confirmacion matricula*/
                
                    $sql="INSERT INTO pre_stu (stu_doc_typ,stu_doc_num,dat_pre) VALUES ('$post_stu_doc_typ','$post_stu_doc_num','$date')";
                    $consulta=$coneccionBD->query($sql);

                /**/

            break;

            case "obtener_stu_doc_num":
            
                $sql="SELECT doc_num FROM students";
                $consulta=$coneccionBD->query($sql);
                return $consulta;

            break;

            case "matricula_verificada":

                $sql="UPDATE students SET pre_stu=TRUE WHERE doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

                $sql="DELETE FROM pre_stu WHERE stu_doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

            break;

            case "matricula_rechazada":

                $sql="UPDATE students SET pre_stu=FALSE WHERE doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

                $sql="DELETE FROM pre_stu WHERE stu_doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

            break;

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

            case "obtener_barrios":

                $sql="SELECT neig_nam FROM neigh";
                $consulta=$coneccionBD->query($sql);
                $array=[];
                while($item=mysqli_fetch_assoc($consulta)){
                    array_push($array,$item['neig_nam']);
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

            case "obtener_info_estudiante":

                $sql="SELECT * FROM students WHERE doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);
                $resultado=mysqli_fetch_assoc($consulta);
                return $resultado;

            break;

            case "obtener_info_familiar":
        
                $sql="SELECT fam_doc_num,rel_typ FROM relations WHERE stu_doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

                while($registro=mysqli_fetch_assoc($consulta)){
                    if($registro['rel_typ']=="Madre"){
                        $moth_doc_num=$registro['fam_doc_num'];

                    }elseif($registro['rel_typ']=="Padre"){
                        $fath_doc_num=$registro['fam_doc_num'];
                        
                    }elseif($registro['rel_typ']=="Acudiente"){
                        $acu_doc_num=$registro['fam_doc_num'];
                    }
                }

                switch ($addons_2){
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

                $sql="SELECT * FROM familiars WHERE doc_num='$fam_doc_num'";
                $consulta=$coneccionBD->query($sql);
                $resultado=mysqli_fetch_assoc($consulta);

                return $resultado;

            break;

            case "obtener_other_inf":

                $sql="SELECT * FROM other_inf WHERE stu_doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);
                $resultado=mysqli_fetch_assoc($consulta);

                return $resultado;

            break;

            case "obtener_edu_info":
                
                $sql="SELECT * FROM edu_inf WHERE stu_doc_num='$addons'";
                $consulta=$coneccionBD->query($sql);

                while($registro=mysqli_fetch_assoc($consulta)){

                    if(!isset($edu_inf_1)){
                        $edu_inf_1=$registro;

                    }elseif(!isset($edu_inf_2)){
                        $edu_inf_2=$registro;

                    }elseif(!isset($edu_inf_3)){
                        $edu_inf_3=$registro;

                    }elseif(!isset($edu_inf_4)){
                        $edu_inf_4=$registro;

                    }elseif(!isset($edu_inf_5)){
                        $edu_inf_5=$registro;

                    }elseif(!isset($edu_inf_6)){
                        $edu_inf_6=$registro;
                    }

                }

                switch ($addons_2){
                    case "edu_inf_1":
                        $resultado=$edu_inf_1;
                    break;

                    case "edu_inf_2":
                        $resultado=$edu_inf_2;
                    break;

                    case "edu_inf_3":
                        $resultado=$edu_inf_3;
                    break;

                    case "edu_inf_4":
                        $resultado=$edu_inf_4;
                    break;

                    case "edu_inf_5":
                        $resultado=$edu_inf_5;
                    break;

                    case "edu_inf_6":
                        $resultado=$edu_inf_6;
                    break;

                }

                return $resultado;          
            
            break;
        }

        
    }

?>