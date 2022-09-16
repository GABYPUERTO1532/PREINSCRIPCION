<?php

    include "../config/bd.php";

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
            global $stu_loc;
            global $stu_nei;
            global $stu_est;
            global $stu_cat;
            global $stu_tel;
            global $stu_enf;
            global $stu_eps;
            global $stu_ars;
            global $stu_ips;
            global $b_grp;
            global $rh_fact;
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

        global $coneccionBD;

        //Ingreso informacion Estudiante
        $sql=("INSERT INTO 'students' () VALUES ()");
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Madre
        $sql=("INSERT INTO 'familiars' () VALUES ()");
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Padre
        $sql=("INSERT INTO 'familiars' () VALUES ()");
        $consulta=$coneccionBD->query($sql);

        //Ingreso informacion Acudiente
        $sql=("INSERT INTO 'familiars' () VALUES ()");
        $consulta=$coneccionBD->query($sql);

        /*Ingreso informacion Relaciones*/

            //Relacion Madre - Estudiante
            $sql=("INSERT INTO 'relations' () VALUES ()");
            $consulta=$coneccionBD->query($sql);

            //Relacion Padre - Estudiante
            $sql=("INSERT INTO 'relations' () VALUES ()");
            $consulta=$coneccionBD->query($sql);

            //Relacion Acudiente Estudiante - Estudiante
            $sql=("INSERT INTO 'relations' () VALUES ()");
            $consulta=$coneccionBD->query($sql);

        /**/

    }

?>