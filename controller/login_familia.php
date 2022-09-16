<?php

    include "../model/login_familia.php";

    if (login()){
        header("Location: ../view/preinscripcion");
    }else{
        header("Location: ../");
    }

?>