<?php

    include "model/obtener_info.php";
    echo(obtener_info("obtener_pre_stu","1019604622")['pre_stu']);

    echo("<br>".password_hash("1019604621",PASSWORD_DEFAULT));

?>