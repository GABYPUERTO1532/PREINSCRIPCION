<?php

    include "model/obtener_info.php";
    echo(obtener_info("obtener_pre_stu","1019604622")['pre_stu']);

    echo("<br>".password_hash("123456789",PASSWORD_DEFAULT));

?>