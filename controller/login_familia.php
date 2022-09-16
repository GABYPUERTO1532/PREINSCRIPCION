<?php

    include "../model/login_familia.php";

    if (login()==TRUE){
        header("Location: ../view/dashboard.php");
    }else{
        header("Location: ../");
    }

?>