<?php

    include "../bd.php";

    function login(){

        global $coneccionBD;
        global $emp_ema;
        global $emp_pass;
        global $emp_char;

        $sql="SELECT * FROM employee WHERE per_ema='$emp_ema' AND per_hash='$emp_pass' AND per_char='$emp_char'";

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