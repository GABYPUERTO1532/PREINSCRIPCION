<?php

    include "../config/bd.php";

    function login(){

        global $coneccionBD;
        global $emp_ema;
        global $emp_pass;
        global $emp_char;

        $sql="SELECT * FROM empleados WHERE per_char='$emp_char' AND per_ema='$emp_ema'";

        $consulta=$coneccionBD->query($sql);
        $row_num=mysqli_num_rows($consulta);
        
        if($row_num==1){
            $resultado=$consulta->fetch_assoc();
            if(password_verify($emp_pass,$resultado['per_hash'])){
                session_start();
                $_SESSION['per_char']=$emp_char;
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }

    }

?>