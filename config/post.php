<?php

    //Funcion: Obtener el valor de $_POST['nombre_input'] y luego debe retornarlo para ser guardado en la varibale de destino, en caso que dicha clave de POST no este defnido retornada vacio
    function obtener_post($nombre_input){
        if(isset($_POST[$nombre_input])){
            return $_POST[$nombre_input];
        }else{
            return "";
        }
    }

    /*INFORMACION lOGIN FAMILIARES*/

        //Input: fam_doc_typ (Tipo de documento familiar)
        $fam_doc_typ=obtener_post('fam_doc_typ');

        //Input: fam_doc_num (Numero de documento familiar)
        $fam_doc_num=obtener_post('fam_doc_num');

        //Input: stu_doc_typ (Tipo de documento Estudiante)
        $stu_doc_typ=obtener_post('stu_doc_typ');

        //Input: stu_doc_num (Numero de documento Estudiante)
        $stu_doc_num=obtener_post('stu_doc_num');

        //Input: relation (Relacion Familiar con el estudiante)
        $relation=obtener_post('relation');

    /**/

    /*INFORMACION lOGIN EMPLEADOS*/

        //Input: fam_doc_typ (Correo Institucional Empleado)
        $emp_ema=obtener_post('emp_ema');

        //Input: emp_pass (Contraseña Empleado)
        $emp_pass=obtener_post('emp_pass');

        //Input: per_char (Cargo del empleado dentro de la institucion)
        $emp_char=obtener_post('emp_char');

    /**/

    /*INFORMACION FORMULARIO PREINSCRIPCION*/

        /*INFORMACION ESTUDIANTE*/

            //Input firs_sur (Primer Apellido Estudiante)
            $firs_sur=obtener_post("firs_sur");

            //Input sec_sur (Segundo Apellido Estudiante)
            $sec_sur=obtener_post("sec_sur");

            //Input firs_nam (Primer Nombre Estudiante)
            $firs_nam=obtener_post("firs_nam");

            //Input sec_nam (Segundo Nombre Estudiante)
            $sec_nam=obtener_post("sec_nam");

            //Input dat_bir (Fecha de Nacimiento Estudiante)
            $dat_bir=obtener_post("dat_bir");

            //Input stu_dep (Departamento de Origen Estudiante)
            $stu_dep=obtener_post("stu_dep");

            //Input stu_cit (Ciudad de Origen Estudiante)
            $stu_cit=obtener_post("stu_cit");

            /*
            
                Dato: Campos stu_doc_typ y stu_doc_num, no se declaran en esta seccion ya que han sido declarados anteriormente en la seccion del Login(Familiares)

            */

            //Input exp_cit (Ciudad de expedicion documento Estudiante)
            $exp_cit=obtener_post("exp_cit");

            //Input stu_add (Direccion de vivienda estudiante)
            $stu_add=obtener_post("stu_add");

            //Input stu_loc (Localidad de vivienda estudiante)
            $stu_loc=obtener_post("stu_loc");

            //Input stu_nei (Barrio de vivienda estudiante)
            $stu_nei=obtener_post("stu_nei");

            //Input stu_est (Estrato de vivienda estudiante)
            $stu_est=obtener_post("stu_est");

            //Input stu_cat (Categoria Sisben Estudiante)
            $stu_cat=obtener_post("stu_cat");

            //Input stu_tel (Numero de telefono Estudiante)
            $stu_tel=obtener_post("stu_tel");

            //Input stu_enf (Enfermedades del Estudiante)
            $stu_enf=obtener_post("stu_enf");

            //Input stu_eps (EPS del Estudiante)
            $stu_eps=obtener_post("stu_eps");

            //Input stu_ars (ARS del Estudiante)
            $stu_ars=obtener_post("stu_ars");

            //Input stu_ips (IPS del Estudiante)
            $stu_ips=obtener_post("stu_ips");

            //Input b_grp (Grupo Sanguineo del Estudiante)
            $b_grp=obtener_post("b_grp");

            //Input rh_fact (Factor RH del Estudiante)
            $rh_fact=obtener_post("rh_fact");

        /**/

        /*INFORMACION FAMILIARES*/

            /*INFORMACION MADRE*/

                //Input fam_nam_moth (Nombre Familiar (Madre))
                $fam_nam_moth=obtener_post("fam_nam_moth");

                //Input doc_typ_moth (Tipo de documento del familiar (Madre))
                $doc_typ_moth=obtener_post("doc_typ_moth");

                //Input doc_num_moth (Numero de documento del Familiar (Madre))
                $doc_num_moth=obtener_post("doc_num_moth");

                //Input fam_land_moth (Telefono Fijo del Familiar (Madre))
                $fam_land_moth=obtener_post("fam_land_moth");

                //Input mob_pho_moth (Numero Telefonico del Familiar (Madre))
                $mob_pho_moth=obtener_post("mob_pho_moth");

                //Input fam_add_moth (Direccion de vivienda del Familiar (Madre))
                $fam_add_moth=obtener_post("fam_add_moth");

                //Input fam_ocu_moth (Ocupacion del Familiar (Madre))
                $fam_ocu_moth=obtener_post("fam_ocu_moth");

                //Input fam_ema_moth (Correo Electronico del Familiar (Madre))
                $fam_ema_moth=obtener_post("fam_ema_moth");

            /**/

            /*INFORMACION PADRE*/

                //Input fam_nam_fath (Nombre Familiar (Padre))
                $fam_nam_fath=obtener_post("fam_nam_fath");

                //Input doc_typ_fath (Tipo de documento del familiar (Padre))
                $doc_typ_fath=obtener_post("doc_typ_fath");

                //Input doc_num_fath (Numero de documento del Familiar (Padre))
                $doc_num_fath=obtener_post("doc_num_fath");

                //Input fam_land_fath (Telefono Fijo del Familiar (Padre))
                $fam_land_fath=obtener_post("fam_land_fath");

                //Input mob_pho_fath (Numero Telefonico del Familiar (Padre))
                $mob_pho_fath=obtener_post("mob_pho_fath");

                //Input fam_add_fath (Direccion de vivienda del Familiar (Padre))
                $fam_add_fath=obtener_post("fam_add_fath");

                //Input fam_ocu_fath (Ocupacion del Familiar (Padre))
                $fam_ocu_fath=obtener_post("fam_ocu_fath");

                //Input fam_ema_fath (Correo Electronico del Familiar (Padre))
                $fam_ema_fath=obtener_post("fam_ema_fath");

            /**/

            /*INFORMACION ACUDIENTE*/

                //Input fam_nam_acu (Nombre Familiar (Acudiente))
                $fam_nam_acu=obtener_post("fam_nam_acu");

                //Input doc_typ_acu (Tipo de documento del familiar (Acudiente))
                $doc_typ_acu=obtener_post("doc_typ_acu");

                //Input doc_num_acu (Numero de documento del Familiar (Acudiente))
                $doc_num_acu=obtener_post("doc_num_acu");

                //Input fam_land_acu (Telefono Fijo del Familiar (Acudiente))
                $fam_land_acu=obtener_post("fam_land_acu");

                //Input mob_pho_acu (Numero Telefonico del Familiar (Acudiente))
                $mob_pho_acu=obtener_post("mob_pho_acu");

                //Input fam_add_acu (Direccion de vivienda del Familiar (Acudiente))
                $fam_add_acu=obtener_post("fam_add_acu");

                //Input fam_ocu_acu (Ocupacion del Familiar (Acudiente))
                $fam_ocu_acu=obtener_post("fam_ocu_acu");

                //Input fam_ema_acu (Correo Electronico del Familiar (Acudiente))
                $fam_ema_acu=obtener_post("fam_ema_acu");

            /**/

        /**/

        /*OTRA INFORMACION*/

            //Input conf_vic (Victima de conflicto armado)
            $conf_vic=obtener_post("conf_vic");

            //Input dis_sit (Situacion de desplazamiento)
            $dis_sit=obtener_post("dis_sit");

            //Input dis_arm_grp (Desvinculado de grupos Armados)
            $dis_arm_grp=obtener_post("dis_arm_grp");

            //Input dem_son (Hijo de desmovilizado)
            $dem_son=obtener_post("dem_son");

            //Input lim_stu (Limitaciones)
            $lim_stu=obtener_post("lim_stu");

            //Input exp_cap (Capacidades Excepcionales)
            $exp_cap=obtener_post("exp_cap");

            //Input iq_sco (Puntaje Coeficiente intelectual)
            $iq_sco=obtener_post("iq_sco");

            //Input ass_tes (Examen de valoracion)
            $ass_tes=obtener_post("ass_tes");

        /**/

        /*INFORMACION EDUCATIVA*/

            /*GRADO ESCOLAR 1*/

                //Input sch_grd_1 (Grado Escolar 1)
                $sch_grd_1=obtener_post("sch_grd_1");

                //Input sch_yea_1 (Año Escolar 1)
                $sch_yea_1=obtener_post("sch_yea_1");

                //Input sch_cit_1 (Ciudad donde fue cursado 1)
                $sch_cit_1=obtener_post("sch_cit_1");

                //Input sch_ins_1 (Instituro donde fue cursado 1)
                $sch_ins_1=obtener_post("sch_ins_1");

            /**/

            /*GRADO ESCOLAR 2*/

                //Input sch_grd_2 (Grado Escolar 2)
                $sch_grd_2=obtener_post("sch_grd_2");

                //Input sch_yea_2 (Año Escolar 2)
                $sch_yea_2=obtener_post("sch_yea_2");

                //Input sch_cit_2 (Ciudad donde fue cursado 2)
                $sch_cit_2=obtener_post("sch_cit_2");

                //Input sch_ins_2 (Instituro donde fue cursado 2)
                $sch_ins_2=obtener_post("sch_ins_2");

            /**/

            /*GRADO ESCOLAR 3*/

                //Input sch_grd_3 (Grado Escolar 3)
                $sch_grd_3=obtener_post("sch_grd_3");

                //Input sch_yea_3 (Año Escolar 3)
                $sch_yea_3=obtener_post("sch_yea_3");

                //Input sch_cit_3 (Ciudad donde fue cursado 3)
                $sch_cit_3=obtener_post("sch_cit_3");

                //Input sch_ins_3 (Instituro donde fue cursado 3)
                $sch_ins_3=obtener_post("sch_ins_3");

            /**/

            /*GRADO ESCOLAR 4*/

                //Input sch_grd_4 (Grado Escolar 4)
                $sch_grd_4=obtener_post("sch_grd_4");

                //Input sch_yea_4 (Año Escolar 4)
                $sch_yea_4=obtener_post("sch_yea_4");

                //Input sch_cit_4 (Ciudad donde fue cursado 4)
                $sch_cit_4=obtener_post("sch_cit_4");

                //Input sch_ins_4 (Instituro donde fue cursado 4)
                $sch_ins_4=obtener_post("sch_ins_4");

            /**/

            /*GRADO ESCOLAR 5*/

                //Input sch_grd_5 (Grado Escolar 5)
                $sch_grd_5=obtener_post("sch_grd_5");

                //Input sch_yea_5 (Año Escolar 5)
                $sch_yea_5=obtener_post("sch_yea_5");

                //Input sch_cit_5 (Ciudad donde fue cursado 5)
                $sch_cit_5=obtener_post("sch_cit_5");

                //Input sch_ins_5 (Instituro donde fue cursado 5)
                $sch_ins_5=obtener_post("sch_ins_5");

            /**/

            /*GRADO ESCOLAR 6*/

                //Input sch_grd_4 (Grado Escolar 6)
                $sch_grd_6=obtener_post("sch_grd_6");

                //Input sch_yea_6 (Año Escolar 6)
                $sch_yea_6=obtener_post("sch_yea_6");

                //Input sch_cit_6 (Ciudad donde fue cursado 6)
                $sch_cit_6=obtener_post("sch_cit_6");

                //Input sch_ins_6 (Instituro donde fue cursado 6)
                $sch_ins_6=obtener_post("sch_ins_6");

            /**/

        /**/

    /**/



?>