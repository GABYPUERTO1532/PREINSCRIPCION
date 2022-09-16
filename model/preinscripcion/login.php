<?php

    include "../../config/bd.php";

    function login(){

        global $coneccionBD;
        global $fam_doc_typ;
        global $stu_doc_typ;
        global $fam_doc_num;
        global $stu_doc_num; 
        global $relation;

        $sql="SELECT * FROM familiars F, students S, relations R WHERE F.doc_typ='$fam_doc_typ' AND S.doc_typ='$stu_doc_typ' AND R.fam_id=$fam_doc_num AND R.rel_typ='$relation' AND R.stu_id=$stu_doc_num";

        $consulta=$coneccionBD->query($sql);
        $resultado=mysqli_num_rows($consulta);

        if ($resultado==1){
            $resultado=TRUE;
        }else{
            $resultado=FALSE;
        }
        return ($resultado);
    }

?>