<?php

    include "../model/preinscripcion.php";
    $stu_info=obtener_registro_stu($stu_doc_num);

    $moth_info=obtener_registro_fam($stu_doc_num,"Madre");
    $fath_info=obtener_registro_fam($stu_doc_num,"Padre");
    $acu_info=obtener_registro_fam($stu_doc_num,"Acudiente");

    $oth_info=obtener_registro_oth_inf($stu_doc_num);

    $edu_inf_1=obtener_registro_edu_inf($stu_doc_num,"edu_inf_1");
    $edu_inf_2=obtener_registro_edu_inf($stu_doc_num,"edu_inf_2");
    $edu_inf_3=obtener_registro_edu_inf($stu_doc_num,"edu_inf_3");
    $edu_inf_4=obtener_registro_edu_inf($stu_doc_num,"edu_inf_4");
    $edu_inf_5=obtener_registro_edu_inf($stu_doc_num,"edu_inf_5");
    $edu_inf_6=obtener_registro_edu_inf($stu_doc_num,"edu_inf_6");

?>