<?php

    if(isset($_POST['fam_doc_typ'])){
        $fam_doc_typ=$_POST['fam_doc_typ'];
    }else{
        $fam_doc_typ="";
    }

    if(isset($_POST['fam_doc_num'])){
        $fam_doc_num=$_POST['fam_doc_num'];
    }else{
        $fam_doc_num="";
    }

    if(isset($_POST['stu_doc_typ'])){
        $stu_doc_typ=$_POST['stu_doc_typ'];
    }else{
        $stu_doc_typ="";
    }

    if(isset($_POST['stu_doc_num'])){
        $stu_doc_num=$_POST['stu_doc_num'];
    }else{
        $stu_doc_num="";
    }

    if(isset($_POST['relation'])){
        $relation=$_POST['relation'];
    }else{
        $relation="";
    }



?>