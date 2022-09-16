<?php

    include "../../model/preinscripcion/login.php";

    if (login()==TRUE){
        header("Location: ../view/dashboard.php");
    }else{
        header("Location: ../");
    }

?>