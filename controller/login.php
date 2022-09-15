<?php

    include "../model/login.php";

    if (login()==TRUE){
        header("Location: ../view/dashboard.php");
        session_start();
        $_SESSION['session']=TRUE;
    }else{
        session_destroy();
        header("Location: ../");
    }




?>